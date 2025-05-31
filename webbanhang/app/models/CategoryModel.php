<?php
class CategoryModel
{
    private $conn;
    private $table_name = "category";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    private function validateCategoryData($name)
    {
        $errors = [];
        if (empty($name)) {
            $errors['name'] = 'Tên danh mục không được để trống';
        }
        return $errors;
    }

    public function getCategories()
    {
        $query = "SELECT id, name, description FROM {$this->table_name}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getCategoryById($id)
    {
        if (!is_numeric($id)) {
            return null;
        }
        $query = "SELECT id, name, description FROM {$this->table_name} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function addCategory($name, $description)
    {
        $errors = $this->validateCategoryData($name);
        if (!empty($errors)) {
            return $errors;
        }

        $query = "INSERT INTO {$this->table_name} (name, description) VALUES (:name, :description)";
        $stmt = $this->conn->prepare($query);

        $name = htmlspecialchars(strip_tags($name));
        $description = htmlspecialchars(strip_tags($description ?? ''));

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);

        if ($stmt->execute()) {
            return true;
        }

        return ['error' => 'Không thể thêm danh mục. Vui lòng thử lại.'];
    }

    public function updateCategory($id, $name, $description)
    {
        $errors = $this->validateCategoryData($name);
        if (!empty($errors)) {
            return $errors;
        }

        $query = "UPDATE {$this->table_name} SET name = :name, description = :description WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $name = htmlspecialchars(strip_tags($name));
        $description = htmlspecialchars(strip_tags($description ?? ''));

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        }

        return ['error' => 'Không thể cập nhật danh mục. Vui lòng thử lại.'];
    }

    public function deleteCategory($id)
    {
        if ($this->hasProducts($id)) {
            return ['error' => 'Không thể xóa danh mục này vì có sản phẩm liên quan.'];
        }

        $query = "DELETE FROM {$this->table_name} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function hasProducts($id)
    {
        $query = "SELECT COUNT(*) FROM product WHERE category_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
}

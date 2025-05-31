<?php
require_once('app/config/database.php');
require_once('app/models/CategoryModel.php');

class CategoryController
{
    private $categoryModel;
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->categoryModel = new CategoryModel($this->db);
    }

    public function index()
    {
        $this->list();
    }

    public function list()
    {
        $categories = $this->categoryModel->getCategories();
        include 'app/views/category/list.php';
    }

    public function show($id)
    {
        $category = $this->categoryModel->getCategoryById($id);
        if ($category) {
            include 'app/views/category/show.php';
        } else {
            $error = "Không tìm thấy danh mục.";
            $categories = $this->categoryModel->getCategories();
            include 'app/views/category/list.php';
        }
    }

    public function add()
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';

            $result = $this->categoryModel->addCategory($name, $description);
            if (is_array($result)) {
                $errors = $result;
            } else {
                header('Location: /webbanhang/Category/list');
                exit;
            }
        }
        include 'app/views/category/add.php';
    }

    public function edit($id)
    {
        $errors = [];
        $category = $this->categoryModel->getCategoryById($id);
        if (!$category) {
            $error = "Không tìm thấy danh mục.";
            $categories = $this->categoryModel->getCategories();
            include 'app/views/category/list.php';
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';

            $result = $this->categoryModel->updateCategory($id, $name, $description);
            if (is_array($result)) {
                $errors = $result;
            } else {
                header('Location: /webbanhang/Category/list');
                exit;
            }
        }
        include 'app/views/category/edit.php';
    }

    public function delete($id)
    {
        $result = $this->categoryModel->deleteCategory($id);
        if (is_array($result)) {
            $error = $result['error'];
            $categories = $this->categoryModel->getCategories();
            include 'app/views/category/list.php';
        } else {
            header('Location: /webbanhang/Category/list');
            exit;
        }
    }
}

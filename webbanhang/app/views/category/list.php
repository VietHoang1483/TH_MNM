<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Danh sách danh mục</title>

  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <style>
    body {
      background-color: #bb86fc;
      color: #e0e0e0;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    
    .page-header {
      color: #bb86fc;
      font-weight: 500;
      text-align: center;
      margin-bottom: 2rem;
    }
    
    .btn-primary {
      background-color: #3700b3;
      transition: background-color 0.3s ease;
    }
    
    .btn-primary:hover {
      background-color: #4a1bbf;
    }
    
    .action-btn {
      min-width: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin: 0 4px;
    }
    
    .error-box {
      margin-bottom: 1.5rem;
      padding: 1rem;
      border-left: 4px solid #cf6679;
      background-color: #422a2a;
      color: #cf6679;
      border-radius: 4px;
    }
    
    table {
      background-color: #1e1e1e;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    
    table.striped>tbody>tr {
      border-bottom: 1px solid #333;
    }
    
    table.striped>tbody>tr:nth-child(odd) {
      background-color: #bb86fc;
    }
    
    table.striped>tbody>tr:hover {
      background-color:rgb(99, 97, 97);
    }
    
    th {
      background-color: #252525 !important;
      color: #bb86fc !important;
      font-weight: 500;
    }
    
    td {
      border-bottom: 1px solid #333;
    }
    
    .empty-state {
      background-color: #1e1e1e;
      padding: 2rem;
      border-radius: 8px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    
    .empty-state i {
      color: #333;
      font-size: 4rem;
    }
    
    .empty-state h5 {
      color:rgb(116, 116, 116);
      margin-top: 1rem;
    }
    
    .empty-state p {
      color: #9e9e9e;
    }
    
    .container-flex {
      flex: 1;
      padding: 3rem 1rem;
    }
    
    a.category-link {
      color:rgb(0, 0, 0);
      font-weight: 500;
      transition: color 0.3s ease;
    }
    
    a.category-link:hover {
      color:rgb(0, 0, 0);
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <?php include 'app/views/shares/header.php'; ?>

  <main>
    <div class="container-flex">
      <?php if (!empty($error)): ?>
        <div class="error-box">
          <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
      <?php endif; ?>

      <h4 class="page-header"><i class="material-icons left">category</i>Danh sách danh mục</h4>

      <div class="right-align" style="margin-bottom: 1.5rem;">
        <a href="/webbanhang/Category/add" class="btn btn-primary waves-effect waves-light">
          <i class="material-icons left">add</i>Thêm danh mục
        </a>
      </div>

      <?php if (empty($categories)): ?>
        <div class="empty-state z-depth-1">
          <i class="material-icons large">inventory_2</i>
          <h5>Không có danh mục nào</h5>
          <p>Hãy thêm danh mục mới để bắt đầu</p>
        </div>
      <?php else: ?>
        <table class="striped responsive-table">
          <thead>
            <tr>
              <th class="center-align" style="width: 10%;">ID</th>
              <th class="center-align" style="width: 30%;">Tên danh mục</th>
              <th class="center-align" style="width: 40%;">Mô tả</th>
              <th class="center-align" style="width: 20%;">Hành động</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categories as $category): ?>
              <tr>
                <td class="center-align"><?php echo htmlspecialchars($category->id, ENT_QUOTES, 'UTF-8'); ?></td>
                <td>
                  <a href="/webbanhang/Category/show/<?php echo $category->id; ?>" class="category-link">
                    <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                  </a>
                </td>
                <td><?php echo htmlspecialchars($category->description ?: 'Không có mô tả', ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="center-align">
                  <a href="/webbanhang/Category/edit/<?php echo $category->id; ?>" 
                     class="btn yellow darken-1 waves-effect waves-light action-btn tooltipped" 
                     data-tooltip="Sửa">
                    <i class="material-icons">edit</i>
                  </a>
                  <a href="/webbanhang/Category/delete/<?php echo $category->id; ?>" 
                     class="btn red darken-1 waves-effect waves-light action-btn tooltipped" 
                     data-tooltip="Xóa"
                     onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">
                    <i class="material-icons">delete</i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </main>

  <?php include 'app/views/shares/footer.php'; ?>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize tooltips
      var tooltips = document.querySelectorAll('.tooltipped');
      M.Tooltip.init(tooltips);
    });
  </script>
</body>

</html>
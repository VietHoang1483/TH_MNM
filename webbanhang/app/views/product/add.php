<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Thêm sản phẩm</title>

  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
    }
    
    .card {
      background-color: #1e1e1e;
      border-radius: 8px;
      overflow: hidden;
    }
    
    .card-title {
      color: #bb86fc;
      font-weight: 500;
      padding: 20px;
    }
    
    .card-header {
      background-color: #252525;
      border-bottom: 1px solid #333;
    }
    
    .input-field label {
      color: #9e9e9e;
    }
    
    .input-field input:focus + label,
    .input-field textarea:focus + label {
      color: #bb86fc !important;
    }
    
    .input-field input:focus,
    .input-field textarea:focus {
      border-bottom: 1px solid #bb86fc !important;
      box-shadow: 0 1px 0 0 #bb86fc !important;
    }
    
    .input-field .prefix.active {
      color: #bb86fc;
    }
    
    .dropdown-content {
      background-color: #252525;
    }
    
    .dropdown-content li > a, 
    .dropdown-content li > span {
      color: #e0e0e0;
    }
    
    .dropdown-content li:hover {
      background-color: #333 !important;
    }
    
    .btn {
      background-color: #3700b3;
    }
    
    .btn:hover {
      background-color: #4a1bbf;
    }
    
    .btn-flat {
      color: #bb86fc !important;
    }
    
    .btn-flat:hover {
      background-color: rgba(187, 134, 252, 0.1) !important;
    }
    
    .file-field .btn {
      background-color: #3700b3;
    }
    
    .file-field .file-path-wrapper {
      padding-left: 10px;
    }
    
    .error-panel {
      background-color: #422a2a !important;
      border-left: 4px solid #cf6679;
      color: #cf6679;
      padding: 15px;
      margin: 0 15px 15px 15px;
      border-radius: 4px;
    }
    
    .error-panel ul {
      margin: 0;
      padding-left: 20px;
    }
    
    select {
      display: block;
      background-color: transparent;
      color: #e0e0e0;
      border-bottom: 1px solid #9e9e9e;
    }
    
    select:focus {
      border-bottom: 1px solid #bb86fc;
      box-shadow: 0 1px 0 0 #bb86fc;
    }
    
    .select-wrapper .caret {
      fill: #9e9e9e;
    }
    
    .select-wrapper input.select-dropdown:focus {
      border-bottom: 1px solid #bb86fc !important;
    }
  </style>
</head>

<body>
  <?php include 'app/views/shares/header.php'; ?>

  <main>
    <div class="container" style="margin-top: 30px; margin-bottom: 50px;">
      <div class="row">
        <div class="col s12 m8 offset-m2 l6 offset-l3">

          <div class="card">
            <div class="card-header">
              <span class="card-title">Thêm sản phẩm mới</span>
            </div>

            <?php if (!empty($errors)): ?>
              <div class="error-panel">
                <ul class="browser-default">
                  <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>

            <div class="card-content">
              <form method="POST" action="/webbanhang/Product/save" enctype="multipart/form-data">

                <!-- Tên sản phẩm -->
                <div class="input-field">
                  <i class="material-icons prefix">label</i>
                  <input id="name" name="name" type="text" class="validate" required>
                  <label for="name">Tên sản phẩm</label>
                </div>

                <!-- Mô tả -->
                <div class="input-field">
                  <i class="material-icons prefix">description</i>
                  <textarea id="description" name="description" class="materialize-textarea" required></textarea>
                  <label for="description">Mô tả</label>
                </div>

                <div class="row">
                  <div class="input-field col s12 m6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="price" name="price" type="number" step="0.01" class="validate" required>
                    <label for="price">Giá (VND)</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <i class="material-icons prefix">category</i>
                    <select id="category_id" name="category_id" required>
                      <option value="" disabled selected>Chọn danh mục</option>
                      <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category->id; ?>">
                          <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <label>Danh mục</label>
                  </div>
                </div>

                <!-- Hình ảnh -->
                <div class="file-field input-field">
                  <div class="btn">
                    <i class="material-icons left">image</i>
                    <span>Hình ảnh</span>
                    <input id="image" name="image" type="file" accept="image/*" />
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Tải lên hình ảnh sản phẩm" />
                  </div>
                </div>

                <!-- Nút submit và quay lại -->
                <div class="right-align" style="margin-top: 30px;">
                  <a href="/webbanhang/Product/list" class="btn-flat waves-effect" style="margin-right: 15px;">
                    Quay lại
                  </a>
                  <button type="submit" class="btn waves-effect waves-light">
                    <i class="material-icons left">add</i>
                    Thêm sản phẩm
                  </button>
                </div>

              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <?php include 'app/views/shares/footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize select dropdown
      var elemsSelect = document.querySelectorAll('select');
      M.FormSelect.init(elemsSelect);
      
      // Initialize character counter for textarea
      var textarea = document.getElementById('description');
      if (textarea) {
        M.CharacterCounter.init(textarea);
      }
    });
  </script>
</body>

</html>
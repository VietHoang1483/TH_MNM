<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thêm danh mục</title>

  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    
    .card {
      background-color: #1e1e1e;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 600px;
    }
    
    .page-header {
      background-color: #3700b3;
      padding: 24px 20px;
      color: white;
      font-weight: 500;
      border-bottom: 1px solid #333;
    }
    
    .card-content {
      padding: 24px;
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
    
    .btn-primary {
      background-color: #3700b3;
      transition: background-color 0.3s ease;
    }
    
    .btn-primary:hover {
      background-color: #4a1bbf;
    }
    
    .btn-flat {
      color: #bb86fc !important;
    }
    
    .btn-flat:hover {
      background-color: rgba(187, 134, 252, 0.1) !important;
    }
    
    .error-box {
      margin: 0 24px 16px;
      padding: 16px;
      border-left: 4px solid #cf6679;
      background-color: #422a2a;
      color: #cf6679;
      border-radius: 4px;
    }
    
    .error-box ul {
      margin: 0;
      padding-left: 20px;
    }
    
    textarea.materialize-textarea {
      min-height: 120px;
      color: #e0e0e0;
    }
    
    .container-flex {
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 1;
      padding: 3rem 1rem;
    }
  </style>
</head>

<body>
  <?php include 'app/views/shares/header.php'; ?>

  <main>
    <div class="container-flex">
      <div class="card z-depth-4">
        <!-- Header form -->
        <div class="page-header">
          <h5><i class="material-icons left">category</i>Thêm danh mục mới</h5>
        </div>

        <!-- Error messages -->
        <?php if (!empty($errors)): ?>
          <div class="error-box">
            <ul class="browser-default">
              <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- Form content -->
        <div class="card-content">
          <form method="POST" action="/webbanhang/Category/add">
            <!-- Tên danh mục -->
            <div class="input-field">
              <i class="material-icons prefix">label</i>
              <input id="name" name="name" type="text" required class="validate">
              <label for="name">Tên danh mục</label>
            </div>

            <!-- Mô tả -->
            <div class="input-field">
              <i class="material-icons prefix">description</i>
              <textarea id="description" name="description" class="materialize-textarea"></textarea>
              <label for="description">Mô tả</label>
            </div>

            <!-- Nút submit -->
            <div class="right-align" style="margin-top: 2rem;">
              <a href="/webbanhang/Category/list" class="btn-flat waves-effect" style="margin-right: 1rem;">
                <i class="material-icons left">arrow_back</i>Quay lại
              </a>
              <button type="submit" class="btn btn-primary waves-effect waves-light">
                <i class="material-icons left">add</i>Thêm danh mục
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include 'app/views/shares/footer.php'; ?>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize any required components
    });
  </script>
</body>

</html>
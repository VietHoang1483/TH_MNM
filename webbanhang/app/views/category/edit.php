<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chỉnh sửa danh mục</title>

  <!-- Materialize CSS -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    rel="stylesheet"
  />
  <style>
    .page-header {
      background-color: #0284c7; /* primary 600 */
      padding: 24px 20px;
      border-radius: 12px 12px 0 0;
      color: white;
      font-weight: 700;
    }

    .btn-custom {
      background-color: #0284c7;
      transition: background-color 0.2s ease;
    }

    .btn-custom:hover {
      background-color: #0369a1;
    }

    .error-box {
      margin: 1rem 1.5rem 0;
      padding: 1rem 1.2rem;
      border-left: 5px solid #e53935;
      background-color: #ffebee;
      color: #b71c1c;
      border-radius: 4px;
    }
  </style>
</head>

<body class="grey lighten-4">
  <?php include 'app/views/shares/header.php'; ?>

  <div
    class="container"
    style="min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 3rem 0;"
  >
    <div
      class="card z-depth-5"
      style="max-width: 600px; width: 100%; border-radius: 12px;"
    >
      <!-- Header -->
      <div class="page-header">
        <h5>Chỉnh sửa danh mục</h5>
      </div>

      <!-- Error messages -->
      <?php if (!empty($errors)): ?>
        <div class="error-box">
          <ul class="browser-default" style="padding-left: 1.2rem; margin: 0;">
            <?php foreach ($errors as $error): ?>
              <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <!-- Form -->
      <div class="card-content">
        <form
          method="POST"
          action="/webbanhang/Category/edit/<?php echo $category->id; ?>"
        >
          <input type="hidden" name="id" value="<?php echo $category->id; ?>" />

          <!-- Tên danh mục -->
          <div class="input-field">
            <input
              id="name"
              name="name"
              type="text"
              class="validate"
              required
              value="<?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>"
            />
            <label for="name" class="active">Tên danh mục</label>
          </div>

          <!-- Mô tả -->
          <div class="input-field">
            <textarea
              id="description"
              name="description"
              class="materialize-textarea"
              rows="4"
            ><?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
            <label for="description" class="active">Mô tả</label>
          </div>

          <!-- Submit -->
          <div class="right-align" style="margin-top: 2rem;">
            <a
              href="/webbanhang/Category/list"
              class="btn-flat waves-effect"
              style="margin-right: 1rem;"
            >
              Quay lại
            </a>
            <button
              type="submit"
              class="btn btn-custom waves-effect waves-light"
            >
              Cập nhật danh mục
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include 'app/views/shares/footer.php'; ?>

  <!-- Materialize JS & icons -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
  ></script>
  <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"
  />
</body>

</html>

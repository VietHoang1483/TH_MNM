<?php include 'app/views/shares/header.php'; ?>
<body class="grey lighten-4"> <!-- đổi nền body sang màu sáng -->

<div class="container" style="min-height: 100vh; padding-top: 3rem; padding-bottom: 3rem;">
  <div class="card white z-depth-3"> <!-- đổi nền card thành trắng -->
    <!-- Header -->
    <div class="page-header" style="background-color: rgb(33, 150, 243); padding: 32px 24px; border-radius: 12px 12px 0 0;">
      <h1 style="color: white; font-weight: 700; margin: 0;">Chi tiết sản phẩm</h1>
    </div>

    <!-- Nội dung sản phẩm -->
    <div class="card-content black-text"> <!-- đổi chữ thành đen -->
      <div class="row">
        <!-- Thông tin sản phẩm -->
        <div class="col s12 m6">
          <p class="info-label">ID:</p>
          <p class="info-value"><?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?></p>

          <h4 class="blue-text text-darken-2" style="font-weight: 600;">
            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
          </h4>

          <p class="info-label">Danh mục:</p>
          <p class="info-value"><?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8') ?: 'Không có danh mục'; ?></p>

          <p class="info-label">Giá:</p>
          <p class="info-value"><?php echo number_format($product->price, 0, ',', '.'); ?> VND</p>


          <p class="info-label">Mô tả:</p>
          <p class="info-value">
            <?php echo nl2br(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8') ?: 'Không có mô tả'); ?>
          </p>
        </div>

        <!-- Hình ảnh -->
        <div class="col s12 m6 center-align valign-wrapper" style="height: 100%;">
          <?php
          $imagePath = !empty($product->image) ? "/webbanhang/uploads/" . htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8') : '';
          $absolutePath = !empty($product->image) ? $_SERVER['DOCUMENT_ROOT'] . "/webbanhang/uploads/" . $product->image : '';
          $fileExists = $imagePath && file_exists($absolutePath);
          ?>
          <?php if ($product->image): ?>
            <img src="/webbanhang/<?php echo $product->image; ?>" class="card-img-top" alt="Product Image" style="max-width: 100%;">
          <?php endif; ?>
        </div>
      </div>

      <!-- Nút quay lại -->
      <div class="row" style="margin-top: 3rem;">
        <div class="col s12 m6 center-align">
          <a href="/webbanhang/Product/index" class="btn blue lighten-1 waves-effect waves-light">Quay lại trang chủ</a>
        </div>
        <div class="col s12 m6 center-align">
          <a href="/webbanhang/Product/index" class="btn blue lighten-1 waves-effect waves-light">Quay lại danh sách sản phẩm</a>
        </div>
        
      </div>
    </div>
  </div>
</div>
</body>
<?php include 'app/views/shares/footer.php'; ?>

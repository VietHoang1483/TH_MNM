<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TH-Shop - Danh sách sản phẩm</title>
  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
    }
    
    .card {
      background-color: #1e1e1e;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    
    .card-image img {
      height: 200px;
      object-fit: cover;
    }
    
    .card-content {
      border-bottom: 1px solid #333;
    }
    
    .card-title {
      color: #bb86fc;
      font-weight: 500;
      line-height: 1.5;
    }
    
    .card-action {
      background-color: #252525 !important;
      border-top: none !important;
    }
    
    .badge {
      background-color: #3700b3 !important;
    }
    
    .btn.blue.darken-2 {
      background-color: #3700b3;
    }
    
    .btn.blue.darken-2:hover {
      background-color: #4a1bbf;
    }
    
    .btn-small.yellow.darken-2 {
      background-color: #ffab00;
    }
    
    .btn-small.red.darken-2 {
      background-color: #cf6679;
    }
    
    .empty-state {
      background-color: #1e1e1e;
      border-radius: 8px;
      padding: 2rem;
    }
    
    .empty-state i {
      color: #333;
    }
    
    .price-tag {
      color: #03dac6;
      font-weight: 600;
    }
    
    .section h4 {
      color: #bb86fc;
    }
    
    .grey.lighten-4 {
      background-color: #121212 !important;
    }
    
    .empty-state p {
      color: #9e9e9e;
    }
    
    .no-image-placeholder {
      background-color: #252525;
      color: #333;
    }
    
    .divider {
      background-color: #333;
    }
    
    .collection {
      border: 1px solid #333;
    }
    
    .collection .collection-item {
      background-color: #1e1e1e;
      border-bottom: 1px solid #333;
    }
    a.btn-small {
    display: flex;
    align-items: center; /* Căn giữa icon và chữ theo chiều dọc */
    justify-content: center; /* Căn giữa theo chiều ngang */
    padding: 10px 20px;
    font-size: 16px;
}

a.btn-small .material-icons {
    margin-right: 8px; /* Khoảng cách giữa icon và chữ */
    font-size: 20px; /* Kích thước biểu tượng */
}

  </style>
</head>

<body>
  <?php include 'app/views/shares/header.php'; ?>

  <div class="container">
    <!-- Header -->
    <div class="section center-align">
      <h4>Danh sách sản phẩm</h4>
      <!-- Optional add product button -->
      <!--
      <a href="/webbanhang/Product/add" class="btn waves-effect waves-light">
        <i class="material-icons left">add</i> Thêm sản phẩm
      </a>
      -->
    </div>

    <?php if (empty($products)): ?>
      <div class="empty-state center-align">
        <i class="material-icons large">inventory_2</i>
        <h5>Không có sản phẩm nào</h5>
        <p>Hãy thêm sản phẩm mới để bắt đầu</p>
        <a href="/webbanhang/Product/add" class="btn waves-effect waves-light">
          Thêm sản phẩm đầu tiên
        </a>
      </div>
    <?php else: ?>
      <div class="row">
        <?php foreach ($products as $product): ?>
          <div class="col s12 m6 l4">
            <div class="card hoverable">
              <div class="card-image waves-effect waves-block waves-light">
                <?php if (!empty($product->image)): ?>
                  <img class="activator" src="/webbanhang/uploads/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>"
                       alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" />
                <?php else: ?>
                  <div class="no-image-placeholder valign-wrapper" style="height: 200px;">
                    <i class="material-icons center-align" style="width: 100%;">image_not_supported</i>
                  </div>
                <?php endif; ?>
              </div>
              <div class="card-content">
                <span class="card-title activator">
                  <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                  <i class="material-icons right">more_vert</i>
                </span>
                <?php if (!empty($product->category_name)): ?>
                  <span class="new badge" data-badge-caption=""><?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></span>
                <?php endif; ?>
              </div>
              <div class="card-action">
                <span class="price-tag">
                  <?php echo number_format($product->price, 0, ',', '.'); ?> VND
                </span>
                <div class="right">
                  <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" 
                     class="btn-small waves-effect waves-light tooltipped" data-tooltip="Sửa">
                    <i class="material-icons">edit</i>
                  </a>
                  <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" 
                     onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');" 
                     class="btn-small waves-effect waves-light tooltipped" data-tooltip="Xóa">
                    <i class="material-icons">delete</i>
                  </a>
                  <a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" 
                    class="btn-small blue darken-2 waves-effect waves-light tooltipped" 
                    data-tooltip="Thêm vào giỏ hàng">
                      <i class="material-icons">shopping_cart</i> Thêm vào giỏ hàng
                  </a>

                </div>
              </div>
              <div class="card-reveal" style="background-color: #252525;">
                <span class="card-title">
                  <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                  <i class="material-icons right">close</i>
                </span>
                <?php if (!empty($product->description)): ?>
                  <p>
                    <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                  </p>
                <?php endif; ?>
                <div class="center-align">
                  <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="btn waves-effect waves-light">
                    Xem chi tiết
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php include 'app/views/shares/footer.php'; ?>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    // Initialize components
    document.addEventListener('DOMContentLoaded', function() {
      // Tooltips
      var tooltips = document.querySelectorAll('.tooltipped');
      M.Tooltip.init(tooltips);
      
      // Card reveal
      var cardReveals = document.querySelectorAll('.card-reveal');
      M.Card.init(cardReveals);
    });
  </script>
</body>

</html>
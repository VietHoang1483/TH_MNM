<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Danh sách sản phẩm</title>
  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <style>
    body {
      background-color:rgb(24, 23, 23);
      color: #e0e0e0;
    }

    h4 {
      font-weight: 600;
    }

    .card,
    .card-panel {
      background-color:rgb(117, 115, 115);
      border-radius: 10px;
    }

    table.highlight > tbody > tr:hover {
      background-color: rgba(255, 255, 255, 0.05);
    }

    thead {
      background-color: #2c2c2c;
    }

    thead th {
      color: #ffffff;
    }

    td,
    th {
      color:rgb(36, 35, 35);
    }

    table img {
      height: 60px;
      object-fit: cover;
      border-radius: 4px;
    }

    .material-icons.grey-text {
      font-size: 32px;
    }

    .btn,
    .btn-small {
      color: #fff;
    }
  </style>
</head>

<body class="grey darken-4">
  <?php include 'app/views/shares/header.php'; ?>

  <div class="container">
    <div class="row valign-wrapper" style="margin-bottom: 32px;">
      <div class="col s12 m4 center-align">
        <h4 class="blue-text text-lighten-2">Danh sách sản phẩm</h4>
      </div>
      <div class="col s12 m8 right-align">
        <a href="/webbanhang/Product/add" class="btn waves-effect waves-light blue darken-2">
          <i class="material-icons left">add</i> Thêm sản phẩm
        </a>
      </div>
    </div>

    <?php if (empty($products)): ?>
      <div class="card-panel center-align">
        <i class="material-icons large grey-text text-lighten-2">inbox</i>
        <h5 class="text-black">Không có sản phẩm nào</h5>
        <p class="text-black">Hãy thêm sản phẩm mới để bắt đầu</p>
      </div>
    <?php else: ?>
      <div class="card">
        <table class="highlight responsive-table">
          <thead>
            <tr>
              <th>Tên sản phẩm</th>
              <th>Hình ảnh</th>
              <th>Danh mục</th>
              <th>Mô tả</th>
              <th>Giá</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($products as $product): ?>
              <tr>
                <td>
                  <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="blue-text text-lighten-2">
                    <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                  </a>
                </td>
                <td>
                <?php if ($product->image): ?>
                    <img src="/webbanhang/<?php echo $product->image; ?>" alt="Product
                    Image" style="max-width: 100px;">
                    <?php endif; ?>
                </td>
                <td>
                  <?php echo htmlspecialchars($product->category_name ?? 'Chưa có danh mục', ENT_QUOTES, 'UTF-8'); ?>
                </td>
                <td>
                  <?php
                    $description = htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8');
                    echo strlen($description) > 100 ? substr($description, 0, 100) . '...' : $description;
                  ?>
                </td>
                <td><?php echo number_format($product->price, 0, ',', '.'); ?> VND</td>
                <td>
                  <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" 
                     class="btn-small yellow darken-2 waves-effect waves-light tooltipped" data-tooltip="Sửa">
                    <i >sửa</i>
                  </a>
                  <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" 
                     onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');" 
                     class="btn-small red darken-2 waves-effect waves-light tooltipped" data-tooltip="Xóa">
                    <i>xoá</i>
                  </a>
                  <a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" 
                     class="btn-small blue darken-2 waves-effect waves-light tooltipped" data-tooltip="Thêm vào giỏ hàng">
                    <i>Thêm vào giỏ</i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>

  <?php include 'app/views/shares/footer.php'; ?>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.tooltipped');
      M.Tooltip.init(elems);
    });
  </script>
</body>

</html>

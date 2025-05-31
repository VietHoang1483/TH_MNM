    </div> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TH-Shop</title>
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    footer.page-footer {
      background-color: #1e1e1e;
      border-top: 1px solid #333;
    }

    .footer-copyright {
      background-color: #252525 !important;
    }
  </style>
</head>
<body>

  <main>
    <div class="container">
      <h1 class="center-align">Chào mừng đến với TH-Shop</h1>
      <p class="center-align">Trang web bán sản phẩm chất lượng thấp với giá cả trên trời.</p>
    </div>
  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
          <h5 class="white-text">TH-Shop</h5>
          <p class="grey-text text-lighten-4">Chuyên cung cấp sản phẩm chất lượng thấp với giá cả trên trời.</p>
        </div>
        <div class="col l4 s12">
          <h5 class="white-text">Liên hệ</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Email: contact@thshop.com</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Điện thoại: 0123 456 789</a></li>
          </ul>
        </div>
        <div class="col l4 s12">
          <h5 class="white-text">Kết nối</h5>
          <div class="social-links">
            <a class="grey-text text-lighten-3" href="#!" style="margin-right: 15px;">
              <i class="material-icons">facebook</i>
            </a>
            <a class="grey-text text-lighten-3" href="#!" style="margin-right: 15px;">
              <i class="material-icons">email</i>
            </a>
            <a class="grey-text text-lighten-3" href="#!">
              <i class="material-icons">phone</i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center-align">
        &copy; 2025 TH-Shop. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize mobile sidenav
      var sidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);
      
      // Initialize tooltips
      var tooltips = document.querySelectorAll('.tooltipped');
      M.Tooltip.init(tooltips);
    });
  </script>
</body>
</html>

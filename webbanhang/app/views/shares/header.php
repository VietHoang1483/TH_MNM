<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> - Quản lý sản phẩm</title>

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
    
    nav {
      background-color: #1e1e1e !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      border-bottom: 1px solid #333;
    }
    
    .brand-logo {
      font-weight: 500;
      color: #bb86fc !important;
      padding-left: 10px !important;
    }
    
    .sidenav {
      background-color: #1e1e1e;
    }
    
    .sidenav li>a {
      color: #e0e0e0;
    }
    
    .sidenav li>a:hover {
      background-color: #252525;
    }
    
    .nav-wrapper ul a {
      color: #e0e0e0;
      transition: color 0.3s ease;
    }
    
    .nav-wrapper ul a:hover {
      color: #bb86fc;
      background-color: transparent;
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav-wrapper container">
      <a href="/webbanhang/Product" class="brand-logo">Shop </a>
      <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down">
        <li><a href="/webbanhang/Product/list"><i class="material-icons left">shopping_bag</i>Sản phẩm</a></li>
        <li><a href="/webbanhang/Category/list"><i class="material-icons left">category</i>Danh mục</a></li>
        <li><a href="#"><i class="material-icons">search</i></a></li>
        <li><a href="#"><i class="material-icons">account_circle</i></a></li>
      </ul>
    </div>
  </nav>

  <!-- Mobile menu -->
  <ul class="sidenav" id="mobile-menu">
    <li>
      <div class="user-view" style="background-color:rgb(133, 129, 129); padding: 32px 32px 0;">
        <span class="white-text name">Shop </span>
        <span class="white-text email">admin@thshop.com</span>
      </div>
    </li>
    <li><a href="/webbanhang/Product/index"><i class="material-icons left">shopping_bag</i>Sản phẩm</a></li>
    <li><a href="/webbanhang/Category/list"><i class="material-icons left">category</i>Danh mục</a></li>
    <li><div class="divider"></div></li>
    <li class ="nav-item"> 
      <?php
      if(SessionHelper::isLogdedIn()){
        echo "<a class='nav-link'?>".$_SESSION['username']."</a.>";
      } else{
        echo "<a class='nav-link' href='/webbanhang/account/login'><i class="material-icons left">account_circle</i>Tài khoản</a>";
      }
      ?>
    </li>
      <li class="nav-item=">
        <a>
          <?php
            if(SessionHelpher::isloggedIn()){
              echo "<a class ='nav-link'
              href='/webbanhang/account/logout</a>";
            }
          ?>
        </a>
      </li>
  </ul>

  <main>
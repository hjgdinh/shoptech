<button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>
<h3 style="font-size: 18px; color: #272727; text-transform: uppercase; margin: 3px 0 30px 0;
              font-weight: 700; letter-spacing: 2px;">MENU</h3>
<div class="justify-content-md-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">TRANG CHỦ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="product.php#float-down">Sản phẩm</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="introduce.php">GIỚI THIỆU</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">LIÊN HỆ</a>
    </li>
    <?php if (empty($_SESSION['id'])) { ?>
      <li class="nav-item">
        <a class="nav-link" href="signin.php">Đăng nhập</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Đăng ký</a>
      </li>
    <?php } else { ?>
      <li class="nav-item">
        <a href="login_form/logout.php" class="nav-link">Đăng Xuất</a>
      </li>
    <?php } ?>
  </ul>
</div>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="icon" href="images/icon-web.jpg" type="image/gif">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/all.css">
  <link rel="stylesheet" href="plugins/webfonts/font.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />
  <link rel="stylesheet" href="css/sign.css">
  <title>Đăng nhập</title>
</head>

<body>
  <div class="header">
    <marquee width="50%" direction="left">
      MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH > 800K
      - ĐẢM BẢO CHẤT LƯỢNG
    </marquee>
  </div>

  <!--Navbar-->
  <?php include 'login_form/navbar.php' ?>

  <!--Content-->
  <div class="content">
    <section class="signin ">
      <div class="container">
        <div class="signin-left">
          <div class="sign-title">
            <h1>Đăng nhập</h1>
          </div>
        </div>
        <div class="signin-right " id="a-sign">
          <form action="login_form/process_signin.php" method="POST">
            <div class="username form-control1 ">
              <input type="email" name="txtemail" id="username" placeholder="Email" required="">
            </div>
            <div class="password form-control1" style="margin-bottom:10px">
              <input type="password" id="password" name="txtpassword" placeholder="Mật khẩu" required="">
            </div>
            <div class="" style="display:flex;justify-content: space-between;align-items: center;margin-bottom:15px">
              <span id="quenmk" style="font-weight:600;opacity: 0.8;">Quên mật khẩu</span>
              <span id="sms" style="font-weight:600;opacity: 0.8;">Đăng nhập với SMS</span>
            </div>
            <!-- Ghi nhớ <input type="checkbox" name="remember"> -->
            <div class="recaptcha form-control1" style="margin-bottom:15px">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.
            </div>
            <div class="submit">
              <input type="submit" name="dangnhap" value="Đăng nhập" class="btn">
            </div>
            <div class="forgetpassword" style="margin-top:10px">
              <span style="color:rgba(0,0,0,.26);cursor:text">Bạn mới biết đến ShopTech?</span>
              <a href="signup.php" style="font-size:15px;text-decoration:none;color:#1e87f0">Đăng ký</a>
            </div>
            <?php
            if (isset($_GET['errora'])) {
              echo "<span style='color: #ff0000c9;'>Tên đăng nhập của bạn không đúng, vui lòng thử lại</span>";
            }
            if (isset($_GET['error'])) {
              echo "<span style='color:red'>Mật khẩu của bạn không đúng, vui lòng thử lại</span>";
            }
            ?>
          </form>
        </div>
        <div class="signin-right " id="b-sign">
          <form action="">
            <div class="username form-control1 ">
              <h2>Phục hồi mật khẩu</h2>
            </div>
            <div class="password form-control1">
              <input type="text" id="password" placeholder="Email của bạn">
            </div>
            <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
            <div class="submit">
              <input class="btn" type="submit" value="Gửi">
            </div>
          </form>
        </div>
        <div class="signin-right" id="c-sign">
          <form action="">
            <div class="username form-control1 ">
              <h2>Đăng nhập với SMS</h2>
            </div>
            <div class="password form-control1">
              <input type="text" id="password" placeholder="Số điện thọai">
            </div>
            <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
            <div class="submit">
              <input class="btn" type="submit" value="Gửi">
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php include 'login_form/footer.php' ?>
</body>
<script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
<script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
<script src="plugins/bootstrap/popper.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="js/home.js"></script>
<script src="js/script.js"></script>
<script src="js/sign.js"></script>
<script src="plugins/uikit/uikit.min.js"></script>
<script src="plugins/uikit/uikit-icons.min.js"></script>

</html>
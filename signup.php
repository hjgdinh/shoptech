<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/all.css">
  <link rel="stylesheet" href="plugins/webfonts/font.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" href="images/icon-web.jpg" type="image/gif">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />
  <link rel="stylesheet" href="css/sign.css">

  <title>Đăng kí</title>

</head>

<body>
  <div class="header">
    <marquee width="50%" direction="left">
      MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH > 800K - ĐẢM BẢO CHẤT LƯỢNG
    </marquee>
  </div>

  <!--Navbar-->
  <?php include 'login_form/navbar.php' ?>

  <!--Content-->
  <div class="content">
    <section class="signup">
      <div class="container">
        <div class="signin-left">
          <div class="sign-title">
            <h1>Tạo tài khoản</h1>
          </div>
        </div>
        <div class="signin-right">
          <form action="" method="POST">
            <div class="firstname form-control1 ">
              <input type="text" name="txtfn" id="firstname" placeholder="Họ">
            </div>
            <div class="lastname form-control1">
              <input type="text" name="txtln" id="lastname" placeholder="Tên">
            </div>
            <div class="sex form-control1">
              <div class="female">
                <input type="radio" id="female" name="sex" value="Nữ">
                <label for="female">Nữ</label>
              </div>
              <div class="male">
                <input type="radio" id="male" name="sex" value="Nam">
                <label for="male">Nam</label>
              </div>
            </div>
            <div class="email form-control1">
              <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="password form-control1">
              <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="lastname form-control1">
              <input type="text" name="address" id="address" placeholder="Địa chỉ">
            </div>
            <div class="lastname form-control1">
              <input type="number" name="phone" id="phone" placeholder="Số điện thoại">
            </div>
            <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
            <div class="btn_btnb">
              <input type="submit" name="dangky_dk" value="Đăng ký" class="btnb">
            </div>
            <?php
            include('login_form/control.php');
            error_reporting(0);
            $get_data = new data();
            if (isset($_POST['dangky_dk']))
              if (empty($_POST['email'])  ||  empty($_POST['password'])) {
                echo "<script>alert('Bạn chưa nhập thông tin. Vui lòng thử lại')</script>";
              } else {
                $select = $get_data->select_user($_POST['email']);
                if ($select > 0)
                  echo "<script>alert('Email đã tồn tại.Hãy chọn Email khác')</script>";
                else {
                  $insert = $get_data->in_login(
                    $_POST['txtfn'],
                    $_POST['txtln'],
                    $_POST['sex'],
                    $_POST['email'],
                    $_POST['password'],
                    $_POST['address'],
                    $_POST['phone'],
                  );
                  if ($insert)
                    // echo "Bạn đã đăng ký thành công. <a href='signin.php'>Đăng nhập ngay</a>";
                    echo "<script>alert('Bạn đã đăng ký thành công.')</script><a href='signin.php'>Đăng nhập ngay</a>";
                  else
                    echo "<script>alert('Có lỗi xảy ra trong quá trình đăng ký. Vui lòng thử lại')</script>";
                  // echo "Sửa thất bại " . $conn->error;            
                }
              }
            ?>
          </form>
        </div>
      </div>
    </section>
    <?php include 'login_form/footer.php' ?>
    <script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
    <script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="plugins/bootstrap/popper.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/script.js"></script>
    <script src="plugins/uikit/uikit.min.js"></script>
    <script src="plugins/uikit/uikit-icons.min.js"></script>
</body>

</html>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("refresh: 0.001");
}
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

  <title>Hồ sơ</title>

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
    <section class="signup">
      <div class="container">
        <div class="signin-left">
          <div class="sign-title">
            <h2>Hồ Sơ Của Tôi</h2>
            <h3>Quản lý thông tin hồ sơ để bảo mật tài khoản</h3>
            <a href="notification.php">
              <h5>Lịch sử mua hàng</h5>
            </a>
          </div>
        </div>
        <div class="signin-right">
          <?php
          include('login_form/connect.php');
          $id = $_SESSION['id'];
          $sql = "select * from `user` where ID=$id";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <form action="" method="POST">
              <div class="firstname form-control1 ">
                <span style="font-size:18px;color:black">Tên Người Dùng:</span>
                <span style="font-size:20px;color:black;padding-left: 5px;font-weight:500"><?php echo $row['Firstname'] ?></span>
              </div>
              <span style="font-size:18px;color:black">Họ</span>
              <div class="lastname form-control1">
                <input type="text" name="txtln" id="lastname" placeholder="Tên" value="<?php echo $row['Lastname'] ?>">
              </div>
              <span style="font-size:18px;color:black">Giới Tính</span>
              <div class="sex form-control1">
                <div class="male">
                  <input type="radio" id="male" name="sex" value="Nam">
                  <label for="male">Nam</label>
                </div>
                <div class="female">
                  <input type="radio" id="female" name="sex" value="Nữ">
                  <label for="female">Nữ</label>
                </div>
                <div class="male">
                  <input type="radio" id="khac" name="sex" value="Khác">
                  <label for="khac">Khác</label>
                </div>
              </div>
              <span style="font-size:18px;color:black">Email</span>
              <div class="email form-control1">
                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $row['Email'] ?>">
              </div>
              <span style="font-size:18px;color:black">Password</span>
              <div class="password form-control1">
                <input name="password" id="password" placeholder="Password" value="<?php echo $row['Password'] ?>">
              </div>
              <span style="font-size:18px;color:black">Address</span>
              <div class="address form-control1">
                <input name="address" id="address" placeholder="address" value="<?php echo $row['Address'] ?>">
              </div>
              <span style="font-size:18px;color:black">Phone</span>
              <div class="phone form-control1">
                <input name="phone" id="phone" placeholder="phone" value="<?php echo $row['Phone'] ?>">
              </div>
              <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
              <div class="btn_btnb">
                <input class="btnb" type="submit" value="Lưu" name="update">
              </div>
            <?php } ?>
            <?php
            if (isset($_POST['update'])) {
              $id = $_SESSION['id'];
              $ln = $_POST['txtln'];
              $sex = $_POST['sex'];
              $email = $_POST['email'];
              $pw = $_POST['password'];
              $add = $_POST['address'];
              $phone = $_POST['phone'];
              // Ket not db
              include('connect.php');
              $sql = "UPDATE `user` 
            SET Lastname='$ln', Gender='$sex', Email='$email', Password='$pw', Address='$add', Phone='$phone' WHERE ID='$id'";
              $result = mysqli_query($conn, $sql);

              if ($result === true) {
                echo "<script>alert('Cập nhật hồ sơ thành công')</script>";
              }
            }
            ?>
            </form>
        </div>
      </div>
    </section>
    <!-- Notification -->
    <?php include 'login_form/footer.php' ?>
</body>
<script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
<script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
<script src="plugins/bootstrap/popper.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="js/home.js"></script>
<script src="js/script.js"></script>
<script src="js/detail.js"></script>
<script src="plugins/uikit/uikit.min.js"></script>
<script src="plugins/uikit/uikit-icons.min.js"></script>

</html>
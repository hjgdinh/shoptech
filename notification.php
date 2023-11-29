<?php
session_start();
if (empty($_SESSION['id'])) {
  header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" href="images/icon-web.jpg" type="image/gif">

  <link rel="stylesheet" href="plugins/animate/animate.min.css">

  <link rel="stylesheet" href="plugins/fontawesome/all.css">

  <link href="plugins/webfonts/font.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/owl.carousel/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="plugins/owl.carousel/owl.theme.default.min.css" type="text/css">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />
  <link rel="stylesheet" href="css/sign.css">


  <title>Thông báo</title>

</head>

<body>
  <div class="header">
    <marquee width="50%" direction="left">
      MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH > 800K
      - ĐẢM BẢO CHẤT LƯỢNG
    </marquee>
  </div>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top" style="justify-content: flex-end;">
    <div class="container">
      <style>
        .icon-ol {
          align-items: center;
          justify-content: center;
          display: flex;
        }

        .icon-ol_item {
          letter-spacing: 0;
          font-weight: 500;
          margin-right: 3px;
          color: black !important;
          position: relative;
        }

        .hidea {
          position: absolute;
          z-index: 3;
          left: 84.3%;
          top: 42%;
        }
      </style>
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" class="logo-top" alt="">
      </a>
      <div class="desk-menu collapse navbar-collapse justify-content-md-center" id="navbarNav">
        <ul class="navbar-nav navbar-nava">
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
              <a class="nav-link" href="signin.php">đăng nhập</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">đăng kí</a>
            </li>
          <?php   } else { ?>
        </ul>
      </div>
      <div id="offcanvas-flip2" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar" style="background: white; width: 350px;">
          <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>
          <h3 style="font-size: 14px; color: #272727;text-transform: uppercase;margin: 3px 0 30px 0;font-weight: 500; letter-spacing: 2px;">Giỏ hàng</h3>
          <div class="site-nav-container-last" style="color:#272727">
            <div class="cart-view clearfix" id="show-cart">
              <?php
              include('login_form/connect.php');
              error_reporting(0);
              $id = $_SESSION['id'];
              $sql = "select * from orders where User_Id = '$id'";
              $result = mysqli_query($conn, $sql);
              // $row=mysqli_fetch_array($result);
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <table id="cart-view">
                  <tbody>
                    <tr class="item_1">
                      <td class="img"><a href="" title=""><img src="<?php echo $row["Image"] ?>"></a></td>
                      <td>
                        <a class="pro-title-view" style="color: #272727" href="" title=""><?php echo $row["Name"] ?></a>
                        <span class="number"><?php echo number_format($row["Price"], 0, ',', '.') ?>₫</span>
                        <input value="<?php echo $row["Quantity"] ?>" style="width:35px" readonly=""></input>
                        <a href="login_form/delete.php?id=<?php echo $row["Id"] ?>">
                          <span class="remove_link remove-cart"><i style="color: #272727" class="fas fa-times"></i></span>
                        </a></br>
                        <span class="number">
                          <!-- Thành tiền: <?php echo number_format($sub_total = $row["Price"] * $row["Quantity"], 0, ',', '.') ?>₫ -->
                        </span>
                      </td>
                      <?php $toTal = $toTal + $sub_total; ?>
                    </tr>
                  </tbody>
                </table>
              <?php } ?>
              <span class="line"></span>
              <div>
                <td class="text-left">TỔNG TIỀN:</td>
                <span lass="text-right" id="total-view-cart"><?php echo number_format($toTal, 0, ',', '.') ?>₫</span>
              </div>
              <!-- <td class="distance-td"><a href="" class="linktocart button dark">Xem giỏ hàng</a></td> -->
              <td><a href="checkout.php" style="color:white" class="linktocheckout button dark">Thanh toán</a></td>
            </div>
            <!-- <a href="" target="_blank" class="button btn-check" style="text-decoration:none;color:white"><span>Click nhận mã giảm
                giá ngay !</span></a> -->
          </div>
        </div>
      </div>

      <div class="icon-ol">
        <?php
            include('login_form/connect.php');
            $id = $_SESSION['id'];
            $sql = "select count(*) as total from orders where User_Id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $total_records = $row['total'];
        ?>
        <!-- <a style="color: #272727;font-weight: 700" href="#" uk-toggle="target: #offcanvas-flip2">       
      <?php echo $total_records ?><i class="fas fa-shopping-cart"></i>
    </a>   -->
        <!-- <a style="color: #272727" style="cursor:auto"> | </a> -->
        <a style="color: #272727" href="./profile.php">
          <span class="icon-ol_item">
            <!-- <?php echo $_SESSION['Lastname'] ?> -->
            <?php echo $_SESSION['Firstname'] ?>
          </span>
          <i class="fas fa-user-alt" style="margin-right:5px;"></i>
        </a>
        <p style="margin-right: 3px" class="none">
          <a href="login_form/logout.php" class="icon-ol_item">Đăng Xuất</a>
        </p>
        <!-- <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
      </div>
    <?php } ?>

    <?php
    if (isset($_SESSION['id'])) { ?>
    <?php
      // unset($row);
      // unset($_SESSION['Firstname']);
    } ?>
    <div class="icon-ol">
      <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </div>

    <div id="offcanvas-flip1" uk-offcanvas="flip: true; overlay: true">
      <div class="uk-offcanvas-bar" style="background: white; width: 100%;">
        <?php include 'login_form/menu_res.php' ?>
      </div>
    </div>

    <?php if (empty($_SESSION['id'])) { ?>
      <div class="icon-ol">
        <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    <?php } else { ?>
      <div class="icon-ol none">
        <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    <?php } ?>
  </nav>

  <!--Banner-->
  <div class="breadcrumb-shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
          <ol class="breadcrumb breadcrumb-arrows">
            <li>
              <a href="index.php">
                <span>Trang chủ</span>
              </a>
            </li>
            <li>
              <span><span style="color: #777777">Thanh toán</span></span>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section>
    <main role="main">
      <div class="container mt-4" style="text-align:center;">
        <h2>Bạn đã đặt hàng thành công. Chúng tôi sẽ liên hệ sau với bạn để xác nhận đơn hàng.</h2>
        <?php
        include('login_form/connect.php');
        error_reporting(0);
        $id = $_SESSION['id'];
        $sql = "select * from orders where User_Id = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result)
        ?>
        <?php
        switch ($row['Pttt']) {
          case '2':
            echo '<img src="images/momo.jpg" style="width:150px" alt="">';
            break;
        }
        ?>

        <!-- <div style="display:flex;justify-content: space-between">
          <li style="padding:12px 20px;font-size:16px;font-weight:600" class="d-flex justify-content-between lh-condensed">Ảnh</li>
          <li style="padding:12px 20px;font-size:16px;font-weight:600" class="d-flex justify-content-between lh-condensed">Tên</li>
          <li style="padding:12px 20px;font-size:16px;font-weight:600" class="d-flex justify-content-between lh-condensed">Số lượng</li>
          <li style="padding:12px 20px;font-size:16px;font-weight:600" class="d-flex justify-content-between lh-condensed">Giá tiền</li>
          <li style="padding:12px 20px;font-size:16px;font-weight:600" class="d-flex justify-content-between lh-condensed">Phương thức thanh toán</li>
          <li style="padding:12px 20px;font-size:16px;font-weight:600" class="d-flex justify-content-between lh-condensed">Trạng thái</li>
        </div> -->
        <?php
        include('login_form/connect.php');
        error_reporting(0);
        $id = $_SESSION['id'];
        $sql = "select * from orders where User_Id = '$id'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
          <li class="list-group-item d-flex justify-content-between lh-condensed" style="align-items: center;">
            <img src="<?php echo $row["Image"] ?>" style="width:60px ;align-items:center" alt="<?php echo $row["Name"] ?>">
            <h6 class="my-0" style="width:120px"><?php echo $row["Name"] ?>
            </h6>
            <!-- <a href="update_quantity.php?id=<?php echo $row["Id"] ?>&type=decre" value="-" name="-">-</a> -->
            <small class="text-muted" style="width:30px">x<?php echo $row["Quantity"] ?></small>
            <!-- <a href="update_quantity.php?id=<?php echo $row["Id"] ?>&type=incre" value="+" name="+">+</a>  -->
            <span class="text-muted">
              <?php echo number_format($sub_total = $row["Price"] * $row["Quantity"], 0, ',', '.') ?>₫
            </span>
            <span class="text-muted" style="font-size:12px">
              <?php
              switch ($row['Pttt']) {
                case '1':
                  echo "thanh toán khi nhận hàng";
                  break;
                case '2':
                  echo "thanh toán qua Momo";
                  break;
              }
              ?>
            </span>
            <span class="text-muted" style="font-size:12px">
              <?php
              $x = $row['Status'];
              switch ($x) {
                case '0':
                  echo "chờ xác nhận";
                  break;
                case '1':
                  echo "hàng đã được duyệt";
                  break;
                case '2':
                  echo "đơn đã bị hủy";
                  break;
              }
              ?>
            </span>
          </li>
          <?php $total = $total + $sub_total ?>
        <?php } ?>
        <li class="list-group-item d-flex justify-content-between">
          <strong><span>TỔNG TIỀN:</span></strong>
          <strong><?php echo number_format($total, 0, ',', '.') ?>₫</strong>
        </li>
      </div>
    </main>
  </section>
  <!--gallery-->
  <?php include 'login_form/footer.php' ?>

  <script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
  <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>
  <script src="js/sign.js"></script>
</body>

</html>
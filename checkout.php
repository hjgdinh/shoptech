<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header('location:notification.php');
}
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
  <link rel="icon" href="images/icon-web.jpg" type="image/gif">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="plugins/animate/animate.min.css">

  <link rel="stylesheet" href="plugins/fontawesome/all.css">

  <link href="plugins/webfonts/font.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/owl.carousel/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="plugins/owl.carousel/owl.theme.default.min.css" type="text/css">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />
  <link rel="stylesheet" href="css/sign.css">


  <title>Thanh toán</title>

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
      <div class="container mt-4">
        <form class="needs-validation" name="frmthanhtoan" method="POST">
          <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

          <div class="py-5 text-center">
            <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
            <h2>Thanh toán</h2>
            <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
          </div>
          <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <!-- <table id="cart-view">
                  <tbody>
                    <tr class="item_1">
                      <td class="img"><a href="" title=""><img src="<?php echo $row["Image"] ?>"></a></td>
                      <td>
                        <a class="pro-title-view" style="color: #272727" href=""
                          title=""><?php echo $row["Name"] ?></a>
                          <span class="number"><?php echo $row["Price"] ?></span>
                          <span>₫</span>
                          <input id="number" value="1" min="1" style="width:30px">
                          <a href="login_form/delete.php?id=<?php echo $row["ID"] ?>">
                            <span class="remove_link remove-cart"><i style="color: #272727" class="fas fa-times"></i></span>
                          </a>
                      </td>
                    </tr>
                  </tbody>
                </table>  -->
              <?php
              include('login_form/connect.php');
              error_reporting(0);
              $id = $_SESSION['id'];
              $sql = "select count(*) as totalitem from orders where User_Id = $id";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($result);
              $total_record = $row['totalitem'];
              ?>
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Giỏ hàng</span>
                <span class="badge badge-secondary badge-pill"><?php echo $total_record ?></span>
              </h4>
              <ul class="list-group mb-3">
                <?php
                include('login_form/connect.php');
                error_reporting(0);
                $id = $_SESSION['id'];
                $sql = "select * from orders where User_Id = '$id'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <li class="list-group-item d-flex justify-content-between lh-condensed" style="align-items: center;">
                    <img src="<?php echo $row["Image"] ?>" style="width:70px ;align-items:center" alt="<?php echo $row["Name"] ?>">
                    <h6 class="my-0" style="width:120px"><?php echo $row["Name"] ?>
                    </h6>
                    <!-- <a href="update_quantity.php?id=<?php echo $row["Id"] ?>&type=decre" value="-" name="-">-</a> -->
                    <small class="text-muted">x<?php echo $row["Quantity"] ?></small>
                    <!-- <a href="update_quantity.php?id=<?php echo $row["Id"] ?>&type=incre" value="+" name="+">+</a>  -->
                    <span class="text-muted">
                      <?php echo number_format($sub_total = $row["Price"] * $row["Quantity"], 0, ',', '.') ?>₫
                    </span>
                  </li>
                  <?php $total += $sub_total ?>
                <?php } ?>
                <li class="list-group-item d-flex justify-content-between">
                  <span>TỔNG TIỀN:</span>
                  <strong><?php echo number_format($total, 0, ',', '.') ?>₫</strong>
                </li>
              </ul>
              <!-- <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div> -->
            </div>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Thông tin khách hàng</h4>
              <?php
              include('login_form/connect.php');
              error_reporting(0);
              $id = $_SESSION['id'];
              $sql = "select * from user where ID = $id";
              $result = mysqli_query($conn, $sql);
              $rows = mysqli_fetch_array($result);
              ?>
              <div class="row">
                <div class="col-md-12">
                  <label for="kh_ten">Họ tên</label>
                  <input type="text" class="form-control" readonly name="txtten" id="kh_ten" value="<?php echo $rows['Firstname'] ?>">
                </div>
                <div class="col-md-12">
                  <label for="kh_diachi">Địa chỉ</label>
                  <input type="text" class="form-control" readonly value="<?php echo $rows['Address'] ?>">
                </div>
                <div class="col-md-12">
                  <label for="kh_dienthoai">Điện thoại</label>
                  <input type="number" class="form-control" readonly value="<?php echo $rows['Phone'] ?>">
                </div>
                <div class="col-md-12">
                  <label for="kh_email">Email</label>
                  <input type="email" class="form-control" readonly value="<?php echo $rows['Email'] ?>">
                </div>
                <div class="col-md-12">
                  <!-- <label for="kh_email" style="font-size:20px">Vui lòng chọn phương thức thanh toán dưới đây</label></br> -->
                  <input type="radio" id="qr" style="font-size:25px" value="1" name="txtpttt">
                  <label style="font-size:15px">Thanh toán khi nhận hàng</label></br>
                  <input type="radio" id="qr" style="font-size:25px" value="2" name="txtpttt">
                  <label style="font-size:15px">Thanh toán qua Momo</label></br>
                  <!-- <input type="radio" id="money" value="2" style="font-size:25px" name="checkout">
                                <label style="font-size:15px">Chuyển tiền vào số tài khoản sau: 0912975125125</label>                                                              -->
                </div>
              </div>
              <!-- <input class="btn btn-primary btn-lg btn-block" style="margin-top:25px;" type="submit" name="btnDatHang" value="Đặt hàng"></input>  -->
              <button name="send" class="btn btn-primary btn-lg btn-block" style="margin-top:25px;color:white">
                Đặt hàng
              </button>
              <hr class="mb-4">
              <?php
              include('login_form/connect.php');
              // error_reporting(0);
              if (isset($_POST['send'])) {
                $id = $_SESSION['id'];
                $pttt = $_POST["txtpttt"];
                $sql = "UPDATE `orders` SET Pttt='$pttt' WHERE User_Id='$id'";
                $result = mysqli_query($conn, $sql);

                // if ($conn->query($sql) === TRUE) {
                // echo "thanh cong ";
                // } else {
                // echo $conn->error;
                // }
                // $conn->close(); 
              }
              ?>
            </div>

          </div>
        </form>
      </div>
      <!-- End block content -->
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
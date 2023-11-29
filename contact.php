<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="plugins/animate/animate.min.css">

  <link rel="stylesheet" href="plugins/fontawesome/all.css">

  <link href="plugins/webfonts/font.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/owl.carousel/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="plugins/owl.carousel/owl.theme.default.min.css" type="text/css">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css" />


  <title>Liên hệ</title>

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
  <div>
    <div class="item"><img src="images/carousel/1.jpg" class="d-block w-100" alt="..."></div>
  </div>
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
              <span><span style="color: #777777">Liên hệ</span></span>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section>

    <div class="container">

      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 box-heading-contact">
          <div class="box-map">
            <!-- <iframe
              src="images/map.PNG"
              width="100%" height="700" frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
            <img src="images/map.jpg" alt="">
            <img src="images/map.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12  wrapbox-content-page-contact">
          <div class="header-page-contact clearfix">
            <h1>Liên hệ</h1>
          </div>
          <div class="box-info-contact">
            <ul class="list-info">
              <li>
                <p>Địa chỉ chúng tôi</p>
                <p><strong>Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Thiên Lôi, Phường Vĩnh Niệm, Quận Lê Chân Thành phố Hải Phòng, Việt Nam.</strong></p>
              </li>
              <li>
                <p>Email chúng tôi</p>
                <p><strong>nguyendinhhieu982001@gmail.com</strong></p>
              </li>
              <li>
                <p>Điện thoại</p>
                <p><strong>+84 (039) 398039307</strong></p>
              </li>
              <li>
                <p>Thời gian làm việc</p>
                <p><strong>Thứ 2 đến Thứ 6 từ 8h đến 18h; Thứ 7 và Chủ nhật từ 9h30 đến 17h00 </strong></p>
              </li>
            </ul>
          </div>
          <div class="box-send-contact">
            <h2>Gửi thắc mắc cho chúng tôi</h2>
            <div id="col-left contactFormWrapper menuList-links">
              <?php if (empty($_SESSION['id'])) { ?>
                <form action="" class="contact-form" method="POST">
                  <input class="no_input" name="txtuserid" type="hidden" value="0">
                  <div class="contact-form">
                    <div class="row">
                      <div class="col-sm-12 col-xs-12">
                        <div class="input-group">
                          <input required="" name="txtname" type="text" class="form-control" placeholder="Tên của bạn">
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <div class="input-group">
                          <input required="" name="txtemail" type="text" class="form-control" placeholder="Email của bạn">
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <div class="input-group">
                          <input required="" name="txtphone" type="number" class="form-control" placeholder="Số điện thoại của bạn">
                        </div>
                      </div>
                      <div class="col-sm-12 col-xs-12">
                        <div class="input-group">
                          <textarea name="txtdes" placeholder="Nội dung"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <input type="submit" value="Gửi cho chúng tôi" class="btnb" name="send">
                      </div>
                    </div>
                  </div>
                </form>
                <?php
                include('login_form/control.php');
                // error_reporting(0);
                $get_data = new data();
                if (isset($_POST['send']))
                  if (empty($_POST['txtdes'])) {
                    echo "Bạn chưa nhập nội dung";
                  } else {
                    // $select=$get_data->select_email($_POST['txtemail']);
                    // if($select>0)
                    // echo "Email da ton tai.Hay chon email khac <a href='#'>Thử lại</a>";
                    // else {                     
                    $insert = $get_data->in_contact(
                      $_POST['txtuserid'],
                      $_POST['txtname'],
                      $_POST['txtemail'],
                      $_POST['txtphone'],
                      $_POST['txtdes'],
                    );
                    if ($insert)
                      echo "<span style='color:green;font-size:15px;font-weight:500'>Thành công</span>";
                    else
                      echo "Có lỗi xảy ra" . $conn->error;
                  }
                // }                             
                ?>
              <?php } else { ?>
                <?php
                include('login_form/connect.php');
                error_reporting(0);
                $id = $_SESSION['id'];
                $sql = "select * from user where ID = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <form action="" class="contact-form" method="POST">
                  <input class="no_input" name="txtuserid" type="hidden" value="<?php echo $_SESSION['id'] ?>">
                  <div class="contact-form">
                    <div class="row">
                      <div class="col-sm-12 col-xs-12">
                        <div class="input-group">
                          <input required="" name="txtname" type="text" class="form-control" value="<?php echo $row["Firstname"] ?> <?php echo $row["Lastname"] ?>">
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <div class="input-group">
                          <input required="" name="txtemail" type="text" class="form-control" value="<?php echo $row["Email"] ?>">
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <div class="input-group">
                          <input required="" name="txtphone" type="number" class="form-control" value="<?php echo $row["Phone"] ?>">
                        </div>
                      </div>
                      <div class="col-sm-12 col-xs-12">
                        <div class="input-group">
                          <textarea name="txtdes" placeholder="Nội dung"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <input type="submit" value="Gửi cho chúng tôi" class="btnb" name="send">
                      </div>
                    </div>
                  </div>
                </form>
                <?php
                include('login_form/control.php');
                error_reporting(0);
                $get_data = new data();
                if (isset($_POST['send']))
                  if (empty($_POST['txtdes'])) {
                    echo "Bạn chưa nhập nội dung";
                  } else {
                    // $select=$get_data->select_email($_POST['txtemail']);
                    // if($select>0)
                    // echo "Email da ton tai.Hay chon email khac <a href='#'>Thử lại</a>";
                    // else {                     
                    $insert = $get_data->in_contact(
                      $_POST['txtuserid'],
                      $_POST['txtname'],
                      $_POST['txtemail'],
                      $_POST['txtphone'],
                      $_POST['txtdes'],
                    );
                    if ($insert)
                      echo "<span style='color:green;font-size:15px;font-weight:500'>Thành công</span>";
                    else
                      echo "Có lỗi xảy ra. <a href='#'>Thử lại</a>";
                  }
                // }                             
                ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
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
  <script src="js/jquery.js"></script>
</body>

</html>
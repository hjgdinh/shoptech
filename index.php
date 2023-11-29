<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icon-web.jpg" type="image/gif">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/all.css">
  <link rel="stylesheet" href="plugins/webfonts/font.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css">
  <title>Tech</title>
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
  <!-- Owl-Carousel -->
  <div class="owl-carousel owl-theme owl-carousel-setting">
    <div class="item"><img src="images/carousel/1.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/carousel/2.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/carousel/3.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/carousel/4.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/carousel/5.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/carousel/6.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/carousel/7.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="images/carousel/8.jpg" class="d-block w-100" alt="..."></div>
  </div>


  <!--Content-->
  <div class="content">
    <div class="container">
      <div class="hot_sp" style="padding-bottom: 10px;">
        <h2 style="text-align:center;padding-top: 10px">
          <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm bán chạy</a>
        </h2>
        <div class="view-all" style="text-align:center;padding-top: -10px;">
          <a style="color: black;text-decoration: none" href="signin.php">Xem thêm</a>
        </div>
      </div>
    </div>
    <!--Product-->
    <div class="container" style="padding-bottom: 50px;">
      <div class="row">
        <?php
        include('login_form/connect.php');
        $sql = "select * from products limit 16 ";
        $result = mysqli_query($conn, $sql);
        ?>
        <?php foreach ($result as $row) : ?>
          <div class="col-md-3 col-sm-6 col-xs-6 col-6">
            <div class="product-block">
              <div class="product-img fade-box">
                <a href="detailproduct.php?id=<?php echo $row["Id"] ?>" title="" class="img-resize">
                  <img src="<?php echo $row["Image"] ?>" alt="<?php echo $row["Product_Name"] ?>" class="lazyloaded" style="">
                  <img src="<?php echo $row["Image2"] ?>" alt="" class="lazyloaded">
                </a>
              </div>
              <div class="product-detail clearfix">
                <div class="pro-text">
                  <a style=" color: black; font-size: 14px;text-decoration: none;" href="detailproduct.php?id=<?php echo $row["Id"] ?>" title="<?php echo $row["Product_Name"] ?>" inspiration pack>
                    <?php echo $row["Product_Name"] ?>
                  </a>
                </div>
                <div class="pro-price">
                  <p class=""><?php echo number_format($row["Price"], 0, ',', '.') ?>₫</p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <section class="section wrapper-home-banner">
      <div class="hot_sp" style="padding-bottom: 10px;">
        <h2 style="text-align:center;padding-top: 10px">
          <p style="font-size: 28px;color: black;text-decoration: none" href="">Thương Hiệu</p>
        </h2>
      </div>
      <div class="container-fluid" style="padding-bottom: 50px;">
        <div class="row">
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-categorya">
              <span class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box" style="justify-content:center;display:flex">
                  <img class="lazyloaded" style="width: 50%;" src="images/banner/intel.png" alt="">
                </div>
                <figcaption class="caption_banner site-animation">
                </figcaption>
              </span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-categorya">
              <span class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box" style="justify-content:center;display:flex">
                  <img class="lazyloaded" style="width: 29%;" src="images/banner/hp.png" alt="">
                </div>
                <figcaption class="caption_banner site-animation">
                </figcaption>
              </span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-categorya">
              <span class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box" style="justify-content:center;display:flex">
                  <img class="lazyloaded" style="width: 30%;" src="images/banner/apple.png" alt="">
                </div>
                <figcaption class="caption_banner site-animation">
                </figcaption>
              </span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-categorya">
              <span class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box" style="justify-content:center;display:flex">
                  <img class="lazyloaded" style="width: 48%;" src="images/banner/microsoft.png" alt="">
                </div>
                <figcaption class="caption_banner site-animation">
                </figcaption>
              </span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-categorya">
              <span class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box" style="justify-content:center;display:flex">
                  <img class="lazyloaded" style="width: 44%;" src="images/banner/dell.png" alt="">
                </div>
                <figcaption class="caption_banner site-animation">
                </figcaption>
              </span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-categorya">
              <span class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box" style="justify-content:center;display:flex">
                  <img class="lazyloaded" style="width: 45%;" src="images/banner/asus.png" alt="">
                </div>
                <figcaption class="caption_banner site-animation">
                </figcaption>
              </span>
            </div>
          </div>
          <!-- <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-category">
              <span href="" class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box" style="justify-content:center;display:flex">
                  <img class="lazyloaded" style="width: 34%;" src="images/banner/apple.png" alt="">
                </div>
                <figcaption class="caption_banner site-animation">
                </figcaption>
              </span>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <div class="content">
      <div class="container">
        <div class="hot_sp">
          <h2 style="text-align:center;">
            <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm mới</a>
          </h2>
          <div class="view-all" style="text-align:center;">
            <a style="color: black;text-decoration: none" href="signin.php">Xem thêm</a>
          </div>
        </div>
      </div>
      <!--Product-->
    </div>
    <div class="container product" style="width: 100%;margin: auto;">
      <div class="owl-carousel owl-theme owl-product-setting">
        <?php
        include('login_form/connect.php');
        $sql = "select * from products order by rand() limit 12,5";
        $result = mysqli_query($conn, $sql);
        ?>
        <?php foreach ($result as $row) : ?>
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="detailproduct.php?id=<?php echo $row["Id"] ?>" title="" class="img-resize">
                <img class="lazyloaded" src="<?php echo $row["Image"] ?>" alt="<?php echo $row["Product_Name"] ?>" style="height:200px">
                <img class="lazyloaded" src="<?php echo $row["Image2"] ?>" alt="<?php echo $row["Product_Name"] ?>" style="height:200px">
              </a>
            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black; font-size: 14px;text-decoration: none;" href="detailproduct.php?id=<?php echo $row["Id"] ?>" title="<?php echo $row["Product_Name"] ?>" inspiration pack>
                  <?php echo $row["Product_Name"] ?>
                </a>
              </div>
              <div class="pro-price">
                <p class=""><?php echo number_format($row["Price"], 0, ',', '.') ?>₫</p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    </section>
    <section class="section wrapper-home-newsletter">
      <div class="container-fluid">
        <div class="content-newsletter">
          <h2>Đăng ký</h2>
          <p>Đăng ký nhận bản tin của Shop Tech để cập nhật những sản phẩm mới, nhận thông tin ưu đãi đặc biệt và thông
            tin
            giảm giá khác.</p>
          <div class="form-newsletter">
            <form action="" accept-charset="UTF-8" class="">
              <div class="form-group">
                <input type="hidden" id="contact_tags">
                <input required="" type="email" value="" placeholder="Nhập email của bạn" aria-label="Email Address" class="">
                <button type="submit" class=""><span>Gửi</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php include 'login_form/footer.php' ?>
  </div>
  <!-- <div class="registratior_custom">
    <form action="signup.php">
        <div class="content">
          <div class="x-close">
            <i class="fa fa-times"></i>
          </div>
          <h3>Nhận các ưu đãi cùng Runner</h3>
          <p>Chúng tôi sẽ cập nhật các chương trình khuyến mãi mới đến bạn</p>
          <ul>
            <li>
              <span>Giảm giá sản phẩm</span>
            </li>
            <li>
              <span>Sản phẩm mới</span>
            </li>
            <li>
              <span>Sản phẩm bán chạy</span>
            </li>
          </ul>
          <input type="text" placeholder="Đăng kí nhận thông tin">
          <button class="button_register"><p>ĐĂNG KÍ</p></button>
        </div>
    </form>
  </div> -->
  <script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
  <script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
  <script src="plugins/bootstrap/popper.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/owl.carousel/owl.carousel.min.js"></script>
  <script src="plugins/uikit/uikit.min.js"></script>
  <script src="plugins/uikit/uikit-icons.min.js"></script>
  <script src="js/home.js"></script>
</body>

</html>
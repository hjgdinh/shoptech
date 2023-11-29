<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("refresh: 0.3");
}
?>
<!DOCTYPE HTML>
<html class="no-js" lang="vi">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,
      user-scalable=0" name="viewport">
  <link rel="icon" href="images/icon-web.jpg" type="image/gif">
  <meta name="revisit-after" content="1 day">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="HandheldFriendly" content="true">
  <title> Sản phẩm </title>
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/all.css">
  <link href="plugins/webfonts/font.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/owl.carousel/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="plugins/owl.carousel/owl.theme.default.min.css">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
  <!--  detail product -->
  <main class="">
    <div id="product" class="productDetail-page">
      <!--  menu header seo -->
      <div class="breadcrumb-shop">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
              <ol class="breadcrumb breadcrumb-arrows">
                <li>
                  <a href="index.php">
                    <span">Trang chủ</span>
                  </a>
                </li>
                <li>
                  <a href="product.php#float-down">
                    <span>Sản phẩm</span>
                  </a>
                </li>
                <li class="active">
                  <span>
                    <span itemprop="name"></span>
                  </span>
                  <meta itemprop="position" content="3">
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- detail product chính -->
      <?php
      include('login_form/connect.php');
      if (isset($_GET["id"]))
        $id = $_GET["id"];
      $sql = "select * from products where Id = $id";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      // print_r($row);
      ?>
      <form action="" method="post">
        <div class="container">
          <div class="row product-detail-wrapper">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row product-detail-main pr_style_01">
                <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="product-gallery">
                    <div class="product-image-detail box__product-gallery scroll hidden-xs">
                      <ul id="sliderproduct" class="site-box-content
                        slide_product">
                        <li class="product-gallery-item gallery-item
                          current " id="imgg1a">
                          <input name="txtimg" value="<?php echo $row['Image'] ?>" style="display:none">
                          <img src="<?php echo $row['Image'] ?>" alt="err" grape="">
                          <!-- <img class="product-image-feature" src="<?php echo $row['Image']; ?>"
                            alt="err" grape=""> -->
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-gallery-slide">
                    <div class="owl-carousel owl-theme owl-product-gallery-slidea">
                      <div class="item">
                        <div class="product-gallery__thumb" id="imgg1">
                          <a class="product-gallery__thumb-placeholder">
                            <img src="<?php echo $row['Image'] ?>" data-image="<?php echo $row['Image'] ?>" alt="err" grape="">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12
                  product-content-desc" id="detail-product">
                  <div class="product-content-desc-1">
                    <div class="product-title">
                      <input class="no_input" style="display:none" name="txtname" value="<?php echo $row['Product_Name'] ?>">
                      <h1><?php echo $row['Product_Name'] ?></h1>
                    </div>

                    <?php
                    include('login_form/connect.php');
                    $id = $_GET["id"];
                    error_reporting(0);
                    $sql = "select * from products where Id = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $productid =  $row['Id'];

                    $sqls = "select * from orders where Product_Id = $productid";
                    $results = mysqli_query($conn, $sqls);
                    ?>
                    <?php foreach ($results as $rows) : ?>
                      <?php $sub_totalquan = $rows['Quantity'] ?>
                      <?php $totalquan = $totalquan + $sub_totalquan ?>
                    <?php endforeach ?>

                    <!-- <?php echo $rows['Name'] ?>  
                <?php echo $rows['Price'] ?>  
                <span lass="text-right" id="total-view-cart"><?php echo $sub_total = $rows["Price"] * $totalquan ?>₫</span> -->

                    <!-- lấy ra sl tồn kho -->
                    <!-- <?php echo $row['Quantity'] ?>   -->
                    <!-- cộng dồn sl giỏ hàng -->
                    <!-- <?php echo $totalquan ?>   -->
                    <?php $sub_total2 = $row['Quantity'] - $totalquan ?>

                    <div class="product-price" id="price-preview">
                      <input class="no_input" style="display:none" name="txtprice" value="<?php echo $row['Price'] ?>">
                      <span class="pro-price"><?php echo number_format($row['Price'], 0, ',', '.') ?></span>
                      <span class="pro-price">₫</span>
                      <input class="no_input" style="display:none" name="txtuserid" value="<?php echo $_SESSION['id'] ?>">
                      <input class="no_input" style="display:none" name="txtproductid" value="<?php echo $row['Id'] ?>">
                      <input class="no_input" style="display:none" name="pttt" value="1">
                    </div>
                    <form id="add-item-form" action="/cart/add" class="variants clearfix">
                      <div class="select-swatch clearfix">
                        <!-- <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                        <div class="header" style="background: white;
                            color: #272727;"><span>Hãy Đến Ngay Với Chúng Tôi Để Được Hưởng Ưu Đãi Mới Nhất</span>
                          </div>
                        <div class="select-swap">
                          <span>Mã Giảm Giá Của Shop</span>                       
                        </div>                 
                      </div> -->
                        <div class="selector-actions" style="border-bottom: 1px dotted #dfe0e1;">
                          <!-- <div class="quantity-area clearfix">
                          <input type="number" id="quantity" min="1" value="1" name="txtquantity" class="quantity-selector" style="border:1px solid black">
                        </div> -->
                          <div class="buttons_added" style="display: flex;align-items: center;padding-bottom:15px">
                            <input class="minus is-form" type="button" value="-">
                            <input aria-label="quantity" class="input-qty" max="25" min="1" name="txtquantity" type="number" value="1">
                            <input class="plus is-form" type="button" value="+">
                            <span style="color:#757575;margin-left:25px"><?php echo $sub_total2 ?> sản phẩm có sẵn</span>
                          </div>
                        </div>
                        <!-- <div id="variant-swatch-1" class="swatch clearfix" data-option="option2" data-option-index="1">
                        <span style="font-weight: 600;font-size: 16px;">Mã Giảm Giá Của Shop Hiện Đang Hết</span></br>                     
                        <div class="select-swap">
                          <div data-value="36" class="n-sd swatch-element 36 soldout">
                            <input class="variant-1" id="swatch-1-36" type="radio" name="option2" value="8k"
                              data-vhandle="36" checked="">
                            <label for="swatch-1-36" class="sd">
                              <span>800k</span>
                            </label>
                          </div>
                          <div data-value="37" class="n-sd swatch-element 37 soldout">
                            <input class="variant-1" id="swatch-1-37" type="radio" name="option2" value="37"
                              data-vhandle="37">
                            <label for="swatch-1-37">
                              <span>120k</span>
                            </label>
                          </div>                        
                        </div>
                      </div> -->
                      </div>
                      <div class="selector-actions">
                        <!-- <div class="quantity-area clearfix">
                        <input type="number" id="quantity" min="1" name="txtquantity" class="quantity-selector" style="border:1px solid black">
                      </div> -->
                      <?php
                        include('login_form/control.php');
                        error_reporting(E_ALL);
                        $get_data = new data();
                        $insert = false; 

                        if (isset($_POST['txtpay'])) {
                            $userId = $_POST['txtuserid'];
                            $productId = $_POST['txtproductid'];
                            $quantity = $_POST['txtquantity'];

                            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
                            $select = $get_data->select_product($productId, $userId);
                            if ($select > 0 ) {
                                // Nếu sản phẩm đã tồn tại, cập nhật số lượng
                                $insert = $get_data->updateQuantity($userId, $productId, $quantity);
                            } else {
                                // Nếu sản phẩm chưa tồn tại, thêm mới
                                $insert = $get_data->in_pay(
                                    $userId,
                                    $productId,
                                    $_POST['txtimg'],
                                    $_POST['txtname'],
                                    $_POST['txtprice'],
                                    $quantity,
                                    $_POST['pttt']
                                );
                            }
                        }
                        if ($insert) {
                            echo "<span style='color:green'>Bạn đã thêm vào giỏ hàng thành công</span>";
                        }
                        ?>
                        <div class="wrap-addcart clearfix">
                          <div class="row-flex">
                            <?php if (empty($_SESSION['id'])) { ?>
                              <a href="signin.php" class="button btn-addtocart addtocart-modal add-more" style="color:white;text-decoration:none">
                                Thêm vào giỏ
                              </a>
                            <?php } else { ?>
                              <button name="txtpay" class="button btn-addtocart addtocart-modal" id="addcart">Thêm vào giỏ</button>
                            <?php } ?>
                            <button type="button" class="buy-now button" style="display: block;">Mua
                              ngay</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="product-description">
                      <div class="title-bl">
                        <h2>Mô tả</h2>
                      </div>
                      <div class="description-content">
                        <div class="description-productdetail">
                          <ul style="text-align:justify">
                            <?php echo $row['Description'] ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Notification -->
              <div id="empty-block" style="display:none">
                <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/a60759ad1dabe909c46a817ecbf71878.png" alt="" style="width:150px">
                <div class="notify-text">
                  Sản phẩm chưa được thêm vào giỏ hàng
                </div>
              </div>
              <div class="notify-modald" id="notification">
                <div class="notify-bg">
                  <div class="notify-icon">
                    <i class="fas fa-check-circle"></i>l_
                  </div>
                  <div class="notify-text">
                    Sản phẩm đã được thêm vào Giỏ hàng
                  </div>
                </div>
              </div>

              <div class="list-productRelated clearfix">
                <div class="heading-title text-center">
                  <h2>Sản phẩm liên quan</h2>
                </div>
                <div class="container">
                  <div class="row">
                    <?php
                    include('login_form/connect.php');
                    $id = $_GET["id"];
                    $sql = "select * from products where Id = $id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $cat =  $row['Category_Id'];

                    $sql = "select * from products where Category_Id = $cat order by rand() limit 4";
                    $result = mysqli_query($conn, $sql);
                    ?>
                    <?php foreach ($result as $row) : ?>
                      <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                        <div class="product-block">
                          <div class="product-imgabc fade-box">
                            <a href="detailproduct.php?id=<?php echo $row["Id"] ?>" title="<?php echo $row["Product_Name"] ?>" class="img-resize">
                              <img src="<?php echo $row["Image"] ?>" alt="<?php echo $row["Product_Name"] ?>" class="lazyloaded" style="">
                            </a>
                          </div>
                          <div class="product-detail clearfix">
                            <div class="pro-text">
                              <a style="color: black; font-size: 14px;text-decoration: none;" href="detailproduct.php?id=<?php echo $row["Id"] ?>" title="<?php echo $row["Product_Name"] ?>" inspiration pack>
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
              </div>
            </div>
          </div>
        </div>
    </div>
    </form>
  </main>
  <!--gallery-->
  <?php include 'login_form/footer.php' ?>

</body>
<script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
<script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
<script src="plugins/bootstrap/popper.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="plugins/uikit/uikit.min.js"></script>
<script src="plugins/uikit/uikit-icons.min.js"></script>
<!-- <script src="js/script.js"></script> -->
<script src="js/home.js"></script>
<script src="js/detail.js"></script>

</html>
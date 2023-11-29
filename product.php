<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="icon" href="images/icon-web.jpg" type="image/gif">

  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/main1.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <link rel="stylesheet" href="plugins/fontawesome/all.css">
  <link href="plugins/webfonts/font.css" rel="stylesheet">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="plugins/uikit/uikit.min.css">
  <title>Sản phẩm</title>
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
    <div class="item"><img src="images/carousel/3.jpg" class="d-block w-100" alt="..."></div>
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
              <a href="product.php#float-down">
                <span>Danh mục</span>
              </a>
            </li>
            <li>
              <span><span style="color: #777777">Tất cả sản phẩm</span></span>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--List Prodct-->
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
        <div class="wrap-filter">
          <div class="box_sidebar">
            <div class="block left-module">
              <div class=" filter_xs">
                <div class="group-menu">
                  <div class="title_block d-block d-sm-none d-none d-sm-block d-md-none" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                    Danh mục sản phẩm
                    <span><i class="fa fa-angle-down" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1"></i></span>
                  </div>
                  <div class="block_content layered-category collapse" id="collapseExample1">
                    <div class="layered-content card card-body" style="border:0;padding:0">
                      <ul class="menuList-links">
                        <li class=""><a href="index.php" title="Trang chủ"><span>Trang chủ</span></a></li>
                        <li class=" active "><a href="product.php#float-down" title=""><span>Sản phẩm</span></a>
                        </li>
                        <!-- <li class="has-submenu level0 ">
                          <a title="Sản phẩm" >Sản phẩm</a>
                          
                          <span class="icon-plus-submenu" data-toggle="collapse"
                              href="#collapseExample" role="button" aria-expanded="false"
                              aria-controls="collapseExample"></span>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body" style="border:0;padding-top:0;">
                              <ul class="menu-product">
                                <li><a href="detailproduct.php" title="Sản phẩm - Style 1">Sản phẩm - Style 1</a></li>
                                <li><a href="detailproduct.php" title="Sản phẩm - Style 2">Sản phẩm - Style 2</a></li>
                                <li><a href="detailproduct.php" title="Sản phẩm - Style 3">Sản phẩm - Style 3</a></li>
                              </ul>
                            </div>
                          </div>
                        </li> -->

                        <li class=""><a href="introduce.php" title="Giới thiệu"><span>Giới thiệu</span></a></li>
                        <!-- <li class=""><a href="cart.php" title="Giỏ hàng"><span>Giỏ hàng</span></a></li> -->
                        <li class=""><a href="contact.php" title="Liên hệ"><span>Liên hệ</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="layered">
                  <!-- <p class="title_block d-block d-sm-none d-none d-sm-block d-md-none" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                    Bộ lọc sản phẩm
                    <span><i class="fa fa-angle-down" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"></i></span>
                  </p> -->
                  <div class="block_content collapse" id="collapseExample2">
                    <!-- <div class="group-filter card card-body" style="border:0;padding:0" aria-expanded="true">
                      <div class="layered_subtitle dropdown-filter"><span>Xuất sứ</span><span
                          class="icon-control"><i class="fa fa-minus"></i></span></div>
                      <div class="layered-content bl-filter filter-brand">
                        <ul class="check-box-list">
                          <li>
                            <input type="checkbox" id="data-brand-p1" value="Khác">
                            <label for="data-brand-p1">Khác</label>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                    <!-- <div class="group-filter" aria-expanded="true">
                      <div class="layered_subtitle dropdown-filter"><span>Giá sản phẩm</span><span class="icon-control"><i class="fa fa-minus"></i></span></div>
                      <div class="layered-content bl-filter filter-price">
                        <ul class="check-box-list">
                          <li>
                            <input type="checkbox" id="p1">
                            <label for="p1">
                              <span>Dưới</span> 50.000₫
                            </label>
                          </li>
                          <li>
                            <input type="checkbox" id="p2">
                            <label for="p2">
                              100.000₫ - 150.000₫
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                    <!-- <div class="group-filter" aria-expanded="true">
                      <div class="layered_subtitle dropdown-filter"><span>Màu sắc</span><span class="icon-control"><i
                            class="fa fa-minus"></i></span></div>
                      <div class="layered-content filter-color s-filter">
                        <ul class="check-box-list">
                          <li>
                            <input type="checkbox" id="data-color-p1">
                            <label for="data-color-p1" style="background-color: #fb4727"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p2">
                            <label for="data-color-p2" style="background-color: #fdfaef"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p3">
                            <label for="data-color-p3" style="background-color: #3e3473"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p4">
                            <label for="data-color-p4" style="background-color: #ffffff"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p5">
                            <label for="data-color-p5" style="background-color: #75e2fb"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p6">
                            <label for="data-color-p6" style="background-color: #cecec8"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p7">
                            <label for="data-color-p7" style="background-color: #6daef4"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p8">
                            <label for="data-color-p8" style="background-color: #000000"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p9">
                            <label for="data-color-p9" style="background-color: #e2262a"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p10">
                            <label for="data-color-p10" style="background-color: #ee8aa1"></label>
                          </li>
                          <li>
                            <input type="checkbox" id="data-color-p11">
                            <label for="data-color-p11" style="background-color: #4a5250"></label>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                    <!-- <div class="group-filter" aria-expanded="true">
                      <div class="layered_subtitle dropdown-filter"><span>Kích thước</span><span class="icon-control"><i
                            class="fa fa-minus"></i></span></div>
                      <div class="layered-content filter-size s-filter">

                        <ul class="check-box-list clearfix">

                          <li>
                            <input type="checkbox" id="data-size-p1">
                            <label for="data-size-p1">35</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p2">
                            <label for="data-size-p2">36</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p3">
                            <label for="data-size-p3">37</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p4">
                            <label for="data-size-p4">38</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p5">
                            <label for="data-size-p5">39</label>
                          </li>

                          <li>
                            <input type="checkbox" id="data-size-p6">
                            <label for="data-size-p6">40</label>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="wrap-collection-title row">
          <div class="col-md-8 col-sm-12 col-xs-12">
            <h1 class="title" id="float-down">
              Tất cả sản phẩm
            </h1>
            <div class="alert-no-filter"></div>
          </div>
          <div class="col-md-4 d-sm-none d-md-block d-none d-sm-block" style="float: left">
            <div class="option browse-tags">
              <span class="custom-dropdown custom-dropdown--grey">
                <form method="get">
                  <div style="display: flex;align-items: baseline;justify-content: center;">
                    <select id="sort" name="sort" class="sort-by custom-dropdown__select">
                      <!-- <option value="price-ascending">Giá: Tăng dần</option>
                      <option value="price-descending">Giá: Giảm dần</option> -->
                      <option value="title-ascending">Tên: A-Z</option>
                      <option value="title-descending">Tên: Z-A</option>
                    </select>
                    <input type="submit" style="border:1px solid black;margin-left:15px" value="Sắp xếp" class="custom-dropdown__select">
                  </div>
                </form>
              </span>
            </div>
          </div>
        </div>
        <div class="filter">
          <i class="fas fa-search" style="color: black"></i>
          Tìm kiếm <input type="text" id="btn-searcha">
        </div>
        <div class="filter">
          <button class="btn-filter activea" data-filter="all">Tất cả</button>
          <button class="btn-filter" data-filter="dien thoai">Điện thoại</button>
          <button class="btn-filter" data-filter="laptop">Laptop</button>
          <button class="btn-filter" data-filter="other">Khác</button>
        </div>

        <div class="row">
          <?php
          include('login_form/connect.php');

          // Lấy giá trị được chọn từ dropdown
          $sort_option = isset($_GET['sort']) ? $_GET['sort'] : 'title-descending';

          // Xác định điều kiện sắp xếp
          $sort_conditions = [
            'price-ascending' => 'ORDER BY products.Price ASC',
            'price-descending' => 'ORDER BY products.Price DESC',
            'title-ascending' => 'ORDER BY products.Product_Name ASC',
            'title-descending' => 'ORDER BY products.Product_Name DESC',
          ];

          $sort_condition = $sort_conditions[$sort_option] ?? '';

          $result = mysqli_query($conn, 'select count(Id) as total from products');
          $row = mysqli_fetch_array($result);
          $total_records = $row['total'];

          $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
          $limit = 16;

          $total_page = ceil($total_records / $limit);

          $start = ($current_page - 1) * $limit;

          $result = mysqli_query($conn, "SELECT * FROM products,category WHERE products.Category_Id=category.ID 
          $sort_condition LIMIT $start, $limit");
          ?>
          <?php foreach ($result as $row) : ?>
            <div class="product-block col-md-3 col-sm-6 col-xs-6 col-6" data-item="<?php echo $row["Name"] ?>">
              <div class="product-img fade-box">
                <a href="detailproduct.php?id=<?php echo $row["Id"] ?>" title="<?php echo $row["Product_Name"] ?>" class="img-resize">
                  <img src="<?php echo $row["Image"] ?>" alt="<?php echo $row["Product_Name"] ?>" class="lazyloaded">
                  <img src="<?php echo $row["Image2"] ?>" alt="<?php echo $row["Product_Name"] ?>" class="lazyloaded">
                </a>
              </div>
              <div class="product-detail clearfix">
                <div class="pro-text">
                  <a style=" color: black;font-size: 14px;text-decoration: none;" href="detailproduct.php?id=<?php echo $row["Id"] ?>" title="<?php echo $row["Product_Name"] ?>">
                    <?php echo $row["Product_Name"] ?>
                  </a>
                </div>
                <div class="pro-price">
                  <span class="numbera" style="font-weight:bold"><?php echo number_format($row["Price"], 0, ',', '.') ?></span>
                  <span class="" style="font-weight:bold">₫</span>
                </div>
              </div>
            </div>
          <?php endforeach ?>

          <div id="empty-block" style="display:none">
            <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/a60759ad1dabe909c46a817ecbf71878.png" alt="" style="width:150px">
            <h5 style="color: rgba(0,0,0,.87);font-size: 1.125rem;margin-bottom:20px;font-weight:500">Không tìm thấy kết quả nào</h5>
            <h5 style="font-size: 1.125rem;color: rgba(0,0,0,.54);margin:0">Hãy thử sử dụng các từ khóa khác</h5>
          </div>
          <!-- Notification -->
          <div class="notify-modal">
            <div class="notify-bg">
              <div class="notify-icon">
                <i class="fas fa-check-circle"></i>
              </div>
              <div class="notify-text">
                Sản phẩm đã được thêm vào Giỏ hàng
              </div>
            </div>
          </div>

          <div class="sortpagibar pagi clearfix text-center">
            <div id="pagination" class="clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                // if ($current_page > 1 && $total_page > 1){
                //     echo '<a href="view.php?page='.($current_page-1).'" class="padd">Prev</a>  ';
                // }
                // Lặp khoảng giữa
                for ($i = 1; $i <= $total_page; $i++) {
                  // Nếu là trang hiện tại thì hiển thị thẻ span
                  // ngược lại hiển thị thẻ a
                  if ($i == $current_page) {
                    echo '<span class="padd page-node current">' . $i . '</span>  ';
                  } else {
                    echo '<a href="product.php?page=' . $i . '" class="padd page-node">' . $i . '</a>  ';
                  }
                }
                // if ($current_page < $total_page && $total_page > 1){
                //     echo '<a href="view.php?page='.($current_page+1).'" class="padd">Next</a>  ';
                // }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--gallery-->
  <?php include 'login_form/footer.php' ?>

</body>
<script async defer crossorigin="anonymous" src="plugins/sdk.js"></script>
<script src="plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="plugins/bootstrap/popper.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="plugins/uikit/uikit.min.js"></script>
<script src="plugins/uikit/uikit-icons.min.js"></script>
<script src="js/cartt.js"></script>

</html>
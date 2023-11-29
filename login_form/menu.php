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
                <td class="img"><a href="detailproduct.php?id=<?php echo $row["Product_Id"] ?>" title=""><img src="<?php echo $row["Image"] ?>"></a></td>
                <td>
                  <a class="pro-title-view" style="color: #272727" href="detailproduct.php?id=<?php echo $row["Product_Id"] ?>" title=""><?php echo $row["Name"] ?></a>
                  <span class="number"><?php echo number_format($row["Price"], 0, ',', '.') ?>₫</span>
                  <input value="<?php echo $row["Quantity"] ?>" style="display:none" readonly=""></input>
                  <span style="color: #6c757d!important;font-weight:400;font-size: 90%;">x <?php echo $row["Quantity"] ?></span>                
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
        <td><a href="checkout.php" style="color:white;font-weight:700" class="linktocheckout button dark">Thanh toán</a></td>
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
  <a style="color: #272727;font-weight: 700" href="#" uk-toggle="target: #offcanvas-flip2">
    <?php echo $total_records ?><i class="fas fa-shopping-cart"></i>
  </a>
  <a style="color: #272727" style="cursor:auto"> | </a>
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

<script>
  const activeItem = document.querySelectorAll('.navbar-nava li a')
  // console.log(activeItem)
  for (let i = 0; i < activeItem.length; i++) {
    if (activeItem[i].href === location.href) {
      activeItem[i].classList.add('activec')
    }
  }
</script>
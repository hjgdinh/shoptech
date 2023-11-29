<?php
session_start();
// Kiểm tra xem người dùng có quyền admin hay không
if ($_SESSION['Level'] != 2 && $_SESSION['Level'] != 1) {
    header('location: ../index.php');
  }
?>

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">

    <a class="navbar-brand ml-5" href="../index.php">
        <img src="../assets/images/logo.png" width="80" height="80" alt="Swiss Collection">
        <span style="font-size:20px;color:white">Hello <?php echo $_SESSION['Firstname'] ?></span>

    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

    <div class="user-cart">
        <a href="../logout.php" style="text-decoration:none;">
            <i class="fa fa-sign-in-alt mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
        </a>
    </div>
</nav>
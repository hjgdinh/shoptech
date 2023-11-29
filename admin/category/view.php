<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../images/icon-web.jpg" type="image/gif">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="../../plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../plugins/fontawesome/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  </link>
  <title>Admin</title>
</head>

<body>
  <?php
  include "../adminHeader.php";
  include "../sidebar.php";
  ?>
  <div class="container-header">
    <a href="create.php" class="link" id="float-up">Thêm</a>
    <a href="view.php" class="link">Sửa/Xóa</a>
    <a href="../index.php" class="link">Trang chủ</a>
  </div>
  <h2 style="font-size:25px;padding:10px 10px 0;justify-content:center;display:flex">Sửa / Xóa</h2>
  <table class="table_form">
    <tr>
      <th class="table_item">ID</th>
      <th class="table_item">Name</th>
      <th class="table_item">Edit</th>
      <th class="table_item">Delete</th>
    </tr>
    <?php
    include('../connect.php');
    $sql = "select * from category";
    $result = mysqli_query($conn, $sql);
    ?>
    <tr>
      <?php foreach ($result as $row) : ?>
        <td class="table_item"><?php echo $row['ID']; ?></td>
        <td class="table_item"><?php echo $row['Name']; ?></td>
        <td class="table_item"><a href="update.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
        <td class="table_item"><a href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
    </tr>
  <?php endforeach ?>
  </table>
</body>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</html>
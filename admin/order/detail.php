<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="icon" href="../../images/icon-web.jpg" type="image/gif">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="../../plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../plugins/fontawesome/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  </link>
  <title>Admin</title>
</head>

<body>
  <?php include('../adminHeader.php') ?>
  <div class="container-header">
    <h2><a href="view.php">Quay lai</h2></a>
  </div>
  <?php
  include('../connect.php');
  $order = $_GET['id'];
  $sql = "select * from orders where Id = '$order' ";
  $result = mysqli_query($conn, $sql);
  $sum = 0;
  ?>
  <table border="1" width="100%">
    <tr>
      <th>ảnh</th>
      <th>Tên sản phẩm</th>
      <th>Giá</th>
      <th>Số lượng </th>
      <th>Tổng tiền</th>
    </tr>
    <tr>
      <?php foreach ($result as  $row) :  ?>

    <tr>
      <td class="center"><img height='100' src="../../<?php echo $row['Image'] ?>"></td>
      <td class="center"><?php echo $row['Name'] ?></td>
      <td class="center"><?php echo number_format($row["Price"], 0, ',', '.') ?>₫</td>
      <td class="center"><?php echo $row['Quantity'] ?></td>

      <td class="center">
        <?php
        $total = number_format($sub_total = $row["Price"] * $row["Quantity"], 0, ',', '.');
        echo $total;
        // $sum += $total;
        ?>₫
      </td>
    </tr>
  <?php endforeach ?>
  </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../images/icon-web.jpg" type="image/gif">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  </link>
  <title>Admin</title>
</head>

<body>
  <?php include('../adminHeader.php') ?>
  <div class="container-header">
    <a href="create.php" class="link">Thêm</a>
    <a href="view.php" class="link">Sửa/Xóa</a>
  </div>

  <h2 class="header-content">Thêm sản phẩm</h2>

  <?php
  // Ket not db
  include('../connect.php');
  $sql = "select * from category";
  $result = mysqli_query($conn, $sql);
  ?>
  <form action="" method="POST" style="padding: 20px">
    Name: <input type="text" name="name" class="form-item"></br>
    Price: <input type="number" name="price" class="form-item"> </br>
    Quantity: <input type="number" name="quan" class="form-item"> </br>
    Image: <input name="img" class="form-item"> </br>
    Category:
    <select name="dataitem" style="width:100px; margin-bottom:5px">
      <?php foreach ($result as $row) : ?>
        <option value="<?php echo $row['ID'] ?>">
          <?php echo $row['Name'] ?>
        </option>
      <?php endforeach ?>
    </select></br>
    <label style="align-items:center;display:flex">Description:
      <textarea type="text" name="des" style="width:450px;height:150px; margin-bottom:5px;"></textarea>
    </label><br />
    <input type="submit" value="Create" name="create">
    <?php
    include('../connect.php');
    class data
    {
      public function in_product($name, $price, $quan, $img, $des, $dataitem)
      {
        global $conn;
        $sql = "insert into products(Product_Name,Price,Quantity,Image,Description,Category_Id) 
            values('$name','$price','$quan','$img','$des','$dataitem')";
        $run = mysqli_query($conn, $sql);
        return $run;
      }
      public function select_product($name)
      {
        global $conn;
        $sql = "select * from products where Product_Name='$name'";
        $run = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($run);
        return $num;
      }
    }
    error_reporting(0);
    $get_data = new data();
    if (isset($_POST['create']))
      if (empty($_POST['name']) || empty($_POST['price'])) {
        echo "Bạn chưa nhập thông tin sản phẩm. Vui lòng thử lại";
      } else {
        $select = $get_data->select_product($_POST['name']);
        if ($select > 0)
          echo "Sản phẩm đã tồn tại.Hãy chọn sản phẩm khác";
        else {
          $insert = $get_data->in_product(
            $_POST['name'],
            $_POST['price'],
            $_POST['quan'],
            $_POST['img'],
            $_POST['des'],
            $_POST['dataitem'],
          );
          //Thông báo quá trình lưu
          if ($insert)
            header('location:../product/view.php');
          // echo "Bạn đã thêm thành công.";
          else
            echo "Sửa thất bại " . $conn->error;
        }
      }
    ?>

  </form>
</body>

</html>
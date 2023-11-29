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
  <?php include('../adminHeader.php') ?>
  <div class="container-header">
    <a href="create.php" class="link">Thêm</a>
    <a href="view.php" class="link">Sửa/Xóa</a>
  </div>

  <h2 class="header-content">Thêm</h2>

  <?php
  // Ket not db
  include('../connect.php');
  $sql = "select * from category";
  $result = mysqli_query($conn, $sql);
  ?>
  <form action="" method="POST" style="padding: 20px">
    Name: <input type="text" name="name" class="form-item"></br>
    <input type="submit" value="Create" name="create">
    <?php
    include('../connect.php');
    class data
    {
      public function in_cat($cat)
      {
        global $conn;
        $sql = "insert into category(Name) values('$cat')";
        $run = mysqli_query($conn, $sql);
        return $run;
      }
      public function select_cat($name)
      {
        global $conn;
        $sql = "select * from category where Name='$name'";
        $run = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($run);
        return $num;
      }
    }
    //   error_reporting(0);
    $get_data = new data();
    if (isset($_POST['create']))
      if (empty($_POST['name'])) {
        echo "Bạn chưa nhập thông tin. Vui lòng thử lại";
      } else {
        $select = $get_data->select_cat($_POST['name']);
        if ($select > 0)
          echo "Category đã tồn tại.Hãy chọn sản phẩm khác";
        else {
          $insert = $get_data->in_cat($_POST['name'],);
          //Thông báo quá trình lưu
          if ($insert)
            header('location:../category/view.php');
          // echo "Bạn đã thêm thành công.";
          else
            echo "Sửa thất bại " . $conn->error;
        }
      }
    ?>

  </form>
</body>

</html>
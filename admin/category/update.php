<!DOCTYPE html>
<html>

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
  <?php
  // Ket not db
  include('../connect.php');
  $id = $_GET['id'];
  $sql = "select * from category where ID=$id";
  $result = mysqli_query($conn, $sql);
  ?>
  <?php foreach ($result as $row) : ?>
    <form method="POST" class="form" style="padding:25px">
      <h2 class="header-content">Sửa</h2>
      <label>Name: <input type="text" value="<?php echo $row['Name']; ?>" style="width:250px; margin-bottom:5px" name="name"></label><br />
      <input type="submit" value="Update" name="update">
    <?php endforeach ?>
    <?php
    if (isset($_POST['update'])) {
      $id = $_GET['id'];
      $name = $_POST['name'];
      // Ket not db
      include('../connect.php');
      $sql = "UPDATE `category` SET Name='$name' WHERE ID='$id'";

      if ($conn->query($sql) === TRUE) {
        header('location:../category/view.php');
      } else {
        echo "Sửa thất bại " . $conn->error;
      }
      $conn->close();
    }
    ?>
    </form>
</body>

</html>
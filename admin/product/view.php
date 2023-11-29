<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../images/icon-web.jpg" type="image/gif">
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
    <a href="#float-down" class="link">
      <i class="fa fa-angle-down"></i>
    </a>
    <div>
      <h2 class="header-content">Sửa / Xóa sản phẩm</h2>
      <table id="table_form">
        <button class="btn btn-success" id="export">Xuất File Excel</button>
        <tr>
          <th class="table_item">STT</th>
          <th class="table_item">Name</th>
          <th class="table_item">Price</th>
          <th class="table_item noExl">Image</th>
          <!-- <th class="table_item">Image2</th> -->
          <th class="table_item">Category</th>
          <th class="table_item">Quantity</th>
          <th class="table_item noExl">Description</th>
          <th class="table_item noExl">Edit</th>
          <th class="table_item noExl">Delete</th>
        </tr>

        <?php
        include('../connect.php');

        $result = mysqli_query($conn, 'select count(Id) as total from products');
        $row = mysqli_fetch_array($result);
        $total_records = $row['total'];

        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 8;

        $total_page = ceil($total_records / $limit);

        $start = ($current_page - 1) * $limit;

        $result = mysqli_query($conn, "SELECT * FROM products,category WHERE products.Category_Id=category.ID
               LIMIT $start, $limit");
        ?>
        <div class="pagination" style="padding-bottom:15px">
          <?php
          // if ($current_page > 1 && $total_page > 1){
          //     echo '<a href="view.php?page='.($current_page-1).'" class="padd">Prev</a>  ';
          // }

          // Lặp khoảng giữa
          for ($i = 1; $i <= $total_page; $i++) {
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page) {
              echo '<span class="padd">' . $i . '</span>  ';
            } else {
              echo '<a href="view.php?page=' . $i . '" class="padd">' . $i . '</a>  ';
            }
          }

          // if ($current_page < $total_page && $total_page > 1){
          //     echo '<a href="view.php?page='.($current_page+1).'" class="padd">Next</a>  ';
          // }
          ?>
        </div>
        <?php
        $stt = 1;
        foreach ($result as $row) :
          echo '<tr>';
          echo '<td class="table_item">' . $stt++ . '</td>';
          echo '<td class="table_item">' . $row['Product_Name'] . '</td>';
          echo '<td class="table_item">' . number_format($row["Price"], 0, ',', '.') . '₫</td>';
          echo '<td class="table_item noExl"><img src="../../' . $row['Image'] . '" style="width:100px" alt=""></td>';
          echo '<td class="table_item">' . $row['Name'] . '</td>';
          echo '<td class="table_item">' . $row['Quantity'] . '</td>';
          echo '<td class="table_item noExl"> 
                          <textarea readonly="" style="width:500px;height:120px">' . nl2br($row['Description']) . '</textarea>
                        </td>';
          echo '<td class="table_item" class="noExl"><a class="noExl" href="update.php?id=' . $row['Id'] . '">Edit</a></td>';
          echo '<td class="table_item" class="noExl"><a class="noExl" href="delete.php?id=' . $row['Id'] . '">Delete</a></td>';
          echo '</tr>';
        endforeach
        ?>
      </table>
      <div id="float-down">
      </div>
      <!-- <a href="#float-up" class="link" style="display: flex; justify-content: flex-end; padding: 0 10px 20px; margin-right:10px">
        <i class="fa fa-angle-up"></i>
      </a> -->
</body>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./../plugin/jquery.table2excel.min.js"></script>
<script>
  $("#export").click(function() {
    $("#table_form").table2excel({
      exclude: ".noExl",
      name: "Worksheet Name",
      filename: "products",
      fileext: ".xls",
      preserveColors: true
    })
  });
</script>

</html>
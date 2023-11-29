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
        <a href="../index.php" class="link">Trang chủ</a>
    </div>

    <h2 class="header-content">Đơn đặt hàng</h2>

    <?php
    include('../connect.php');
    $sql = "select * from orders,user WHERE orders.User_Id=user.ID";
    $result = mysqli_query($conn, $sql);
    ?>
    <button class="btn btn-success" id="export" style="margin:10px 20px">Xuất File Excel</button>
    <table border="1" width="100%" class="table_form" id="table_forma">
        <tr>
            <th class="center table_item">Mã</th>
            <th class="center table_item">Thời gian đặt</th>
            <th class="center table_item">Thông tin người nhận</th>
            <!-- <th class="center table_item">Thông tin người đặt</th> -->
            <th class="center table_item">Tổng tiền</th>
            <!-- <th class="center table_item">Pt thanh toán</th> -->
            <th class="center table_item">Trạng thái</th>
            <th class="center table_item noExl">Xem</th>
            <th class="center table_item noExl">Sửa</th>
        </tr>
        <?php foreach ($result as $row) : ?>git 
            <tr>
                <td class="center"><?php echo $row['Id'] ?></td>
                <td><?php echo $row['Time'] ?></td>
                <td style="text-align: left">
                    <span class="item">Họ tên:</span> <?php echo $row['Lastname'], ' ', $row['Firstname'] ?><br>
                    <span class="item">Email:</span> <?php echo $row['Email'] ?><br>
                    <span class="item">Địa chỉ:</span> <?php echo $row['Address'] ?><br>
                    <span class="item">SĐT:</span> <?php echo $row['Phone'] ?><br>
                </td>
                <!-- <td style="text-align: left">
                <span class="item">Tên:</span> <?php echo $row['Firstname'] ?><br>
                <span class="item">Giới tính:</span> <?php echo $row['Gender'] ?><br>
                <span class="item">Email:</span> <?php echo $row['Email'] ?><br>
            </td>            -->
                <td class="center">
                    <?php echo number_format($sub_total = $row["Price"] * $row["Quantity"], 0, ',', '.') ?>₫
                </td>
                <!-- <td class="center">
                    <?php
                    switch ($row['Pttt']) {
                        case '1':
                            echo "Tiền mặt";
                            break;
                        case '2':
                            echo "Đã hủy";
                            break;
                    }
                    ?>
                </td> -->
                <td class="center">
                    <?php
                    switch ($row['Status']) {
                        case '0':
                            echo "Đang chờ xác nhận";
                            break;
                        case '1':
                            echo "Đã duyệt";
                            break;
                        case '2':
                            echo "Đã hủy";
                            break;
                    }
                    ?>
                </td>
                <td class="center">
                    <a href="detail.php?id=<?php echo $row['Id'] ?>" class="noExl">Xem</a>
                </td>
                <td class="center">
                    <a href="update.php?id=<?php echo $row['Id'] ?>&status=1" class="noExl">Duyệt</a><br>
                    <a href="update.php?id=<?php echo $row['Id'] ?>&status=2" class="noExl">Hủy</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="./../plugin/jquery.table2excel.min.js"></script>
<script>
    $("#export").click(function() {
        $("#table_forma").table2excel({
            exclude: ".noExl",
            name: "Worksheet Name",
            filename: "products",
            fileext: ".xls",
            preserveColors: true
        })
    });
</script>

</html>
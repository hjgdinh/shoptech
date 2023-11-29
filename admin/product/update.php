<!DOCTYPE html>
<html>

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
        <div>
            <?php
            // Ket not db
            include('../connect.php');
            $id = $_GET['id'];
            $sql = "select * from products where Id=$id";
            $result = mysqli_query($conn, $sql);
            $sql1 = "select * from category ";
            $category = mysqli_query($conn, $sql1)
            ?>
            <?php foreach ($result as $row) : ?>
                <form method="POST" class="form" style="padding:25px;">
                    <h2 class="header-content">Sửa sản phẩm</h2>
                    <label>Name: <input type="text" value="<?php echo $row['Product_Name']; ?>" style="width:450px; margin-bottom:5px" name="name"></label><br />
                    <label>Price: <input type="text" value="<?php echo $row['Price']; ?>" style="width:150px; margin-bottom:5px" name="price"></label><br />
                    <label>Quantity: <input type="number" value="<?php echo $row['Quantity']; ?>" style="width:150px; margin-bottom:5px" name="quan"></label><br />
                    <label>Image: <input type="text" value="<?php echo $row['Image']; ?>" style="width:450px; margin-bottom:5px" name="image"></label><br />
                    <label>
                        Category:
                        <select name="data_item" style="width:100px; margin-bottom:5px">
                            <?php foreach ($category as $manufacturer) : ?>
                                <option value="<?php echo $manufacturer['ID'] ?>" <?php if ($row['Category_Id'] == $manufacturer['ID']) { ?> selected <?php } ?>>
                                    <?php echo $manufacturer['Name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </label><br />
                    <label style="align-items:center;display:flex">Description:
                        <textarea type="text" style="width:450px;height:200px; margin-bottom:5px;" name="description"><?php echo $row['Description']; ?>
    </textarea>
                    </label><br />
                    <input type="submit" value="Update" name="update">
                <?php endforeach ?>

                <?php
                if (isset($_POST['update'])) {
                    $id = $_GET['id'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $quan = $_POST['quan'];
                    $img = $_POST['image'];
                    $dataitem = $_POST['data_item'];
                    $des = $_POST['description'];
                    include('../connect.php');
                    $sql = "UPDATE `products` SET Product_Name='$name', Price='$price', Quantity='$quan', Image='$img', Category_Id='$dataitem', Description='$des' 
        WHERE id='$id'";
                    if ($conn->query($sql) === TRUE) {
                        header('location:../product/view.php');
                        // echo "Sửa thành công";
                    } else {
                        echo "Sửa thất bại" . $conn->error;
                    }
                    $conn->close();
                }
                ?>
                </form>
</body>

</html>
<?php
    include('../connect.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `user` WHERE ID=$id;";

    // thuc thi delete
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('location:../user/view.php');
?>
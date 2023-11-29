<?php
include('../connect.php'); 
$id = $_GET['id'];
$status = $_GET['status'];
$sql = "update orders set Status = $status where Id = '$id'";
mysqli_query($conn, $sql);
header('location:view.php');

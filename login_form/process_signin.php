<?php
  $email = $_POST["txtemail"]; 
  $password = $_POST["txtpassword"];
  include('connect.php');             
    //Kiểm tra tên đăng nhập có tồn tại không
    $sql = "SELECT * FROM user WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($result);
    if ($rows === 0) {
        // echo "Tên đăng nhập này không tồn tại.";
        header('location:.././signin.php?errora');
        exit;
    }   
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($result);    
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['Password']) {
        // echo "Mật khẩu không đúng."; 
        header('location:.././signin.php?error');
        exit;
    }

    if($rows === 1 ) {
        session_start();
        $_SESSION['id']=$row['ID'];
        $_SESSION['Firstname']=$row['Firstname'];
        $_SESSION['Lastname']=$row['Lastname'];
        $_SESSION['Level']=$row['Level'];
        header('location:user.php');
    }   

    if ($email === $row['Email'] && $password === $row['Password'] && $row['Level'] === "1") {	     
        header('location:../admin/index.php');
    }  

    if ($email === $row['Email'] && $password === $row['Password'] && $row['Level'] === "2") {	     
        header('location:../admin/index.php');
    }

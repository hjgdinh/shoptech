<?php
    session_start();
    session_destroy();
    unset($_SESSION['ID']);
    unset($_SESSION['Firstname']);
    unset($_SESSION['Level']);
    header('location:../signin.php');

<?php
    include 'admin/config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $date = date("Y-m-d");


    $str =  "INSERT INTO `users`( `HoTen`, `Username`, `Password`, `Email`, `NgayDangKy`) VALUES ('$name','$username','$password','$email','$date')";
    $result = mysqli_query($conn, $str);
    
    header("Location:login.php");
    

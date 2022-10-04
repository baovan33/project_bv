<?php
    include 'admin/config.php';
   $username = $_POST['username'];
   $password = md5($_POST['password']);

    $str = "select * from users where Username='$username' and Password='$password'";
    $result = mysqli_query($conn, $str);
    $row = mysqli_fetch_assoc($result);
    $num_row = mysqli_num_rows($result);
    

    if($num_row == 0) {  
    header("Location:login.php");
    }
    else
    {
    $_SESSION['username'] =$username;

    header("Location:admin/index.php");
    }


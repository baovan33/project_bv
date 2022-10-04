<?php session_start(); ?>  
<?php 
include "config.php"; 

$tenTL = $_GET["TenTL"];
$thutu = $_GET["ThuTu"];
$anhien = $_GET["AnHien"];

// echo $str = "insert into theloai values('','$tenTL','$thutu','$anhien')";
 $str = "insert into `theloai`( `TenTL`, `ThuTu`, `AnHien`) VALUES ('$tenTL','$thutu','$anhien')";
mysqli_query($conn,$str);
header('location:list_theloai.php');
?>
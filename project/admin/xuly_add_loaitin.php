<?php session_start(); ?>  
<?php 
include "config.php"; 

$idTL = $_GET["idTL"];
$tenLT = $_GET["TenLT"];
$thutu = $_GET["ThuTu"];
$anhien = $_GET["AnHien"];
$tukhoa = $_GET["tukhoa"];

echo $str = "insert into `loaitin`( `Ten`, `ThuTu`, `AnHien`,`idTL`,`KeyWord`) VALUES ('$tenLT','$thutu','$anhien','$idTL','$tukhoa')";
mysqli_query($conn,$str);
header('location:list_loaitin.php');
?>
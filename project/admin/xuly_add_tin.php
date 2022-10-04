<?php session_start(); ?>  
<?php 
include "config.php"; 

$tieude = $_GET["TieuDe"];
$tomtat = $_GET["TomTat"];
$noidung = $_GET["NoiDung"];
$idLT = $_GET["LoaiTin"];
$idSK = $_GET["SuKien"];
$idTL = $_GET["TheLoai"];
$idUser = $_SESSION['idUSer'];

$date = date("Y-m-d H:i:s");

$str = "insert into tin( `TieuDe`, `TomTat`, `Ngay`, `idUser`, `idSK`, `Content`, `idLT`, `idTL`)
VALUES ('$tieude','$tomtat','$date','$idUser','$idSK','$noidung','$idLT','$idTL')";

mysqli_query($conn,$str);
header('location:list_tin.php');
?>  
<?php session_start(); ?>  
<?php 
include "config.php"; 

$idTL = $_GET["idTL"];
$tenTL = $_GET["TenTL"];
$thutu = $_GET["ThuTu"];
$anhien = $_GET["AnHien"];

$str = "update theloai set TenTL = '$tenTL', ThuTu = '$thutu', AnHien = '$anhien' where idTL = $idTL";
mysqli_query($conn,$str);
header('location:list_theloai.php');
?>
<?php
include("baglan.php");

$uye_nickname= $_POST["uye_nickname"];
$uye_email= $_POST["uye_email"];
$uye_sifre= $_POST["uye_sifre"];

$sql = "INSERT INTO uye_data (uye_nickname,uye_email,uye_sifre) VALUES('$uye_nickname','$uye_email','$uye_sifre')";
		

 
   mysqli_query($conn,$sql);
   
   mysqli_close($conn);
?>
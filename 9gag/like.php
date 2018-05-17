<?php



include("baglan.php");

 
$sqll = $_GET ['id']; 
echo $sqll;
 
mysqli_query($conn, "UPDATE uye_post SET post_like = (post_like + 1) WHERE post_title = '$sqll' ");

header("location:index.php");


?>


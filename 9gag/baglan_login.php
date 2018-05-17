<?php
session_start();
include('baglan.php');

$error = '';
	if(isset($_POST["submit"]))
	{
		if( empty( $_POST [ 'uye_email' ] ) || empty ( $_POST [ 'uye_sifre' ] ) )
		{
			$error = "Username or Password is Invalid";
		}
		else
		{
			$user = $_POST ['uye_email'];
			$pass = $_POST ['uye_sifre'];
			
			$query = mysqli_query ( $conn , "SELECT * FROM uye_data WHERE uye_sifre = '$pass' AND uye_email = '$user'" );
			$sqlnick = mysqli_query($conn ,"SELECT * FROM uye_data WHERE uye_sifre = '$pass' AND uye_email = '$user'");
			
			while($sqlnickfetch=mysqli_fetch_array($sqlnick))
{
$_SESSION["nickname"]=  $sqlnickfetch["uye_nickname"];
$_SESSION["uye_id"] = $sqlnickfetch["uye_id"];

}


			
			$rows = mysqli_num_rows($query);
			
			if ($rows == 1)
			{
			 header("location:index.php");
			}
			else
			{
				$error = "Username or Password is Invalid because of row";
			}
			
		}
	}
echo $error;
mysqli_close ($conn);

?>
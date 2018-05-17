<?php
	
	session_start();
	unset($_SESSION["nickname"]);
	header("location:index.php");
	
?>
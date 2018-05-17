<?php

	include("baglan.php");
	session_start();
	
	
	
	
	
	$comment_owner =  $_SESSION["nickname"];
	$comment_content = $_POST["comment_content"];
	$comment_post_title = $_SESSION["post_title_comment"];
	
	
	$comment_row= mysqli_query($conn,"SELECT * FROM comment WHERE comment_post_title = '$comment_post_title '");
	$row_comment = mysqli_num_rows($comment_row) + 1;
	mysqli_query($conn," UPDATE uye_post SET post_comment = '$row_comment' WHERE post_title = '$comment_post_title'");
	
	mysqli_query ($conn , "INSERT INTO comment (comment_content , comment_owner , comment_post_title) 
	VALUES ('$comment_content' , '$comment_owner ', '$comment_post_title'  ) ");
	header("location:index.php");

?>
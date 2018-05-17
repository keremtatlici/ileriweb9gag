

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>9GAG: Go Fun The World</title>
		<link href="gag.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	
		<div class="sayfa">
			<div class="ust">
				<a class="logo" href="index.php">9GAG</a>
				<ul class="solbanner">
					<li><a href="#">TV</a></li>
					<li><a href="#">Video</a></li>
					<li><a href="#">Get Our App!</a></li>
					<li><a href="#">NSFW Clothing - Sale</a></li>
					<li><a href="#">
					 <?php
						session_start();
							if(isset($_SESSION["nickname"])){
								echo $_SESSION["nickname"];
							}
							
					 ?>
					</a></li>	
					<li><a href="logout.php">
					 <?php
							if(isset($_SESSION["nickname"])){
								echo "Log Out";
							}
							
					 ?>
					</a></li>	
				</ul>
				<ul class="sagbanner">
					<li>
						<?php
							if(isset($_SESSION["nickname"])){
								echo '<a class="signup" href ="#">+Upload</a>';
							}else
							{
								echo '<a class="signup" href ="signup.php">Sign up</a>';
							}
							
						?>
					</li>
					<li> 
						<?php
							if(isset($_SESSION["nickname"])){
							echo '<a class="pp" href="#" ><img src="pp.jpg" > </a>';
							}
						?>
					</li>
					<li>
						<?php
							if(isset($_SESSION["nickname"])){
							echo '<a class="bildirim" href="#">bildirim</a>';
							}else{
								echo ' <a class="login" href ="login.php">Log in</a> ';
							}
						?>
					
					</li>
					<li>
						<div id="dropdown">
							<a class="search" href ="#">Search</a>
							<div id="searchtext">
							<input type="text" name="query" class="searchtext" tabindex="1" autocomplete="off" placeholder="Type to search">
							</div>
						</div>
					</li>
				</ul>
			</div>
			
			<!-- BANNER SONU-->
			
			<div class="sagalt">
				<form enctype="multipart/form-data" action="upload.php" method="POST">
					
					Select image to upload : <input name="uye_upload" type="file" /><br><br>
					Write a title for your post :<input type= "text" name = "title"><br><br>
					<input type="submit" value="Dosyayı Gönder" />
				</form>
				
				<?php
					$location ='uploads/';
					@$upcoming_file_location = $location . basename($_FILES["uye_upload"]['name']);
					@$oldlocation = $_FILES["uye_upload"]["tmp_name"];
					$post_owner_name = $_SESSION["nickname"];
					@$post_title = $_POST["title"];
					@$post_name = $_FILES["uye_upload"]["name"];
					
					if(move_uploaded_file($oldlocation, $upcoming_file_location ))
					{
						include("baglan.php");
						
						$sql_post = "INSERT INTO uye_post (post_owner_name , post_name , post_title) VALUES ('$post_owner_name' , '$post_name' ,' $post_title ') ";
						$fetchpost=("SELECT * FROM uye_post WHERE post_title = '$post_title'");	
						
						mysqli_query($conn,$sql_post);
						echo "upload is done";
						echo "<br>". $post_name ;
						$_SESSION["post_title"] =$post_title;
						$_SESSION["post_owner_name"]= $post_owner_name;
						$_SESSION["post_name"] = $post_name;
						$_SESSION["post_location"] = $upcoming_file_location;
						header("location:index.php");
					}
					
					
				?>
				
			</div>
			<div class="solalt">
				<div class="solalt_ust">
					<h3>Popular</h3>
					<ul>
						<li>
							<a href="#"><div class="icon_hot"><div class="text">Hot</div></div></a>
						</li>
						<li>
							<a href="#"><div class="icon_trending"><div class="text">Trending</div></div></a>
						</li>
						<li>
							<a href="#"><div class="icon_fresh"><div class="text">Fresh</div></div></a>
						</li>
					</ul>
				</div>
				<div class="solalt_orta">
					<h3>SECTIONS</h3>
					<ul>
						<li>
							<a href="#"><div class="resim1"><div class ="text">Funny</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim2"><div class ="text">Travel</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim3"><div class ="text">Wallpaper</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim4"><div class ="text">Photography</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim5"><div class ="text">Animals</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim6"><div class ="text">Anime_Manga</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim7"><div class ="text">Ask_9GAG</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim8"><div class ="text">Awesome</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim9"><div class ="text">Car</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim10"><div class ="text">Comic</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim11"><div class ="text">Country</div></div></a>
						</li>
						<li>
							<a href="#"><div class="resim12"><div class ="text">Classical_Art_Memes</div></div></a>
						</li>
					</ul>
				</div>
				
				
				<div class="solalt_alt">
					<a href="#">Advertise</a>
					<a href="#">Rules</a>
					<a href="#">Tips</a>
					<a href="#">FAQ</a>
					<a href="#">Terms</a>
					<a href="#">Privacy</a>
					<a href="#">Jobs</a>
					<a href="#">Contact</a><br>
					9GAG © 2018
				</div>
			</div>
		</div>
		
	</body>
</html>
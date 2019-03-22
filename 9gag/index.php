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
								echo '<a class="signup" href ="upload.php">+Upload</a>';
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
		<div class class="down">
			<div class="sagalt">
				<div class ="sagalt_alt">
					<div class="sagalt_alt_sol">
						<div class="etiketler">
							<a href="#"> Deadpool  </a>
							<a href="#">  Mark Zuckerberg </a>
							<a href="#"> Avengers  </a>
							<a href="#"> Infinity War  </a>
							<a href="#">  Thanos </a>
							<a href="#">  Marvel </a>
							<a href="#">  Gru </a>
							<a href="#">  Stephen Hawking </a>
							<a href="#"> RIP </a>
							<a href="#">  Savage Patrick </a>
							<a href="#">  Nokia </a>
							<a href="#">  Black Panther </a>
							<a href="#">  Monster Hunter World </a>
							<a href="#">  Fortnite </a>
							<a href="#">  Marvel </a>
							<a href="#">  Nature is Lit </a>
							<a href="#">  League of Legends </a>
							<a href="#">  Cosplay </a>
							<a href="#"> Engineering  </a>
						</div>
						<div class="postlar">
						
						<?php
							include("baglan.php");
							$post_data_sql = mysqli_query($conn,"SELECT * FROM uye_post ORDER BY post_id DESC");
							
							while($b = mysqli_fetch_array($post_data_sql))
							{
								echo
								"<div class='post'>
								<h1>".$b['post_title']."</h1>
								<img src='uploads/".$b['post_name']."'style='max-width:500px;height:auto;'>
								<div class='point_com'>
									<a href='#'>".$b['post_like']." points</a>
									<a href='#'>".$b['post_comment']." comments</a>
								</div>
								<div class='buttons'>
									<div class='buttons_sol'>
										<a class='like' href='like.php?id=".$b['post_title']." '>like</a>
										<a class='dislike' href='dislike.php?id=".$b['post_title']." '>dislike</a>
										<a class='comment' href='post.php?id=".$b['post_title']." '>comment</a>
										<a class='etc' href='#'>etc</a>
										<a class='facebook' href='#'><b>facebook</b></a>
										<a class='pinterest' href='#'><b>pinterest</b></a>
									</div>
									
								</div>
							</div>";
								
								
							}
							
						?>
							
							
						</div>
					</div>
					<div class="sagalt_alt_sag">
					
						<div class="sag_postlar">
						
							<a href="https://9gag.com/gag/aOrQno6?ref=fsidebar" target="_blank">
									<img src="https://miscmedia-9gag-fun.9cache.com/images/featured/1523419301.8061_7u9ydA_300.jpg">
									<h3>Meet Rexie, The Cat-King Of Bleps Who Pulls The Cutest Faces</h3>
							</a>
							
							
							<a href="https://9gag.com/gag/a3KZPzv?ref=fsidebar" target="_blank"><div class="img-container"><img src="https://miscmedia-9gag-fun.9cache.com/images/featured/1523512655.7697_Ba9eWu_300.jpg"></div> <div class="info-container"><h3>Mark Zuckerbot at his congress hearing</h3></div></a>
							
							<a href="https://9gag.com/gag/aMj4XKP?ref=fsidebar" target="_blank"><div class="img-container"><img src="https://miscmedia-9gag-fun.9cache.com/images/featured/1523419936.0193_E6U6AR_300.jpg"></div> <div class="info-container"><h3>Trump sings Havana</h3></div></a>
							
							<a href="https://9gag.com/gag/azX2MDx?ref=fsidebar" target="_blank"><div class="img-container"><img src="https://miscmedia-9gag-fun.9cache.com/images/featured/1523877052.2998_EZYtaj_300.jpg"></div> <div class="info-container"><h3>BBC at its best</h3></div></a>
						</div>
						
					</div>
				</div>
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
					9GAG � 2018
				</div>
			</div>
			</div>
		</div>
		
	</body>
</html>
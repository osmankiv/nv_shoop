<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta lang="EN">
		<link rel="stylesheet" type="text/css" href="css/styel.css">
		<script type="text/javascript" src="js/javascript.js"></script>
		<title>osman-shoop</title>
	</head>

	<body>
		<header>
			<?php 
			session_start();
			//--------contion ------------
						 include 'conationDB.php';				
			///
         

			 
			if( isset($_SESSION['username']))
			{
				// profile
				echo '
					<div>
						<em>welcome '. $_SESSION['username'].'</em><br>
					</div>
				';
				$userName=$_SESSION['username'];

			
				 //add user location dlevaring
				if(isset($_POST["userLoction"]))
				{
					$addUserLocstion= $_POST["userLoction"];
					$addUserLocstionDilever=$database->prepare("UPDATE `user` SET `delverloction`='$addUserLocstion' WHERE `user_name` = '$userName'");
				$addUserLocstionDilever->execute();
				header("location:card.php");
				
			}
			}
				



			 

			?>
			
				<img src="imgs/balance.png"> <!--tha main icon of main page -->
			<form action="" method="post"  class="delvre">
				<a href="#" tabindex="0" class="delvre">
					<span> 

						<img src="imgs/location.png">
						deilvr to
						<div class="form-floating">
							<select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="userLoction" >
								<option selected class="option" type="submit">natchnal</option>
								<option value="sudan" class="option">sudan</option>
								<option value="egpt" class="option">egpt</option>
								<option value="sudu arbia" class="option">sudu arbia</option>
							</select>

						</div>
						   <button class="button" name="submit" >GO TO CARD </button>

					</span>
			</form>		
			</a>
			<div class="search-box">
				<input type="search" name="search" class="search-box"><button onclick="submit"><img
						src="imgs/search.png"></button>
			</div>
			<span class="space"></span>
			<a href="#">
				<select class="form_floating" valul="0" aria-label="Floating label select example" id="heading1">
					<option selected class="option" disabled></option>
				</select>
				<img src="imgs/shopping-cart (2).png">
			</a>
			<span> <input type="number" name="cart-num" class="cart_num" value="0" disabled id="cart_num"></span>
			
		</header>
		<nav>
			<ul class="headinglist">
				<Li class="hlinks"> <a href="#" class="hlinks">ALL</a> </Li>
				<Li class="hlinks"> <a href="#" class="hlinks">Home</a> </Li>
				<Li class="hlinks"> <a href="index.html" class="hlinks">Smart</a> </Li>
				<Li class="hlinks"> <a href="#" class="hlinks">Food</a> </Li>
				<Li class="hlinks"> <a href="logInForm.php" class="hlinks">log in</a> </Li>
				<Li class="hlinks control" > <a href="control-panel.php" class="hlinks">Control-panel</a> </Li>
			</ul>

		</nav>
		<main>
			<div class="contanaerbg"></div>
			<section>
				<article>
					<hr>
					<div class="items">

						<?php
	
						

							//GET DATA
							
							
							//diapy items 


  							$stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `items` ");
							
							$stmt->execute();
							foreach($stmt as $data)
							{
								if($data['id'] !=0)
								{
									//Display the items in the card syel
									echo'
									<div class="main">
										<div class="card" id ="'.$data['id'].'" >	
											<div class="heading" id="item_name'.$data['id'].'">'.$data['heading'].'</div>
											<div class="details">'.$data['details'].'</div>
											<div class="price" id="item_sell'.$data['id'].'">$'.$data['price'].'</div>
											<button class="btn1" onclick="buy()">Buy</button>
											<button class="btn2" onclick="add_cart('.$data['id'].')">Add to Cart</button>
										</div>
										<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
												viewBox="0 0 100 100" xml:space="preserve">
												<image id="image0" width="100" height="100" x="0" y="0" href="'.$data['image0'].'"></image>
										</svg>
									</div>';
								}
							}						
						?>
						<hr>
				
					</div>
				</article>
				<article></article>
				<article></article>
			</section>
		</main>
		<footer>
			<div class="accwinicon">
				<section>
					<ul>
						<li class="coler"><a href=""><img
									src="imgs/5296500_fb_social media_facebook_facebook logo_social network_icon.png"></a>
						</li>
						<li class="coler"><a href=""><img
									src="imgs/5296765_camera_instagram_instagram logo_icon.png"></a></li>
						<li class="coler"><a href=""><img
									src="imgs/5296501_linkedin_network_linkedin logo_icon.png"></a></li>
						<li class="coler"><a href=""><img
									src="imgs/5296514_bird_tweet_twitter_twitter logo_icon.png"></a></li>
						<li class="coler"><a href=""><img
									src="imgs/291716_github_logo_social network_social_icon.png"></a></li>
						<li class="coler"><a href=""><img src="imgs/5279113_blog_medium_medium logo_icon.png"></a></li>
					</ul>
				</section>

			</div>
			<span id="copy_riten"></span>
		</footer>

	</body>
	
</html>

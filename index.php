<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta lang="EN">
		<link rel="stylesheet" type="text/css" href="css/styel.css">
		<title>osman-shoop</title>
	</head>

	<body>
		<header>
			<img src="imgs/imagination.png">
			<a href="#" tabindex="0" class="delvre">
				<span>
					<img src="imgs/location.png">
					deilvr to
					<div class="form-floating">
						<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
							<option selected class="option">natchnal</option>
							<option value="1" class="option">sudan</option>
							<option value="2" class="option">egpt</option>
							<option value="3" class="option">sudu arbia</option>
						</select>

					</div>

				</span>
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
				<Li class="hlinks"> <a href="control-panel.php" class="hlinks">Control-panel</a> </Li>
			</ul>

		</nav>
		<main>
			<div class="contanaerbg"></div>
			<section>
				<article>
					<div class="items">
		
						<?php
						
						session_start();
						//--------contion ------------
    					$username ="root";
    					$passwoerd="";
    					$database = new PDO("mysql:host=localhost;dbname=shoop items;charset=utf8;", $username,$passwoerd);
						//--------End conetion--------
						
							
				
				
						 $stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `items` ");
						 $stmt->execute();
						 foreach($stmt as $data){

						echo'<div class="main">1
							<div class="card">1
							<div class="heading" id="card1">'.$data['id'].'</div>
								<div class="heading" id="card1">'.$data['heading'].'</div>
								<div class="details">'.$data['details'].'</div>
								<div class="price" id="card1a">$'.$data['price'].'</div>
								<button class="btn1" onclick="buy()">Buy</button>
								<button class="btn2" onclick="add_cart(1)">Add to Cart</button>

							
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0"
									href="imgs/'.$data['image0'].'"></image>
									</div><br>';
									
							}
					

						
						
						
						?>
						<!--
						<div class="main">
							<div class="card">
								<div class="heading" id="card1">classSup</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price" id="card1a">$999</div>
								<button class="btn1" onclick="buy()">Buy</button>
								<button class="btn2" onclick="add_cart(1)">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0" href="data:image/png;base64,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
wWsAAAAASUVORK5CYII="></image>
							</svg>
						</div>
						<div class="main">
							<div class="card">
								<div class="heading" id="card2">lisentYour </div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price" id="card2a">$29</div>
								<button class="btn1 " onclick="buy()">Buy</button>
								<button class="btn2" onclick="add_cart(2)">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="card1b" width="100" height="100" x="0" y="0" href="imgs/warning.png"></image>
							</svg>
						</div>
						<div class="main">
							<div class="card">
								<div class="heading" id="card3">SuperMalik</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price" id="card3a">$99</div>
								<button class="btn1" onclick="buy()">Buy</button>
								<button class="btn2" onclick="add_cart(3)">Add to Cart </button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0" href="imgs/label.png"></image>
							</svg>
						</div>
						<div class="main">
							<div class="card">
								<div class="heading" id="card4">UltraFlex</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price" id="card4a">$199</div>
								<button class="btn1" onclick="buy()">Buy</button>
								<button class="btn2" onclick="add_cart(4)">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0" href="imgs/talent.png"></image>
							</svg>
						</div>
						<div class="main">
							<div class="card">
								<div class="heading">UltraFlex</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price">$29</div>
								<button class="btn1" onclick="buy()">Buy</button>
								<button class="btn2">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0"
									href="imgs/Karu_Quad_Headset.png"></image>
							</svg>
						</div>
					</div>

				</article>
				<article>
					<div class="items2">
						
						<div class="main">
							<div class="card">
								<div class="heading">UltraFlex</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price">$799</div>
								<button class="btn1">Buy</button>
								<button class="btn2">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0"
									href="imgs/self-control (1).png"></image>
							</svg>
						</div>
						<div class="main">
							<div class="card">
								<div class="heading">UltraFlex</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									break it.</div>
								<div class="price">$299</div>
								<button class="btn1">Buy</button>
								<button class="btn2">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0" href="imgs/imagination.png">
								</image>
							</svg>
						</div>
						<div class="main">
							<div class="card">
								<div class="heading">UltraFlex</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price">$599</div>
								<button class="btn1">Buy</button>
								<button class="btn2">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0" href="imgs/balance.png"></image>
							</svg>
						</div>
						<div class="main">
							<div class="card">
								<div class="heading">UltraFlex</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price">$99</div>
								<button class="btn1">Buy</button>
								<button class="btn2">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0" href="imgs/vision.png"></image>
							</svg>
						</div>
						<div class="main">
							<div class="card">
								<div class="heading">UltraFlex</div>
								<div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
									can't break it.</div>
								<div class="price">$99</div>
								<button class="btn1">Buy</button>
								<button class="btn2">Add to Cart</button>
							</div>
							<svg class="glasses" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
								viewBox="0 0 100 100" xml:space="preserve">
								<image id="image0" width="100" height="100" x="0" y="0" href="imgs/self-control.png">
								</image>
							</svg>
						</div>
						-->
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
		</footer>

	</body>
	<script type="text/javascript" src="js/javascript.js"></script>
	<?php  

	 ?>



</html>

<!doctype html>


<?php

	setcookie("recipe", "", time() - 3600);

?>


<html>
<head>
	
<link rel="stylesheet" type="text/css" href="candy.css">
<link rel="stylesheet" type="text/css" href="candyStore.css">

	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
	  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
<title>Dandy Candy Home</title>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="candy.js"></script>

	<script>
		
		function cookies(name, value) {
			var x = navigator.cookieEnabled;
		  	var y = document.cookie;
			
			
			if(x === true){
				
				document.cookie= name+ "=" +escape(value);
				
				return true;
				
				
			}else{
				alert("You need cookies enabled to purchase and download your digital purchase.");
				return false;
				
			}
			
		}
		
		
		function setCookie(c_name,value)
			{

				document.cookie=c_name+ "=" +escape(value);
			}
		
	</script>
	
	
</head>
	
	
	
	<div id="main-container">
	
	<header>
			<nav class="navbar navbar-expand-sm ">
				
				<form id="mobileCart" target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
							<input class="cart" type="image" src="checkout.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				
				<a href="Dandy_Home.html"><img id="logo" src="wrapper.png" alt="logo"></a>
				<h1 id="headerName" style="margin-left: 250px;">Dandy Candy</h1>
				  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div style="" class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="nav navbar-nav ml-auto">
					  <li class="nav-item">
						<a class="nav-link" href="Dandy_Home.html">Home</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="Dandy_About.html">About</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="Dandy_Store.php">Store</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="Dandy_Contact.php">Contact</a>
					  </li>

					<div>
					
						<!--<img  style="margin-top: 15px; margin-left: 10px; margin-right: 10px;" height="35px" src="checkout.png" alt="shopping cart">-->

						<form id="webCart" target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
							<input class="cart" type="image" src="checkout.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</div>
					</ul>
				</div>

			</nav>

		</header>	
	

<body>
	
	<button onClick="topFunction()" id="myBtn" title="Go to top">Top</button>
	
	<div class="bodyContainer">
		
		<img id="borderTop" style="padding-bottom: 4px" src="photos/Group_3_extended.png" width="1100px" alt="border">
	
		<h1 id="storeTitle">Candy Store</h1>
		
		<div class="dropDown" style="width:200px;">
		  <select name="catType" id="catType" onChange="selectedCat()">
			<option value="1">Select a Category:</option>
			<option value="2">View All</option>
			<option value="3">Taffy</option>
			<option value="4">Soft Candy</option>
			<option value="5">Hard Candy</option>
			<option value="6">Chocolate</option>
			<option value="7">Recipe Books</option>
		  </select>
		</div>
		 
		
		<div id="selection">
			
			
			<div class="taffy">
				<img class="imgSize" src="photos/storePhotos/taffyHome.jpg" alt="taffy">
				<h4>Assorted Taffy</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="8ZEGYHL2YS6YU">
					<table style="text-align: center">
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="1lb">1lb $9.99 USD</option>
						<option value="2lb">2lb $17.99 USD</option>
						<option value="5lb">5lb $39.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="taffy">
				<img class="imgSize" src="photos/storePhotos/strawberry.jpg" alt="taffy">
				<h4>Taffy Single Flavor</h4>
					<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="PQRNUX382YWCJ">
						<table>
						<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
							<option value="1lb">1lb $9.99 USD</option>
							<option value="2lb">2lb $17.99 USD</option>
							<option value="5lb">5lb $39.99 USD</option>
						</select> </td></tr>
						<tr><td><input type="hidden" name="on1" value="Choose a Flavor">Choose a Flavor</td></tr><tr><td><select name="os1">
							<option value="Grape">Grape </option>
							<option value="Lemon">Lemon </option>
							<option value="Strawberry">Strawberry </option>
							<option value="Watermelon">Watermelon </option>
						</select> </td></tr>
						</table>
						<input type="hidden" name="currency_code" value="USD">
						<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
			</div>
			
			<div class="softCandy">
				<img class="imgSize" src="photos/storePhotos/blackLicorice.png" alt="licorice">
				<h4>Black Licorice</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="PMPLS6NFN2KXU">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="1lb">1lb $12.99 USD</option>
						<option value="2lb">2lb $21.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="softCandy">
				<img class="imgSize" src="photos/storePhotos/gummyBears.png" alt="gummy bears">
				<h4>Gummy Bears</h4>
					<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="XKWGHNKHPAJ3C">
						<table>
						<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
							<option value="1lb">1lb $7.99 USD</option>
							<option value="2lb">2lb $13.99 USD</option>
						</select> </td></tr>
						</table>
						<input type="hidden" name="currency_code" value="USD">
						<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
			</div>
			
			<div class="softCandy">
				<img class="imgSize" src="photos/storePhotos/caramel.jpg" alt="caramel">
				<h4>Caramel Chews</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="NBAZVKNNUV39E">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="1lb">1lb $8.99 USD</option>
						<option value="2lb">2lb $15.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="chocolate">
				<img class="imgSize" src="photos/storePhotos/fudge.jpg" alt="fudge">
				<h4>Fudge</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="EPZJNKD3R9BBE">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="1lb">1lb $10.99 USD</option>
						<option value="2lb">2lb $19.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="chocolate">
				<img class="imgSize" src="photos/storePhotos/truffle.png" alt="truffle">
				<h4>Chocolate Truffle</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="M8EHYQZ9W2U6W">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="1lb">1lb $12.99 USD</option>
						<option value="2lb">2lb $21.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="chocolate">
				<img class="imgSize" src="photos/storePhotos/milkBalls.png" alt="milk balls">
				<h4>Malted Milk Balls</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="CA2AHCSZUWEQ2">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="1lb">1lb $7.99 USD</option>
						<option value="2lb">2lb $14.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="chocolate">
				<img class="imgSize" src="photos/storePhotos/chocolateBar.jpg" alt="chocolate bars">
				<h4>Milk Chocolate Bars</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="EBAY9M6ABZ3T8">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="5 count">5 count $12.99 USD</option>
						<option value="10 count">10 count $23.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="hardCandy">
				<img class="imgSize" src="photos/storePhotos/lolipop.jpeg" alt="lolipop">
				<h4>Assorted Lillipops</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="TDSRRKYVPKR6J">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="20 count">20 count $10.99 USD</option>
						<option value="40 count">40 count $20.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="hardCandy">
				<img class="imgSize" src="photos/storePhotos/rockCandy.jpg" alt="rock candy">
				<h4>Assorted Rock Candy</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="7SPGKA9KG779Q">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="20 count">20 count $10.99 USD</option>
						<option value="40 count">40 count $20.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="hardCandy">
				<img class="imgSize" src="photos/storePhotos/mints.jpg" alt="mints">
				<h4>Butter Mints</h4>
				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="Q69BQ3NJZ9E3N">
					<table>
					<tr><td><input type="hidden" name="on0" value="Choose a Size">Choose a Size</td></tr><tr><td><select name="os0">
						<option value="1lb">1lb $9.99 USD</option>
						<option value="2lb">2lb $18.99 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input class="purchase" type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			<div class="recipe">
				<img class="imgSize" src="photos/storePhotos/candyRecipes.png" alt="candy recipes">
				<h4>Candy Recipes<br>&lpar;Digital&rpar;</h4><p>$4.99</p>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="WNZVTRPDLEUM8">
					<input type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" onClick="return cookies('recipe','candy')">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="recipe">
				<img class="imgSize" src="photos/storePhotos/chocolateRecipes.png" alt="chocolate recipes">
				<h4>Chocolate Recipes<br>&lpar;Digital&rpar;</h4><p>$4.99</p>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="9SMXNUA4RFAD8">
					<input type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" onClick="return cookies('recipe','chocolate')">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
			<div class="recipe">
				<img class="imgSize" src="photos/storePhotos/taffyRecipes.png" alt="taffy recipes">
				<h4>Taffy Recipes<br>&lpar;Digital&rpar;</h4><p>$4.99</p>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="VWL7T2X6V2GNJ">
					<input type="image" src="http://designdefined.org/WDV351/homework/dandy_candy/bagIt.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" onClick="return cookies('recipe','taffy')">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			
		</div>
		
		<img id="borderBottom" style="padding-bottom: 4px" src="photos/Group_3_extended.png" width="1100px" alt="border">
		
	</div>
	
	
	<script>
	
		 
		
	//Get the button
			var mybutton = document.getElementById("myBtn");
		
			

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
				mybutton.style.display = "block";
			  } else {
				mybutton.style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction(){
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
	
	
	</script>
	
</body>
	
	
	
	
	
	
	
	
	<footer id="footer">
	
		<div class="row">
			
			
		   <div id="siteMap" class="column">
			  <h4 style="padding-top: 0px"><u>Site Map</u></h4>
			  <p>
				<a class="footLink" href="Dandy_Home.html">Home</a><br>
				<a class="footLink" href="Dandy_About.html">About</a><br>
				<a class="footLink" href="Dandy_Store.php">Store</a><br>
				<a class="footLink" href="Dandy_Contact.php">Contact</a>
			  
			  </p>
		  </div>
			
		  <div class="column">
			 <div id="logoSocial">
				  <img style="margin-top: 0px" src="wrapper.png" width="120px" alt="logo">
				  <p id="socialIcons">
						<a href="https://twitter.com/"><img style="padding-right: 13px" src="Twitter.png" alt="twitter"></a>
						<a href="https://www.facebook.com/"><img src="Facebook.png" alt="facebook"></a>
						<a href="https://www.instagram.com/"><img style="padding-left: 13px" src="Instagram.png" alt="instagram"></a>
				  </p>
			</div>
		  </div>
			
		  <div id="subscribe" class="column">
			<!-- Begin Mailchimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
					<div>
						<form action="https://designdefined.us7.list-manage.com/subscribe/post?u=e2cdf1de3b59ffe9d0fb8feda&amp;id=b7364b2ac0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div>
								<label for="mce-EMAIL"><h4>Subscribe to our newsletter!</h4></label><br>
								<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e2cdf1de3b59ffe9d0fb8feda_b7364b2ac0" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="signUp" class="button"></div>
							</div>
						</form>
					</div>

				<!--End mc_embed_signup-->
		  </div>
		</div>
		
	
	</footer>	
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</html>
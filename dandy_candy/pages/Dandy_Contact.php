<!doctype html>

<?php

?>

<html>
<head>
	
<link rel="stylesheet" type="text/css" href="candy.css">
<link rel="stylesheet" type="text/css" href="candyContact.css">

	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
	  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
<title>Dandy Candy Home</title>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="candy.js"></script>
	
	
	
	
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
	
	
<body onLoad="deleteCookie('recipe')">
	
	<div class="bodyContainer">

		
		<p id="askTitle">Ask us a question!</p>
	
		
		
		<div id="formcontainer">
			<form id="contact_form">


				<fieldset1>

					<div>
						<label class="contactLabel" for="memName">Name</label>
						<input id="memName" name="memName" type="text" style="width: 250px;" value="">
					</div>
					<br>

					<div>
						<label class="contactLabel" for="email">Email Address</label>
						<input id="email" name="email" type="text" style="width: 250px;" value="">
					</div>
					<br>

					<div>
						<label class="contactLabel" for="memQuestion">Question</label>
						<textarea style="resize: vertical" rows="3" cols="25" name="memQuestion" form="contact_form"></textarea>
					</div>


				</fieldset1>

				<fieldset2>

					<div>
						<input class="contactSubmit" type="submit" id="button" name="emailSubmit" value="Submit">
					</div>
				</fieldset2>


			</form>	
		</div>
		
		
		
	</div>
	
	
</body>
	
	
	
	
	
	
	
	
	<footer id="footer">
	
		<div class="row">
			
			
		   <div id="siteMap" class="column">
			  <h4><u>Site Map</u></h4>
			  <p>
				<a class="footLink" href="Dandy_Home.html">Home</a><br>
				<a class="footLink" href="Dandy_About.html">About</a><br>
				<a class="footLink" href="Dandy_Store.php">Store</a><br>
				<a class="footLink" href="Dandy_Contact.php">Contact</a>
			  
			  </p>
		  </div>
			
		  <div class="column">
			 <div id="logoSocial">
				  <img src="wrapper.png" width="120px" alt="logo">
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
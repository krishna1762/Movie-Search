<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Play List</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body class="header-collapse">

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="dummy/mylogo.png" alt="Site Title">
						<small class="site-description">All Your Favourate Movie In a Place</small>
					</a> <!-- #branding -->

					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<!--<li class="menu-item"><a href="about.html" target="blank">About</a></li>-->
							<li class="menu-item">
									<?php
									   if ( isset($_SESSION['username']) )
									   {
									   	   $dash = "<a href=\"home.php\">Dashboard</a>";
									   	   echo $dash;
									   }
									   else
									   {
									   	$dash = "<a href=\"login.php\">LogIn</a>";
									   	echo $dash;
									   }
									?>
			

							</li>
							<li class="menu-item"><a href="register.php">Sign Up</a></li>
						
							
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
				</div>
			</header> <!-- .site-header -->

			<div class="hero">
				<div class="slider">
					<ul class="slides">
						<li class="lazy-bg" data-background="dummy/slide-1.jpg">
							<div class="container">
								<h2 class="slide-title">My Play List</h2>
								<h3 class="slide-subtitle">All Favourate movie In a Place</h3>
								<p class="slide-desc">There was movie there for every free time I was in.</p>

								<a href="register.php" class="button cut-corner">Register</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="dummy/slide-2.jpg">
							<div class="container">
									<h2 class="slide-title">My Play List</h2>
									<h3 class="slide-subtitle">All Favourate Song In a Place</h3>
									<p class="slide-desc">Song for Teaching Articulation — Oral Motor Speech Movements.</p>

									<a href="register.php" class="button cut-corner">Register</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="dummy/slide-3.jpg">
							<div class="container">
									<h2 class="slide-title">My Play List</h2>
									<h3 class="slide-subtitle">All Favourate Song In a Place</h3>
									<p class="slide-desc">Exploring Language Through Song and Play.</p>

									<a href="register.php" class="button cut-corner">Register</a>
							</div>
						</li>
					</ul>
				</div>
			</div>

	



			<footer class="site-footer">
				<div class="container">
					

					<address>
						<p>Rajkiya Engineering College, Azamgarh<br><a href="http://gecazamgarh.ac.in/">UP India -276201</a> <br> <a href="mailto:info@bandname.com">playlist@gmail.com</a></p>
					</address>
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->

					<p class="copy">Copyright 2022 Myplaylist. All right reserved</p>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>

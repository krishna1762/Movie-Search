<?php
session_start();

if( ! $_SESSION['username'] )
{
	header("location:index.php");
	die();
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>My Playlist</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->


         <style>
			body {
			    font-family: "Lato", sans-serif;
			}

			.sidenav {
			    height: 100%;
			    width: 0;
			    position: fixed;
			    z-index: 1;
			    top: 0;
			    left: 0;
			    background-color: black;
			    overflow-x: hidden;
			    transition: 0.5s;
			    padding-top: 120px;
			    transition: .20s ease;
			}

			.sidenav a {
			    padding: 8px 8px 8px 32px;
			    text-decoration: none;
			    font-size: 15px;
			    color: #818181;
			    display: block;
			    transition: 0.3s
			}

			.sidenav a:hover, .offcanvas a:focus{
			    color: #fd5927;
			}

			.sidenav .closebtn {
			    position: absolute;
			    top: 0;
			    right: 25px;
			    font-size: 36px;
			    margin-left: 50px;
			}

			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}
		</style>


	</head>

	<body>
		<?php
           if(isset($_SESSION['message']))
           {
                echo "<div id='error_msg'>".$_SESSION['message']."</div>";
                unset($_SESSION['message']);
            }
        ?>
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="dummy/mylogo.png" alt="Site Title">
						<small class="site-description">PlayList Media Player</small>
					</a> <!-- #branding -->

					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="profile.php">Your Profile</a></li>
							<li class="menu-item"><a href="addfile.php">Add File</a></li>
							<!--<li class="menu-item"><a href="about.html" target="blank">About</a></li>-->
							<!--<li class="menu-item"><a href="gallery.html" target="blank">LogIn</a></li>-->
							<li class="menu-item"><a href="logout.php">Logout</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->

<!-- .testimonial-section -->

<div class="container">
<div id="mySidenav" class="sidenav">
    <h4 style="color: white;">Your Play List Here</h4>
	<a href="songaboutfamily.php">Family Movies</a>
	<a href="loverelationshipsong.php">Love/Relationship Movies</a>
	<a href="sadlove.php">Break up Movies</a>
	<a href="tutorial.php">Adults</a>
	<a href="others.php">Others</a>
</div>
<span style="position: fixed; font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

<main class="main-content">
                 <div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title" style="text-align: center;">PlayList Media Player</h2>
						<div class="row">
						<div class="col-md-3">
						 <h3>Select a List To show song list</h3>
						</div>
						<div class="col-md-6">
						    <?php
						        if(isset($_GET['showButton']))
								{
									$fileLink = $_GET['showfilelink'];
									$output="<iframe width=\"500\" height=\"305\" src=\"#\" frameborder=\"100\" allowfullscreen></iframe>";

									echo $output;

								}
						    ?>
						</div>
						 <div class="col-md-3">
						   <h2>Recently Playes Movies !</h2>
						</div>
						</div>
						</div>
					</div>
			</main>

			<br><br>

<footer class="site-footer">
				<div class="container">

					<address>
						<p>Rajkiya Engineering College<br><a href="http://gecazamgarh.ac.in/">UP India -276201</a> <br> <a href="mailto:info@bandname.com">playlist@gmail.com</a></p>
					</address>

					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->

					<p class="copy">Copyright 2014 Myplaylist. All right reserved</p>
				</div>
			</footer> <!-- .site-footer -->

		</div>




		<script>
			function openNav() {
			    document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			    document.getElementById("mySidenav").style.width = "0";
			}
        </script>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>

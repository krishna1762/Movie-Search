<?php


session_start();
if(  isset($_SESSION['username']) )
{
	header("location:home.php");
	die();
}
$db=mysqli_connect("localhost","root","","playlist");
	if(isset($_POST['login']))
	{
	    $code=mysqli_real_escape_string($db,$_POST['code']);
	    $name=mysqli_real_escape_string($db,$_POST['name']);
	    $sql="SELECT * FROM shareinfo WHERE share_code ='$code' AND value = 1 ";

	    $result=mysqli_query($db,$sql);

	    
	    if($result)
	    {
	   
	    	if( mysqli_num_rows($result)>=1)
		    {
                $_SESSION['message']="You are now Loggged In";
                $_SESSION['username']=$code;
                header("location:guest.php");
		    }
		   else
		   {
	            $_SESSION['message']="Enter Right Code";
		   }
	    }
	}



?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>LogIN</title>
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

	<body>
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="dummy/mylogo.png" alt="Site Title">
						<small class="site-description">Store Favorite Songs Here</small>
					</a> <!-- #branding -->
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
						    <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="register.php">Sign Up</a></li>
							<li class="menu-item"><a href="contact.php">Report Us</a></li>
						</ul> <!-- .menu -->
					</nav> 
				</div>
			</header> <!-- .site-header -->
			
<!-- .testimonial-section -->



<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title" style="text-align: center;">LogIn To MyPlayList </h2>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
							
							<?php
							    if(isset($_SESSION['message']))
							    {
							         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
							         unset($_SESSION['message']);
							    }
							?>
								<form method="post" action="guestlogin.php" class="contact-form">
									<input type="text" placeholder="sharing Code" name="code">
									<input type="text" placeholder="Your Name" name="name">
									<input type="submit" value="Guest LogIN" name="login">
								</form>
							</div>
						</div>
					</div>
				</div>

				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					
					<address>
						<p>Daffodil International University<br><a href="tel:354543543">Ashulia</a> <br> <a href="mailto:info@bandname.com">playlist@gmail.com</a></p>
					</address>
					
					<form action="#" class="newsletter-form">
						<input type="email" placeholder="Enter your email to join newsletter...">
						<input type="submit" class="button cut-corner" value="Subscribe">
					</form> <!-- .newsletter-form -->
					
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->
					
					<p class="copy">Copyright 2014 Myplaylist. All right reserved</p>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
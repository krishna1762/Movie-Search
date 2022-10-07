<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","playlist");
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($db,$_POST['name']);
    $username=mysqli_real_escape_string($db,$_POST['user_name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['con_pass']);  

    echo "$name";

    $query = "SELECT * FROM user WHERE username = '$username'";
    $result=mysqli_query($db,$query);
	    if($result)
	    {
	   
	    	if( mysqli_num_rows($result) > 0)
		    {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
		    }


		    
	        else
	        {
	          

		        if($password==$password2)
		        {           //Create User
		            $password=md5($password); //hash password before storing for security purposes
		            $sql="INSERT INTO user(name, username, email, password ) VALUES('$name', '$username','$email','$password')"; 
		            mysqli_query($db,$sql);  
		            $_SESSION['message']="You are now logged in"; 
		            $_SESSION['username']=$username;
		            header("location:home.php");  //redirect home page
		        }
		        else
		        {
		            $_SESSION['message']="The two password do not match";   
		        }

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
		
		<title>register</title>
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
						<small class="site-description">All fovourate movies in a place</small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<!--<li class="menu-item"><a href="about.html" target="blank">About</a></li>-->
							<!--<li class="menu-item"><a href="gallery.html" target="blank">LogIn</a></li>-->
							<li class="menu-item"><a href="register.php">Sign Up</a></li>
							<!--<li class="menu-item"><a href="blog.html" target="blank">Blog</a></li>-->
							<li class="menu-item"><a href="contact.php">Report Us</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
<!-- .testimonial-section -->



<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title" style="text-align: center;">Register For Storing Movies</h2>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
							<?php
							    if(isset($_SESSION['message']))
							    {
							         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
							         unset($_SESSION['message']);
							    }
							?>
								<form action="register.php" method="post" class="contact-form">
									<input type="text" placeholder="Your name" name="name">
									<input type="text" placeholder="User Name .." name="user_name">
									<input type="text" placeholder="Email Address.." name="email">
									<input type="Password" placeholder="Password..." name="password">
									<input type="Password" placeholder="Confirm Password..." name="con_pass">
									<input type="submit" value="submit" name="submit">
								</form>
							</div>
						</div>
					</div>
				</div>

				
			</main> <!-- .main-content -->

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
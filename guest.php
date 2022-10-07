<?php
session_start();

if( ! $_SESSION['username'] )
{
	header("location:index.php");
	die();


}

?>

<?php
  $db=mysqli_connect("localhost","root","","playlist");
$us = $_SESSION['username'];
 $sql2 = "SELECT * FROM shareinfo WHERE share_code = '$us' AND value = 1 ";
       
        $result3 = mysqli_query($db,$sql2);
        while($row=mysqli_fetch_assoc($result3))
        {
            $user_id = $row['user_id'];
            $id = $user_id;
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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
					</a> <!-- #branding -->

					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<!--<li class="menu-item"><a href="about.html" target="blank">About</a></li>-->
							<!--<li class="menu-item"><a href="gallery.html" target="blank">LogIn</a></li>-->
							<li class="menu-item"><a href="logout.php">Logout</a></li>
							<!--<li class="menu-item"><a href="blog.html" target="blank">Blog</a></li>-->
							<li class="menu-item"><a href="contact.php">Report Us</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->

<!-- .testimonial-section -->

<div class="container">
<div id="mySidenav" class="sidenav">
    <h4 style="color: white;">Your Play List Here</h4>
	<a href="songaboutfamily.php">Songs about Family</a>
	<a href="loverelationshipsong.php">Love / Relationship songs</a>
	<a href="sadlove.php">Sad, lonely, or reflective songs</a>
	<a href="tutorial.php">Tutorials</a>
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
						<hr>
						<?php
						
							    
								$sql1 ="SELECT * FROM filelist WHERE user_id = '$id' AND catagory='Love / Relationship songs'";
								$title = 'catagory';
								$link = 'file';
								$result1 = mysqli_query($db,$sql1);
							    while($row=mysqli_fetch_assoc($result1))
								{
									$sid = $row['id'];
									$title = $row['title'];
									$link = $row['file'];
									$output = "<form method=\"get\" action=\"loverelationshipsong.php\">
									<input type=\"hidden\" value=\"$link\" name=\"showfilelink\">
									<input type=\"submit\" class=\"btn btn-link\" name=\"showButton\" value=\"$title\">
									</form>
									";

								  echo "$output";
								 

							   }
							?>
						</div>
						<div class="col-md-6">
						    <?php
						        if(isset($_GET['showButton']))
								{
									$fileLink = $_GET['showfilelink'];
									$output="<iframe width=\"500\" height=\"305\" src=\"$fileLink\" frameborder=\"100\" allowfullscreen></iframe>";

									echo $output;
 
                                    $sql11 = "UPDATE filelist SET playcount = playcount+1 WHERE user_id = '$id' AND file = '$fileLink'";
                                    mysqli_query($db,$sql11);  
								}
						    ?>
						</div>
						 <div class="col-md-3">
						   <h2 style="color: blue; background: #E3310A;">You may like this songs</h2>
						   <?php
                               $sql13 ="SELECT * FROM filelist WHERE user_id = '$id' ORDER BY playcount DESC LIMIT 15";
                               	$title = 'title';
								$link = 'file';
								$result17 = mysqli_query($db,$sql13);
							    while($row=mysqli_fetch_assoc($result17))
								{
									$sid = $row['id'];
									$title = $row['title'];
									$link = $row['file'];
									$output = "<form method=\"get\" action=\"loverelationshipsong.php\">
									<input type=\"hidden\" value=\"$link\" name=\"showfilelink\">
									<input type=\"submit\" class=\"btn btn-link\" name=\"showButton\" value=\"$title\">
									</form>
									";

								  echo "$output";
								 

							   }

						   ?>
						</div>
						</div>
						</div>
					</div>
			</main>

			<br><br>



                
            <?php

                
                $userid = $id;

		               
			if(isset($_POST['submit2']))
			{
			    $titlee=mysqli_real_escape_string($db,$_POST['titlee']);
			    $sql3="DELETE FROM filelist WHERE title='$titlee' AND user_id='$userid' ";

				if (mysqli_query($db, $sql3)) {

                 echo '<script language="javascript">';
                 echo 'alert("Song Deleted Successfully")';
                 echo '</script>';

                $_SESSION['message']="Song Deleted"; 
		        $_SESSION['username']=$username;
		        header("location:loverelationshipsong.php");

			    } 


			else {
                echo '<script language="javascript">';
                echo 'alert("Please Try To Write right Song Title")';
                echo '</script>';

                $_SESSION['message']="Song Deleted"; 
		        $_SESSION['username']=$username;
		        header("location:loverelationshipsong.php");
			}

			    
			 

			} 

			mysqli_close($db);
				      
		  ?>



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

		<script>
			function openNav() {
			    document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			    document.getElementById("mySidenav").style.width = "0";
			}
        </script>

		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>

</html>

<?php
session_start();

if( ! $_SESSION['username'] )
{
    header("location:index.php");
    die();
}

?>

<?php

    $username = $_SESSION['username'];
    $db=mysqli_connect("localhost","root","","playlist");
    $sql = "SELECT * FROM user WHERE username = '$username' ";
    $result = mysqli_query($db,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $name = $row['name'];
        }

    $sql = "SELECT * FROM user WHERE username = '$username' ";
        $id = 'id';
        $result = mysqli_query($db,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
        }
    
    $sql12 = "SELECT count(user_id) AS total FROM filelist WHERE user_id = '$id' ";

    $res = mysqli_query($db, $sql12);
    $values = mysqli_fetch_assoc($res);
    $num_rows = $values['total'];


    $sql2 = "SELECT * FROM shareinfo WHERE user_id = '$id'";
       
        $result3 = mysqli_query($db,$sql2);
        while($row=mysqli_fetch_assoc($result3))
        {
            $share_code = $row['share_code'];
            $value = $row['value'];
        }
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>your profile</title>

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


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    


    <style type="text/css">
        .container{background-color:#f1f1f1;}
        .watch-card{margin-top:50px;margin-bottom:50px;}
        .watch-card > div{max-width:300px;}
        .watch-card:hover .artist-title a, .watch-card:hover .listing-tab .tab-content ul li a{color:#167ac9;}
        .listing-tab .tab-content ul li:hover{cursor:pointer;text-decoration:underline;}
        .artist-title{padding:15px;background:#fff;}
        .artist-title a{test-decoration:none;font-size:21px;font-family:arial, san-serif; color:#555;}
        .artist-title a:hover{color:#16a3de;}
        .artist-collage img{max-width:100%;}
        .artist-collage{position:relative;max-height:150px;overflow:hidden;}
        .artist-collage,.artist-collage div{padding:0;}
        span.play-mix {
            position: absolute;
            top: 38%;
            z-index: 9;
            left: 30%;
            border: 3px solid rgba(255,255,255,.25);
        }
        span.btn.play-mix-btn {
            background-color: #000;
            padding: 5px 12px;
            border:none;
            border-radius: 2px;
            box-shadow:0 0 70px rgba(255,255,255,.5);
        }
        .collage-rhs img{margin-top:-5px;}
        span.play-mix-btn:hover {
            box-shadow: 0 0 80px rgba(255,255,255,.9);
        }
        .listing-tab{
            padding:0;    
        }.related-artist .artist-next{padding-left:0;}
        .related-artist .col-md-12{padding-right:0;}
        .play-mix-btn span {
            color: #1775bc;
        }
        .related-artist img{width:100%;}
        .related-artist h3 {
            font-size: 17px;
            margin-left: 15px;
            margin-top: 9px;
        }.related-artist{overflow:hidden;padding-bottom:10px;}
        .listing-tab .tab-content ul{padding:0;margin:0;}
        .listing-tab .tab-content ul li {
            list-style-type: none;
            border-bottom: 1px solid #eee;
            padding: 8px;
        }.listing-tab .tab-content ul li {
            list-style-type: none;
            border-bottom: 1px solid #eee;
            padding: 8px;
            padding-left: 20px;
            font-size: 13px;
            color: #666;
        }.listing-tab .tab-content ul li a{text-decoration:none; color:#666;}
        .listing-tab .tab-content ul li span{display:inline-block;float:right;padding-right:10px;}
        .listing-tab .nav-tabs>li,.nav-tabs>li a:hover{margin-bottom:0;background:none;}
        .listing-tab .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{border:none;background:none;}
        .listing-tab .nav-tabs>li>a:hover{border-color:none;color:red;}
        .listing-tab .nav-tabs>li>a{border:0;padding:17px 0 7px;color:#333;margin-left:15px;}
        .listing-tab .nav-tabs>li.active>a{border-bottom:2px solid #bb0000;color:#000;}
        .listing-tab{background-color:#fff;}

        .main-navigation .menu a {
        display: block;
        position: relative;
        padding: 45px 20px;
        color: black;
        font-size: 15px;
        font-size: 0.9375em;
        font-weight: 600;
        text-decoration: none;
        -webkit-transition: .3s ease;
        transition: .3s ease;
}

    </style>


</head>


<body>
<div class="container">
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
                            <li class="menu-item"><a href="profile.php">Your Profile</a></li>
                            <li class="menu-item"><a href="addfile.php">Add File</a></li>
                            <!--<li class="menu-item"><a href="about.html" target="blank">About</a></li>-->
                            <!--<li class="menu-item"><a href="gallery.html" target="blank">LogIn</a></li>-->
                            <li class="menu-item"><a href="logout.php">Logout</a></li>
                        </ul> <!-- .menu -->
                    </nav> <!-- .main-navigation -->
                    <div class="mobile-menu"></div>
                </div>
            </header> 
    <div class="row">
        <div class="">
            <div class="artist-title col-md-12">
                <a href="">Hello, <?php echo "$name"; ?></a><br/>
                <br>
            </div>
        </div>
    </div>
    </div>
            </div>
            <br><br> 
            <div class="listing-tab col-md-6 col-md-offset-3">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                 <h4>Your Information,s</h4>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><a href="#">Total Playlist</a>    <span>5</span></li>
                            <li><a href="#">Total Song</a> <span><?php echo "$num_rows"; ?></span></li>
                            <li><a href="#">Top Played Song</a><span>
                            <?php 

                               $sql13 ="SELECT * FROM filelist WHERE user_id = '$id' ORDER BY playcount DESC LIMIT 1";
                                $title = 'title';
                                $link = 'file';
                                $result17 = mysqli_query($db,$sql13);
                                while($row=mysqli_fetch_assoc($result17))
                                {
                                    $sid = $row['id'];
                                    $title = $row['title'];
                                    $link = $row['file'];
                                    $output = "<form method=\"get\" action=\"sadlove.php\">
                                    <input type=\"hidden\" value=\"$link\" name=\"showfilelink\">
                                    <input type=\"submit\" class=\"btn btn-link\" name=\"showButton\" value=\"$title\">
                                    </form>
                                    ";

                                  echo "$output";
                                }
                              ?>
     
                            </span></li>
                            <br>
                            </ul>
                        </div>
                        </div>
                           

                </div>
            </div>
    </div>

    <div class="col-md-12">
      
    </div>

<script type="text/javascript">
    $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
</body>
</html>
<?php
    
    if(isset($_POST['submit']))
    {
        $sql13 = "SELECT count(user_id) AS total1 FROM shareinfo WHERE user_id = '$id' ";
        $res1 = mysqli_query($db, $sql13);
        $values1 = mysqli_fetch_assoc($res1);
        $num_rows1 = $values1['total1'];


        if( $num_rows1 >=1 )
        {
            $sql17 = "UPDATE shareinfo SET value = 1 WHERE user_id = '$id' ";
            mysqli_query($db,$sql17);
            echo '<script language="javascript">';
            echo 'alert("Please Collect Share Code")';
            echo '</script>';
        }

        else
        {
            $valuee = 1;
            $code = uniqid();
            $sql="INSERT INTO shareinfo(user_id, share_code, value ) VALUES('$id', '$code','$valuee' )"; 
            mysqli_query($db,$sql);
            echo '<script language="javascript">';
            echo 'alert("You Can Collect Share Code Now")';
            echo '</script>';
        }

        }



    if(isset($_POST['submit1']))
    {
        $sql13 = "SELECT count(user_id) AS total1 FROM shareinfo WHERE user_id = '$id' ";
        $res1 = mysqli_query($db, $sql13);
        $values1 = mysqli_fetch_assoc($res1);
        $num_rows2 = $values1['total1'];

        if( $num_rows2 >= 1 )
        { 
            $sql14 = "UPDATE shareinfo SET value = 0 WHERE user_id = '$id' ";
            mysqli_query($db,$sql14);
            echo '<script language="javascript">';
            echo 'alert("Sharing Now Off :(")';
            echo '</script>';
            

        }


        else
        {
            echo '<script language="javascript">';
            echo 'alert("You are Not Register For Sharing :(")';
            echo '</script>';

        }
    }

?>


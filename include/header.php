<?php 
// start the session
session_start();
//getting name of current file
$currentPage = basename($_SERVER['SCRIPT_NAME']);  
include("include/register_validation.inc.php");
include("include/login_validation.inc.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Trove Trace | Infotsav</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href="../favicon.ico"> 
   
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		      
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
		<link href="style.css" rel="stylesheet" type="text/css" />
</script>

<?php include("include/cssScript.php"); ?>
 <?php if($currentPage == "contact_us.php") {
 include("include/contactScript.php");
 } ?>

</head>
<body>
<div class="main">
  <div class="header_block">
    <div class="resize">
      <div class="header">
        <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="logo" border="0" /></a> 
		<a href="http://infotsav.org"><img style="float:right" src="images/infotsav.png"  border="0"/></a>
          <!--<p>Find the hidden key..</p> -->
		  
        </div>
        
        <div class="clr"></div>
      </div>
	  <?php if($currentPage == "index.php") { ?>
 
      <div class="container">
            
                <div class="clr"></div>
           
          
            <div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
					
                        <li>
                            <img src="images/large/7.jpg" alt="image01" />
                            <div class="ei-title">
                                <h2>Unlock the</h2>
                                <h3>TREASURE</h3>
                            </div>
                        </li>
                      
                        <li>
                            <img src="images/large/9.jpg" alt="image03"/>
                            <div class="ei-title">
                                <h2> Every Number</h2>
                                <h3>SPEAKS</h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/large/10.jpg" alt="image04"/>
                            <div class="ei-title">
                                <h2>Puzzled</h2>
                                <h3>MIND</h3>
                            </div>
                        </li>
						  <li>
                            <img src="images/large/slide4.png" alt="image05"/>
                            <div class="ei-title">
                                <h2>Key</h2>
                                <h3>TO SUCCESS</h3>
                            </div>
                        </li>
						  <li>
                            <img src="images/large/slide5.png" alt="image06"/>
                            <div class="ei-title">
                                <h2>Explore the</h2>
                                <h3>POSSIBILITIES</h3>
                            </div>
                        </li>
                       
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
						
                        <li><a href="#">Slide 1</a><img src="images/thumbs/7.jpg" alt="thumb01" id="io" /></li>
                   
                        <li><a href="#">Slide 3</a><img src="images/thumbs/9.jpg" alt="thumb03"  id="io"/></li>
                        <li><a href="#">Slide 4</a><img src="images/thumbs/10.jpg" alt="thumb04" id="io"/></li>
						<li><a href="#">Slide 5</a><img src="images/thumbs/slide4.png" alt="thumb03"  id="io"/></li>
                        <li><a href="#">Slide 7</a><img src="images/thumbs/slide4.png" alt="thumb04" id="io"/></li>
                       
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
             
            </div><!-- wrapper -->
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });
        </script>
        </div>
      </div>
	  <?php }
	  else  {
	   ?>
	  <div class="title_page">
        <h1>Just look for <span class="blue">KEYS</span> That is enough to succeed.</h1>
      </div>
	  
	  <?php } ?>
    </div>
  </div>
  <div class="menu">
    <div class="l_menu">
      <div class="r_menu">
        <ul>
          <li><a href="index.php" class="<?php if($currentPage == "index.php") { echo 'active'; } ?>"><span>Home</span></a></li>
	  <?php if (isset($_SESSION['authenticated'])) { ?>
          <li><a href="profile.php" class="<?php if($currentPage == "profile.php") { echo 'active'; } ?>"><span>My Account</span></a></li>
	   <?php } ?>	  	  
          <li><a href="details.php" class="<?php if($currentPage == "details.php") { echo 'active'; } ?>"><span>Details</span></a></li>
          <li><a href="rules.php" class="<?php if($currentPage == "rules.php") { echo 'active'; } ?>"><span>Rules</span></a></li>
	  
	     <li><a href="rank.php" class="<?php if($currentPage == "rank.php") { echo 'active'; } ?>"><span>Rank</span></a></li>
		 <li><a href="help.php" class="<?php if($currentPage == "help.php") { echo 'active'; } ?>"><span>Help</span></a></li>
         <li><a href="contact_us.php" class="<?php if($currentPage == "contact_us.php") { echo 'active'; } ?>"><span>Contact us</span></a></li>
	  <?php if (isset($_SESSION['authenticated'])) { ?>
          <li><a href="logout.php" class="<?php if($currentPage == "logout.php") { echo 'active'; } ?>"><span>Logout</span></a></li>
	   <?php } ?>	 
        </ul>
        <div class="clr"></div>
      </div>
    </div>
  </div>
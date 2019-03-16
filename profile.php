<!DOCTYPE HTML>
<!--
	ZeroFour 2.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Trove Trace | Profile</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body class="left-sidebar">

		<!-- Header Wrapper -->
			<?php
				include('header.php');
			?>

		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style2">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="4u">
									<div id="sidebar">

										<!-- Sidebar -->

											<section>
												<header class="major">
												<?php
												include("include/connection.php");
												if(isset($_SESSION['authenticated']))
												{
												?>
												<h2>Welcome <?php $email=$_SESSION["email"];
                                                                                                $temp=mysqli_query($connect,"SELECT username FROM registration WHERE email='$email'");
                                                                                                 $res=mysqli_fetch_row($temp);
                                                                                                 echo $res[0];

                                                                                                ?></h2>
												<?php }?>

												</header>
												<?php

												if(isset($_SESSION['authenticated']))
												{

												?>
											<!--	<center><a href="./question.php" class="button button-big button-icon button-icon-check">Play Game!</a></center>-->
												<?php } else {?>
												<center><a href="./login.php" class="button button-big button-icon button-icon-check">Login</a></center>
												<?php } ?>

											</section>


									</div>
								</div>
								<div class="8u skel-cell-mainContent">
									<div id="content">

										<!-- Content -->
											<article>
											<header class="major">
													<h2>Profile</h2>

												</header>
											<?php
											if(!isset($_SESSION['authenticated'])) {
												echo '<p><span style="font-size:16px; color:#3333CC; " >Please Login to view this page.</span> </p>';
											}
														else {
											$email = $_SESSION['email'];
											include("./include/current_rank.php");			 //for getting current rank
											$query4 = "SELECT username, player1, institute, email, status FROM trovetrace.registration WHERE email='$email'";
											$temp5 = mysqli_query($connect,$query4) or die("error getting info");
											$res4 = mysqli_fetch_row($temp5);
											?>
											<table border=" 0" cellspacing="4" cellpadding="1" width="100%">
											  <tr><th align="left">Username: </th>
												  <td><?php echo $res4[0]; ?></td>
											  </tr>
											  <tr><th align="left">Name: </th>
												  <td><?php echo $res4[1]; ?></td>
											  </tr>
											  <tr><th align="left">Email Address: </th>
												  <td><?php echo $res4[3]; ?></td>
											  </tr>
											  <tr><th align="left">Institute: </th>
												  <td><?php echo $res4[2]; ?></td>
											  </tr>
											  <tr><th align="left">Status: </th>
												  <td><?php if($res4[4] == 0) echo 'Active';
												  else echo 'Blocked'; ?></td>
											  </tr>
											  <tr><th align="left">Current Position/Rank: </th>
												  <td><?php echo $_SESSION['rank']; ?></td>
											  </tr>
											</table>
											<?php } ?>
											</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>

<!-- Footer Wrapper -->
			
				<footer id="footer" class="container">

					

						
							<div id="copyright">
							
								<h6>Copyright © trovetrace.infotsav.in All rights reserved. </h6><a href="https://www.facebook.com/Infotsav">Facebook </a> | <a href="http://www.infotsav.in">Infotsav</a>
								| <a href="./contact.php"> Contact Us</a>
							</div>
				</footer>
			

	</body>
</html>

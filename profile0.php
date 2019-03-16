<!DOCTYPE HTML>

<html>
	<head>
		<title>Trove Trace</title>
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

	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<header id="header">
									<div class="inner">
									
										<!-- Logo -->
											<h1><a href="#" id="logo">Trove Trace</a></h1>
										
										<!-- Nav -->
											<nav id="nav">
												<ul>
													<li class="current_page_item"><a href="index.php">Home</a></li>
													<?php 
													session_start();
													if(isset($_SESSION['authenticated']))
													{
													?>
													<li><a href="./profile.php">Profile</a></li>
													<?php } ?>
													<li>
														<a href="./details.php"><span>Details</span></a>
														
													</li>
													<li><a href="l#">Rules</a></li>
													<li><a href="#">Rank</a></li>
													<li><a href="#">Help</a></li>
													
													<?php 
													
													if(isset($_SESSION['authenticated']))
													{
													?>
													<li><a href="./logout.php">Logout</a></li>
													<?php } ?>
												</ul>
											</nav>
									
									</div>
								</header>
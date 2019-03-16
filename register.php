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
													<li class="current_page_item"><a href="./index.php">Home</a></li>
													<li>
														<a href="./details.php"><span>Details</span></a>

													</li>
													<li><a href="./rules.php">Rules</a></li>
													<li><a href="./rank.php?screen=0">Rank</a></li>
													<li><a href="./contact.php">Contact Us</a></li>
												</ul>
											</nav>

									</div>
								</header>

								<div id="banner">
			<?php
			if(isset($_SESSION['authenticated']))
			{

			?>
			<h2><strong>Welcome <?php echo $_SESSION['username']; ?>!</strong></h2>
				<?php } else { ?>
								<h2><strong>Register</strong>	</br>

								<form method="post" action="./include/register_validation.inc.php">
								<center><table>
								<tr><td><input type="textbox" name="player_1" id="player_1" class="txtbox roundcorner" placeholder="Name"></td></tr>

								<tr><td><input type="textbox" name="email" id="mail" class="txtbox roundcorner" placeholder="Email"></td></tr>

								<tr><td><input type="textbox" name="username" id="username" class="txtbox roundcorner" placeholder="Username"></td></tr>

								<tr><td><input type="textbox" name="contact" id="contact" class="txtbox roundcorner" placeholder="Contact No."></td></tr>

								<tr><td><select name="sex" id="sex" class="txtbox roundcorner">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select></td></tr>

								<tr><td><input type="textbox" name="institute" id="institute" class="txtbox roundcorner" placeholder="Institute"></td></tr>

								<tr><td><input type="textbox" name="address" id="address" class="txtbox roundcorner" placeholder="Address"></td></tr>

								<tr><td><input type="password" name="password" id="password" class="txtbox roundcorner" placeholder="Password"></td></tr>

								<tr><td><input type="password" name="re_password" id="re_password" class="txtbox roundcorner" placeholder="Re enter Password"></td></tr>

								<tr><td><div  style="padding:0.01px;">&nbsp;</div></td>
								<tr><td><center><button type="submit" class="button button-medium button-icon button-icon-check" name="register" value="           " >Register</button></center></td></tr>

								</table></form>
								<?php } ?>

						</div>



<!-- Footer Wrapper -->

				<footer id="footer" class="container">




							<div id="copyright">

								<h6>Copyright © trovetrace.infotsav.in All rights reserved. </h6><a href="https://www.facebook.com/Infotsav">Facebook </a> | <a href="http://www.infotsav.in">Infotsav</a>
							</div>
				</footer>


	</body>
</html>

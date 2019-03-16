<!DOCTYPE HTML>

<html>
	<head>
		<title>Trove Trace</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.jCounter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>


   <link rel="stylesheet" href="css/skel-noscript.css" />
  	<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
   <link rel="stylesheet" href="css/style.css"/>


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
											<!--<h1><a href="#" id="logo">Trove Trace </a></h1>-->
											<h1>Trove Trace </h1>
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
													<li><a href="./rules.php">Rules</a></li>
													<li><a href="./rank.php?screen=0">Rank</a></li>
													<li><a href="./contact.php?screen=0">Contact Us</a></li>
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

							<!-- Banner -->
								<div id="banner">
								<?php
								if (isset($login_error)) {
								echo "<p>$login_error</p>";
								}
								?>
									<?php
									if(isset($_SESSION['authenticated']))
									{
								include("include/connection.php")  ;
								$email=$_SESSION['email'];
								$qry=mysqli_query($connect,"SELECT username FROM registration WHERE email='$email'");
								$temp=mysqli_fetch_row($qry);
									?>


									<h2>Welcome <?php echo $temp[0];?></h2>
									<?php } else { ?>

									<h2><strong>Trove Trace</strong><br />
									Online Treasure Hunt</h2>
									<?php } ?>
            <?php

					if(isset($_SESSION['authenticated']))
				{
                    include("include/connection.php")  ;
                        $email=$_SESSION["email"];
                     $qry=("SELECT q_id FROM result WHERE email='$email'")  ;					//get qid;
                           $sql11=mysqli_query($connect,$qry);
                                      $temp11=mysqli_fetch_row($sql11);
                                  $_SESSION["q"]=$temp11[0];									//set qid;
                            $qry1=("SELECT curr_link FROM question WHERE q_id='$temp11[0]'"); //curr_link
                                                   $sql12=mysqli_query($connect,$qry1);
                                                             $temp12=mysqli_fetch_row($sql12);

                                            date_default_timezone_set('Asia/Calcutta');
                                           $info = getdate();
                                
                                           $date = $info['mday']."<br>";
                                          $month = $info['mon']."<br>";
                                          $year = $info['year'];
                                          $hour = $info['hours'];
                                          $min = $info['minutes'];
                                          $sec = $info['seconds'];
                                           $flag=0;
                                           if(($date==17&&$month==11&&$year==2018&&$min>=00&&$sec>=0&&$hour>=00)||($date==10&&$month==11&&$year==2016))
                        					$flag=1;
                                                     //if($sum>=1350&&$sum<1470)
                                         	$qry=mysqli_query($connect,"SELECT q_id FROM result WHERE email='$email'");
        									$result=mysqli_fetch_row($qry);
        									if($result[0]>20)
        									$flag=2;

                                                    //               $flag=1;
																	if($flag==0)
                                                                             { ?>
                                           <center><a href="#" class="button button-big button-icon button-icon-check">Hold your horses till 10:00PM 17/11/2018 </a></center>
                                             <?php }
                                            else if($flag==2)
                                             {?><center><a href="#" class="button button-big button-icon button-icon-check">Congratulations ! on completing the game</a></center>
                                              <?php }
                                             else
                                             { 
                                // $q=$_SESSION['q'];
                                // if($q==4)
						        $urll="level11.php";	

	

						  //       else if($q>20)
						  //       $urll="final.php";
						  //       else       
								// $urll="level.php";
								 ?>

	<center><a href="<?php echo $urll?>" class="button button-big button-icon button-icon-check">Play Game!</a></center> <!--sends to current level in game-->
            <?php } }else {?>
									<center><a href="./login.php" class="button button-big button-icon button-icon-check">Login</a></center>
									<center><a href="./register.php" color="#ffffff"><font color="white">Register Here</font></a></center>
									<?php }?>
								</div>

						</div>

					</div>
				</div>
			</div>

		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style1">
					<div class="inner">

						<!-- Feature 1 -->
							<section class="container box-feature1">
								<div class="row">
									<div class="12u">
										<header class="first major">
											<h2>Trove Trace</h2>

											<span class="byline"><p><align="center">Trove Trace is an online quest-oriented puzzling contest to be organized under Infotsav 2015 where you are expected to cross the hurdles of some brain cracking problems of subsequent toughness to emerge as the winner. It's one of the best brain teasing game. If solving clues to unravel a mystery give you a rush, then challenge yourself in a battle of wit and common sense and follow the instructions and clues from one link to the next to solve a series of mind boggling questions. </p>
	  <p><strong>This time we have an exciting blend of online hunt, suspense and thrill.</strong></p>
	  <p>If you think that you have got it in you to go to any length to get the thing that entices you, then this is the place waiting for you</p></span>
										</align></header>
									</div>
								</div>
								<!-- <div class="row">
									<div class="4u">
										<section>
											<span class="image image-full" ><a href="http://facbook.com/Infotsav"><img src="images/pic01.jpg" alt="" /></a></span>
											<h2>Hints</h2>

										</section>
									</div>
									<div class="4u">
										<section>

											<span class="image image-full" ><img src="images/pic02.jpg" alt="" /></span>

												<h2>Prizes</h2>
										</section>
									</div>

									<div class="4u">
										<section>
											<span class="image image-full" ><a href="http://facbook.com/Infotsav"><img src="images/pic03.jpg" alt="" /></a></span>

												<h2>Updates<h2>


										</section>
									</div>
								</div> -->

							</section>

					</div>
				</div>

			</div>

		<!-- Footer Wrapper -->

				<footer id="footer" class="container">




							<div id="copyright">

								<h6>Copyright © trovetrace.infotsav.in/ All rights reserved. </h6><a href="https://www.facebook.com/Infotsav">Facebook </a> | <a href="http://www.infotsav.in">Infotsav</a>
								| <a href="./contact.php"> Contact Us</a>
							</div>
				</footer>


	</body>
</html>

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
											<!-- Nav -->
											<nav id="nav">
												<ul>
													<li ><a href="index.php">Home</a></li>
													<?php 
													if (session_status() == PHP_SESSION_NONE) {session_start();}
													if(isset($_SESSION['authenticated']))
													{
													?>
													<li class="current_page_item"><a href="./profile.php">Profile</a></li>
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

						</div>
					</div>
				</div>
			</div>
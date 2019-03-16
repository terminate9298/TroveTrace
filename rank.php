<!DOCTYPE HTML>

<html>
	<head>
		<title>Trove Trace - Rank</title>
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
	<body class="right-sidebar">

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
								<div class="8u">

									<!-- Article list -->
										<section class="box-article-list">
											<h2 class="icon icon-news">Rank</h2>

											<!-- Excerpt -->
												<article class="box-excerpt">

													<?php
													
													if (isset($_SESSION['authenticated'])) {
      include("include/connection.php");
      $email=$_SESSION["email"];
     $qry=mysqli_query($connect,"SELECT q_id FROM result WHERE email='$email'" );
     $temp=mysqli_fetch_row($qry);

     $info = getdate();

    $date = $info['mday']."<br>";
    $month = $info['mon']."<br>";
    $year = $info['year'];
    $hour = $info['hours'];
    $min = $info['minutes'];
    $sec = $info['seconds'];
    $flag=0;
    if(($date==23&&$month==10&&$year==2016&&$min>=00&&$sec>=0&&$hour>=22)||($date==29&&$month==10&&$year==2016))
	      $flag=1;
	
	include("include/current_rank.php");
     if($temp[0]==21)
      echo '<h3>Your Rank: '.$_SESSION['rank'].'(COMPLETED)</h3>';
	 else if($flag==0)
      echo '<h3>Your Rank: '.$_SESSION['rank'].'(Contest Over)</h3>'; 
  	 else
  	  echo '<h3>Your Rank: '.$_SESSION['rank'].'</h3>';	
       }
  	  

	  include("include/connection.php");
		  $rows_per_page = 50;
			$sql7 = "SELECT * FROM result";
			$result7 = mysqli_query($connect,$sql7);
			$total_records = mysqli_num_rows($result7);
			$pages = ceil($total_records / $rows_per_page);
			mysqli_free_result($result7);



			 @$screen = $_GET['screen'] + 0;
			@$start = $screen * $rows_per_page;

			$sql6 = "SELECT username, marks, q_id email FROM result ORDER BY q_id DESC, time_taken ASC LIMIT $start, $rows_per_page";
	  		//$sql6 = "SELECT username, rank, q_id FROM result ORDER BY rank DESC LIMIT $start, $rows_per_page";
	  		$temp6 = mysqli_query($connect,$sql6);
			$i = $start + 1;

			?>

			<table width="100%" border=" 0" cellspacing="4" cellpadding="1">
			  <tr>
				<th scope="col" align="left"><h3>Username</h3></th>
				<th scope="col"><h3>Current Level</h3></th>
				<th scope="col"><h3>Rank</h3></th>
			  </tr>


						<?php

				  while($result6 = mysqli_fetch_row($temp6)) {  ?>
				  <tr>

				<td align="left"><b><?php echo $result6[0]; ?></b></td>
				<td align="center"><?php
				
				$lvl = explode("_",$result6[2]);
				if($lvl[0]==17)
					echo "Completed";
				else if($lvl[0]==15)
					echo "Dream";
				else if($lvl[0]==16)
					echo "Limbo";
				else	
				echo $lvl[0];
				
				?></td>
				<td align="center"><?php echo $i; ?></td>
			  </tr>
				  <?php	  $i++;	  }	  ?>
				  </table>
	 	 <?php
     		echo "<p><hr></p><p style='margin-left:30px'>\n";
			// let's create the dynamic links now
			if ($screen > 0) {
			  $url = "rank.php?screen=" . --$screen;
			  echo "<a href=\"$url\">Previous</a>";
			  ++$screen;
			}
			// page numbering links now
			for ($j = 0; $j < $pages; $j++) {
			  $url = "rank.php?screen=" . $j;
			  echo " | <a href=\"$url\">$j</a> | ";
			}
			if ($screen < $pages-1) {

			  $url = "rank.php?screen=" . ++$screen;
			  echo "<a href=\"$url\">Next</a>";
			}
?>
												</article>



										</section>
								</div>
								<div class="4u">

									<!-- Spotlight -->
										<section class="box-spotlight">
											<h2 class="icon icon-paper">Other Simulation Events</h2>
											<article>
												<ul>
														<li><a href="http://infotsav.in/" target="_blank"><h5> *   Stock Sutra</h5></a></li>
														
														<li><a href="http://infotsav.in/" target="_blank"><h5> *   Forex</h5></a></li>
														<li><a href="http://infotsav.in/" target="_blank"><h5> *   Job Bureau</h5></a></li>

											    </ul>


											</article>
										</section>

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

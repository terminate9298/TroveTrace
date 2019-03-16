<!DOCTYPE HTML>
<?php
   session_start();

                  include('include/check_time.inc.php');
        include('include/connection.php');
        
        $email=$_SESSION["email"];

		$qry = "select q_id from result where email='$email'";
		$res = mysqli_query($connect,$qry) or die(mysql_error());
		$row= mysqli_fetch_array($res);
		$qid = $row['0']; 
        if($qid!=1)
        {
        	$level="level1".$qid.".php";
        	header("Location: $level");
        }
        


?>
<html>
	<head>
		<title>Trove Trace - Question</title>
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
									<?php
			if(!isset($_SESSION['authenticated'])) {
					echo '<p><span style="font-size:16px; color:#3333CC; " >Please <a href="index.php">Login</a> to view this page.</span> </p>';
				}
				else
				{
					$email = $_SESSION['email'];
					$qry = "select q_id from result where email='$email'";
					$res = mysqli_query($connect,$qry) or die(mysql_error());
					$row= mysqli_fetch_array($res);
					$qid = $row[0];
					
					$qry2 = "select * from question where q_id = '$qid'";
					$res2 = mysqli_query($connect,$qry2) or die(mysql_error());
					$row2 = mysqli_fetch_array($res2);
					



		?>
			<div class="main">
					<center>
				<img width="800px" src = "images/questions/Kaecilius.jpeg"></img>
				<!--<h2>The Game is currently offline. <?php //include("include/offline.php"); ?></h2>!-->
				<h3>What is the Kaecilius?</h3>

				<form action = "check.php" method="post">
					<input type="text" name="answer" id="answer"/>
					<input hidden type="text" name="ques" id ="ques" value="<?php echo $qid;?>"/>
					<input type="submit" name="submit" value="Submit">
				</form>
				<?php
				echo '<script>console.log("Working.")</script>';
				?>
				</center>
			</div>
			<?php
				$qry = "select hint from result where email='$email'";
					$res = mysqli_query($connect,$qry) or die(mysql_error());
					$row= mysqli_fetch_array($res);
					$hint_true = $row[0];
					if($hint_true==0){


			?>

			<div style="float: right;">
				<form action = "hint_activated.php" method="post">
				<input hidden type="text" name="hint" id="answer" value="1"/>
				<input hidden type="text" name="ques" id ="ques" value="<?php echo $qid;?>"/>
				<input type="submit" name="submit" value="Hint" style="color: white;
		            border-radius: 4px;
		            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
		            background: rgb(202, 60, 60); 
		            font-size: 16px;
		            padding: 10px 20px;">
				</form>
			</div>
			
				<?php 

				}
				else
				{
					$qry = "select hint from question where q_id='$qid'";
					$res = mysqli_query($connect,$qry) or die(mysql_error());
					$row= mysqli_fetch_array($res);
					$hint = $row[0];
					echo '<script>console.log("Working hint-->'.$hint.'.")</script>';
					?>
					<div>
						<h3 style="float: center;color: #333333;text-align: center;">Hint- <?php echo $hint; ?></h3>
					</div>

					<?php
				}
				}

				 ?>
							</div>
						</div>
					</div>
				</div>
			</div>



		<!-- Hint -->

        <!--♪ I'm in a _shithole_ ♪ -->

	    <!-- End -->


				<footer id="footer" class="container">




							<div id="copyright">

								<h6>Copyright © trovetrace.infotsav.in All rights reserved. </h6><a href="https://www.facebook.com/Infotsav">Facebook </a> | <a href="http://www.infotsav.in">Infotsav</a>
								| <a href="./contact.php"> Contact Us</a>
							</div>
				</footer>


	</body>
</html>



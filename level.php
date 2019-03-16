<!DOCTYPE HTML>
<?php
   session_start();

                  include('include/check_time.inc.php');
        include('include/connection.php');

        if(!isset($_SESSION['authenticated']))header("Location: index.php");
        
        $email=$_SESSION["email"];
        $lvltime=time();
         if($_SESSION["q"])
         {
        $qry=mysqli_query($connect,"SELECT q_id FROM result WHERE email='$email'");
        $temp=mysqli_fetch_row($qry);
        $qry1=mysqli_query($connect,"SELECT curr_link FROM question WHERE q_id='$temp[0]'");
        $temp1=mysqli_fetch_row($qry1);
     	

     	date_default_timezone_set('Asia/Calcutta');
       $info = getdate();

       $date = $info['mday'];
      $month = $info['mon'];
      $year = $info['year'];
      $hour = $info['hours'];
      $min = $info['minutes'];
      $sec = $info['seconds'];
       $flag=0;
       if(($date==23 && $month==10&&$year==2016&&$min>=00&&$sec>=0&&$hour>=22)||($date==10&&$month==11&&$year==2016))
			$flag=1;

		if($flag==0)
            header("Location: index.php");
                                            
                                                   

	?> 		
  <?php
	}
       @include("check.inc.php");

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
			if(!isset($_SESSION['authenticated'])) 
				{
					echo '<p><span style="font-size:16px; color:#3333CC; " >Please <a href="index.php">Login</a> to view this page.</span> </p>';
				}
				else
				{
					$email = $_SESSION['email'];
					$qry = "select q_id from result where email='$email'";
					$res = mysqli_query($connect,$qry) or die(mysqli_error());
					$row= mysqli_fetch_array($res);
					$qid = $row[0];
					$qry2 = "select * from question where q_id = $qid";
					$res2 = mysqli_query($connect,$qry2) or die(mysqli_error());
					$row2 = mysqli_fetch_array($res2);
					
					$sql22 = "SELECT src FROM question WHERE q_id=$qid";
					$temp22 = mysqli_query($connect,$sql22);
					$result22 = mysqli_fetch_row($temp22);

					$sql01 = "SELECT txt FROM question WHERE q_id=$qid";
					$temp01 = mysqli_query($connect,$sql01);
					$result01 = mysqli_fetch_row($temp01);
					$lvltime=time();
					$q=$qid;
					$_SESSION['q']=$q;
					 
					if($qid==4)
					{
					 	if(isset($_POST['answer'])) { ?>
						<script type="text/javascript"> 
       						alert("Incorrect Answer Try Again!");
							window.location.href="level4.php";
					 	</script>
					 	<?php } else
					 	{
		 		          	$sql2 = "SELECT link FROM question WHERE q_id='$q'";
							$temp2 = mysqli_query($connect,$sql2);
							$result2 = mysqli_fetch_row($temp2);
							//for rank
								mysqli_query($connect,"UPDATE question SET attend_count =attend_count+1 WHERE q_id='$q'");
								$prq = explode("_",$_SESSION['q']);
								$qa="q".$q;
								$new_level = $q+1;
								$q = $new_level;
								$_SESSION["q"]=$q;
								
								$lvltime=$_GET['t'];
							 	$lvltime=time()-$lvltime;

								
								$query=mysqli_query($connect,"UPDATE result set $qa='$lvltime' where email='$email'");


								 $time = $_SERVER['REQUEST_TIME'];
								$time2 = 10000000000 - $time;
								 $marks = $q*$time2;
								 $rank = $q*2;
								
								mysqli_query($connect,"UPDATE result SET marks = '$marks', q_id = '$q', rank = '$rank', time_taken = '$time' WHERE email='$email'");
						        
						        echo $q;
						        if($q==4)
						        header("Location: level4.php");	

	

						        else if($q>20)
						        header("Location: final.php");
						        else       
								header("Location: level.php");  //change

					 	}

					}





					if($qid>20)
					{	
						?><script type="text/javascript"> 
       alert("Really!! you loved it that much!");
          window.location.href="index.php";
          </script>  <?php }
					if($qid==1)
					{	$t=$lvltime;
						$qa='q'.'0';
						$query=mysqli_query($connect,"UPDATE result set $qa='$t' where email='$email'");
					}		
					
     				

		?>
		<center><h3>Question <?php echo $qid; ?></h3></center>
			<center><h1><?php if($result01[0]!="")
				echo $result01[0];
			?> </h1></center> </br>

			<center>
			<?php 
			if($result22[0]!="")
			{
			?>
			<img width="800px" src = "<?php echo $result22[0];?>"></img>
			<br>
			<br>
			<?php }
		?>
			<!--<h2>The Game is currently offline. <?php //include("include/offline.php"); ?></h2>!-->
			<form action = "check.inc.php?t=<?php echo $lvltime; ?>" method="post">
				<input type="text" name="answer" id="answer"/>
				<input hidden type="text" name="ques" id ="ques"value="<?php echo $qid;?>"/>
				<input type="submit" value="submit"/>
			</form>
			</center>
				<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>



		<!-- Hint -->

        <!-- The celebration  -->
<!--
Thank You for coming here.
Your Clue: Did you checked the image name?
	   give it a try. :) 
-->
	            <!-- End -->


				<footer id="footer" class="container">




							<div id="copyright">

								<h6>Copyright © trovetrace.infotsav.in All rights reserved. </h6><a href="https://www.facebook.com/Infotsav">Facebook </a> | <a href="http://www.infotsav.in">Infotsav</a>
								| <a href="./contact.php"> Contact Us</a>
							</div>
				</footer>


	</body>
</html>


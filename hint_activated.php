<!DOCTYPE HTML>
<?php
   session_start();

                  include('include/check_time.inc.php');
        include('include/connection.php');

        if(!isset($_SESSION['authenticated']))
        	{
        		// alert('not authencticated');
        		header("Location: index.php");
        }
        $email=$_SESSION["email"];
        $lvltime=time();
         
       // @include("check.inc.php");



								
			if(!isset($_SESSION['authenticated'])) 
				{
					// alert('not authenticated');
					echo '<p><span style="font-size:16px; color:#3333CC; " >Please <a href="index.php">Login</a> to view this page.</span> </p>';
				}
				else
				{
					
					if(isset($_POST['submit'])){
						$qid=$_POST['ques'];
					$hint=$_POST['hint'];
					$qry = "UPDATE result SET hint='$hint' where email='$email'";
						$res = mysqli_query($connect,$qry) or die(mysqli_error());
						
						$level="level1".$qid.".php";
        				header("Location: $level");

					

					}
					

				} 
				?>
							


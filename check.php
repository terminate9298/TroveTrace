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
        echo '<script>console.log("Executing here")</script>';
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
       $flag=1;
       if(($date==23 && $month==10&&$year==2016&&$min>=00&&$sec>=0&&$hour>=22)||($date==10&&$month==11&&$year==2016))
			$flag=1;

		// if($flag==0)
  //           header("Location: index.php");
     
	}
       // @include("check.inc.php");


echo '<script>console.log("Executing here")</script>';
								
			if(!isset($_SESSION['authenticated'])) 
				{
					// alert('not authenticated');
					echo '<p><span style="font-size:16px; color:#3333CC; " >Please <a href="index.php">Login</a> to view this page.</span> </p>';
				}
				else
				{
					
					if(isset($_POST['submit'])){
						$qid=$_POST['ques'];
					$answer=$_POST['answer'];
					$answer = strtolower(preg_replace('/\s+/','',$answer));
					$hash = md5($answer);
					$qry = "select answer from question where q_id='$qid'";
					$res = mysqli_query($connect,$qry) or die(mysql_error());
					$row= mysqli_fetch_array($res);
					$answer_hash=$row['answer'];
					echo '<script>console.log("Executing here")</script>';

					if( (strcmp($answer_hash,$hash)==0)){
						echo '<script>console.log("COrrect")</script>';
						$qry = "SELECT retry,score,hint FROM result where email='$email'";
						$res = mysqli_query($connect,$qry) or die(mysql_error());
						$result= mysqli_fetch_array($res);
						$retry = $result['retry'] ;
						$score = $result['score'] ;
						$hint = $result['hint'] ;
						$increment_score = ($retry *10) - ($hint *20);
						if($increment_score>0){
							$score = $score+$increment_score;

						}
						$qid=$qid+1;
						$qry = "UPDATE result SET q_id='$qid',retry='10',score='$score',hint='0' where email='$email'";
						$res = mysqli_query($connect,$qry) or die(mysqli_error());
						
						$level="level1".$qid.".php";
        				 header("Location: $level");
        				

					}
					else{
						echo '<script>console.log("Your Code doennot work.")</script>';
						$qry = "SELECT retry FROM result where email='$email'";
						$res = mysqli_query($connect,$qry) or die(mysqli_error());
						$result= mysqli_fetch_array($res);
						$retry = $result['retry'] - 1;
						$qry = "UPDATE  result SET retry='$retry' WHERE email='$email'";
						$res = mysqli_query($connect,$qry) or die(mysqli_error());
						echo '<script>console.log("Your hash is '.$hash.'")</script>';
						echo '<script>console.log("Your answer_hash is '.$answer_hash.'")</script>';
						$level="level1".$qid.".php";
						header("Location: $level");

					}

					}
					

				} 
				?>
							


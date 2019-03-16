<?php

session_start();
include("connection.php");

if(isset($_SESSION["email"]))
	$email = $_SESSION["email"];
else
	$email = "";

if(!isset($_SESSION['q'])&&isset($_SESSION["email"])){

	$sql1 = "SELECT * FROM result WHERE email='$email'";
	$temp1 = mysqli_query($connect,$sql1);
	$result1 = mysqli_fetch_array($temp1);
	$_SESSION['q'] = $result1["q_id"];
	if(!$result1["email"]!="")
	  {
	  $qry1 = mysqli_query($connect,"select * from registration where email='$email'");
	  $ar1 = mysqli_fetch_array($qry1);
	  $insti = $ar1["institute"];
	  $q=1;
	  $qry3 = mysqli_query($connect,"insert into result(email,institute,marks,rank,q_id,time_taken) values('$email','$insti',0,0,'$q',0)")or die("WRONG RESULT");

	  $_SESSION['q'] = $q;
	  }
	}

if(array_key_exists('ques',$_POST)) {
           date_default_timezone_set('Asia/Calcutta');
        date_default_timezone_set('Asia/Calcutta');
        $info = getdate();
        $date = $info['mday'];
        $month = $info['mon'];
        $year = $info['year'];
        $hour = $info['hours'];
        $min = $info['minutes'];
        $sec = $info['seconds'];
       $flag=0;
       $sum=($date-16)*1440+$hour*60+$min;
// if($sum>=1350&&$sum<1470)
                $flag=1;
                if($flag==0)
                { ?>
                  <script type="text/javascript">
                  alert("contest finished");
                  window.location.href="rank.php";

                  </script>
                  <?php die();
                }
        
        
        
 //$answer = sha1(strtolower(str_replace(" ", "", $_POST['answer'])));for whitespace
        if($q!=1)
	$answer = (strtolower(preg_replace('/\s+/', '', $_POST['answer'])));
	//$answer=sha1(strtolower($_POST['answer']));
	$q = $_SESSION['q'];

	$sql = "SELECT answer FROM question WHERE q_id='$q'";
	$temp = mysqli_query($connect,$sql);
	$result = mysqli_fetch_row($temp);



	$sql13 = "SELECT status FROM registration WHERE email='$email'";
	$temp13 = mysqli_query($connect,$sql13);
	$res13 = mysqli_fetch_row($temp13);
	


	if($res13[0] == 1){
	header("location:logout.php");
	}


	else {
		if($q==13)
			$answer=NULL;
		//if($q!=8)
		//{$answer=md5($answer);}

	if($result[0] == $answer){
          
		  
          $sql2 = "SELECT link FROM question WHERE q_id='$q'";
	$temp2 = mysqli_query($connect,$sql2);
	$result2 = mysqli_fetch_row($temp2);
	//for rank
		mysqli_query($connect,"UPDATE question SET attend_count =attend_count+1 WHERE q_id='$q'");
		$prq = explode("_",$_SESSION['q']);
		$new_level = $prq[0]+1;
		$q = $new_level;
		$_SESSION["q"]=$q;
		$time = $_SERVER['REQUEST_TIME'];
		$time2 = 10000000000 - $time;
		$marks = $q*$time2;
		$rank = $q*2;
		mysqli_query($connect,"UPDATE result SET marks = '$marks', q_id = '$q', rank = '$rank', time_taken = '$time' WHERE email='$email'");
               
		header("Location:".$result2[0]);  //change

		}
	else{
		$error_question = "<h2>Incorrect Answer</h2>";
		}
		}
	}

?>

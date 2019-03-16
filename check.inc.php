<?php

session_start();
include("include/connection.php");

if(isset($_SESSION["email"]))
	$email = $_SESSION["email"];
else
	$email = "";

if(isset($_SESSION["email"])){
	

	$sql1 = "SELECT * FROM result WHERE email='$email'";
	$temp1 = mysqli_query($connect,$sql1);
	$result1 = mysqli_fetch_array($temp1);
	$_SESSION['q'] = $result1["q_id"];
	if(!$result1["email"]!="")
	  {
	  $qry1 = mysqli_query($connect,"select * from registration where email='$email'");
	  $ar1 = mysqli_fetch_assoc($qry1);
	  $insti = $ar1["institute"];
	  $q=1;
	  $username=$ar1["username"];
	  $qry3 = mysqli_query($connect,"INSERT INTO result(email,institute,username,marks,rank,q_id,time_taken) values('$email','$insti','$username',0,0,'$q',0)")or die("Cannot insert into result");

	   $_SESSION['q'] = $q; 
	  }
	}
	  $_SESSION['q'];

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

      $q = $_SESSION['q'];  
      if(!isset($_POST['answer']))$_POST['answer']="";
      
 // $answer = sha1(strtolower(str_replace(" ", "", $_POST['answer'])));
 //      if($_SESSION['q']!=11)
     if($q!=1)
	//$answer = preg_replace("/\s+/", "", $_POST['answer']);
	$answer=strtolower(preg_replace("/\s+/", "", $_POST['answer']));

	$q = $_SESSION['q'];

	$sql = "SELECT answer FROM question WHERE q_id='$q'";
	$temp = mysqli_query($connect,$sql);
	$result = mysqli_fetch_row($temp);

	$sql21 = "SELECT answer1 FROM question WHERE q_id='$q'";
	$temp21 = mysqli_query($connect,$sql21);
	$result21 = mysqli_fetch_row($temp21);

	$sql13 = "SELECT status FROM registration WHERE email='$email'";
	$temp13 = mysqli_query($connect,$sql13);
	$res13 = mysqli_fetch_row($temp13);
	


	if($res13[0] == 1){
	header("location:logout.php");
	}


	else {
		// if($q==13)
		// 	$answer=NULL;
		//if($q!=8)
		{
			
			//$answer=md5($answer);
			// echo $answer ."<br>".$result[0];
		}
		

	if(($result[0] == $answer)||($result21[0]==$answer)||(empty($_POST['answer']) && $q==1)){
          
		  
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
	else{ 
		?>
		 	
			<script type="text/javascript"> 
       		alert("Incorrect Answer Try Again!");

	       	<?php if($q==4) { ?>
	       	window.location.href="level4.php";
	       	


	        <?php }  else if($q>20) { ?>
	        window.location.href="final.php";
	        
	        <?php } else { ?>       
			window.location.href="level.php"; 
	          
          </script>  <?php }
		}
		}
	}

?>

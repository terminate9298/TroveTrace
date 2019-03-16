
<?php
  session_start();
  include("include/connection.php");
  $email=$_SESSION["email"];
  if(!isset($_SESSION['authenticated']))header("Location: index.php");
  $qry = "select q_id from result where email='$email'";
					$res = mysqli_query($connect,$qry) or die(mysql_error());
					$row= mysqli_fetch_array($res);
					$qid = $row[0];
					
  if($qid<=20)
 {
 	
       ?><script type="text/javascript"> 
       alert("focus more on the questions instead of hacking us !");
          window.location.href="level.php";
          </script>  <?php 

 }     
 else { 
		mysqli_query($connect,"UPDATE question SET attend_count =attend_count+1 WHERE q_id=20");
		$prq = explode("_",$_SESSION['q']);
		$new_level = 21;
		$q = 21;
		$_SESSION["q"]=$q;
		$time = $_SERVER['REQUEST_TIME'];
		$time2 = 10000000000 - $time;
		$marks = $q*$time2;
		$rank = $q*2;
		mysqli_query($connect,"UPDATE result SET marks = '$marks', q_id = '$q', rank = '$rank', time_taken = '$time' WHERE email='$email'");
		header("Location: index.php");
}
?>
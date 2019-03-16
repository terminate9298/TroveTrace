<?php
	if (array_key_exists('register', $_POST)) {
	
		include("./connection.php");
		
		$player1=$_POST['player_1'];
		$sex = $_POST['sex'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$enc_pwd=md5($password);
		$re_password = $_POST['re_password'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$institute = $_POST['institute'];
		$address = $_POST['address'];
		$error = '';
		
		$temp = mysqli_query($connect, "SELECT s_no FROM registration WHERE email='$email' OR username='$username'");
		if(mysqli_num_rows($temp) > 0){
			$error = '<font color="red">Email or Username is already in use</font>';
			}
		else if($password != $re_password) {
			$error = '<font color="red">Password Doesn\'t Match</font>';
			}
		else if($player1 == NULL || $sex == NULL || $username == NULL || $password == NULL || $contact == NULL || $email == NULL || $institute == NULL || $address == NULL){
			$error = '<font color="red">* Required field cann\'t be left blank</font>';
			}
		else{
			$time = $_SERVER['REQUEST_TIME'];
			$sql="INSERT INTO registration SET player1='$player1', sex='$sex', username='$username', password='$enc_pwd', contact='$contact', email='$email', institute='$institute', address='$address'";
			$sql1 = "INSERT INTO result SET username='$username', institute='$institute', time_taken='$time',email='$email',retry=10,hint=0 ,q_id=1";
			if(mysqli_query($connect, $sql) && mysqli_query($connect, $sql1)) {
			$error = '<font color="red">Successfully registered</font>';
			echo '<script type="text/javascript">alert("You are Successfully registered at Infotsav"); window.location.href="../login.php";</script>';
			}
			else
			$error = '<font color="red">Error in inserting into database. Contact Site Administrator</font>'.mysqli_error();
						
		}
		echo $error;
			
	}
?>
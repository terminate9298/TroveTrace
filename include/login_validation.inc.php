<?php 
//login validation
if (array_key_exists('login', $_POST)) {
		
				include("include/connection.php");
				$mail = $_POST['username'];
				if(strstr($mail,'@'))
				{
					$id=explode("@", $mail);
						
					if($id[1]=="gmail.com")
					{
						$email=str_replace(".", "", $id[0]);
						$mail=$email."@gmail.com";
						
					}
					
				}
				
				$sql="SELECT username, password FROM registration WHERE username='$mail' or email='$mail'";
				$temp=mysql_query($sql) or die(mysql_error());
				
				if(mysql_num_rows($temp) == 0) {
					include("include/infotsav_db.php");
					$sql1="SELECT * FROM infotsav.users WHERE username='$mail' or email='$mail'";
					$temp1=mysql_query($sql1) or die("error2");
					
					if(mysql_num_rows($temp1) == 0) {
						$login_error = '<font color="red">You are not registered at Infotsav. <a href="http://www.infotsav.org/registration.php" target="_blank">Click here</a> to register first</font>';
					}
					else {
						
						$result1 = mysql_fetch_row($temp1);
						//die($result1[6]."sad");
						  if(($_POST['password'])!=$result1[6])
						  	{
						  	$login_error = '<font color="red">Incorrect password</font>';
						  	}
						   if(($_POST['password'])==$result1[6])
						   {
						    //echo $result1[0];
						    $uid = $result1[0];
							$player1 = $result1[1];
							$institute = $result1[2];
							$username = $result1[5];
							$sex = $result1[7];
							$contact = $result1[9];
							$email = $result1[10];
							$address = $result1[11];
							$address = str_replace("'", " ", $address);
							$password = sha1($_POST['password']);
							//$eid='Trove Trace';
							
							//$query2="SELECT count(*) FROM infotsav.reg WHERE eid='$eid' AND id='$uid'";
							$query2="SELECT count(*) FROM infotsav.users WHERE id='$uid'";
							$res1=mysql_query($query2) or die("23".mysql_error());
							$ro1=mysql_fetch_row($res1);
							//die($res1);
							if($ro1[0] == 0)
								{    
										$login_error = '<font color="red"><a href="http://www.infotsav.org" target="_blank">Click here </a>to register for Trove Trace at Infotsav page</font>';
								}
							else {							
							include("include/connection.php");
							$sql3 = "INSERT INTO trovetrace.registration (player1, sex, username, password, contact, email, institute, address) VALUES ('$player1', '$sex', '$username', '$password', '$contact', '$email', '$institute', '$address')";
							mysql_query($sql3) or die("Insertion Error1 ".mysql_error());
	//						$sql4 = "INSERT INTO trovetrace.result SET username='$username', institute='$institute', time_taken='$time'";
	//						mysql_query($sql4) or die("Insertion Error2 ".mysql_error());
							$_SESSION['authenticated'] = 'trove_trace';
							$_SESSION['username']=$username;
							//changing current login flag to 1
							$sql1 = "UPDATE trovetrace.registration SET current_login=1 WHERE username='$username'";
							mysql_query($sql1);
							header("location:profile.php?msg=offline");
								}
							}
						  
						}
					
				}
				else{
					$result = mysql_fetch_row($temp);
					$_SESSION['username']=$result[0];
					$username = $_SESSION['username'];
					
					if($result[2] == 1) {
						$login_error = '<font color="red">You are blocked. Contact admin</font>';
						}
						
					else if($result[1] != sha1($_POST['password'])){
						$login_error = '<font color="red">Incorrect34 password</font>';
						}
					else if($result[0] == $username && $result[1] == sha1($_POST['password'])) {
						$_SESSION['authenticated'] = 'trove_trace';
						//changing current login flag to 1
						$sql1 = "UPDATE trovetrace.registration SET current_login=1 WHERE username='$username'";
						mysql_query($sql1);
						header("location:profile.php?msg=offline");
						}
					}
		}

?>

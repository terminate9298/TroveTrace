<?php
//login validation
	session_start();
	if (array_key_exists('login', $_POST)) 
	{

		include("./connection.php");
		if(empty($_POST['email']))
	    {
			?><script type="text/javascript">
			alert("Enter a valid a email address");
			window.location.href="http://trovetrace.infotsav.in/login.php";
			</script>
			<?php
	    }
		if(empty($_POST['password']))
	    {
			?><script type="text/javascript">
			alert("Enter a valid a password");
			window.location.href="http://trovetrace.infotsav.in/login.php";
			</script>
			<?php
	    }

		$email = $_POST['email'];
	          
	    //$_POST['password']=md5($_POST['password']);
		$sql="SELECT email, password, status FROM registration WHERE email='".$email."'";
		$temp=mysqli_query($connect,$sql);
		$result=mysqli_fetch_assoc($temp);
		
		if(mysqli_num_rows($temp) == 0) 
		{
			
	        ?>
				<script type="text/javascript">
				alert("You are not registered at Infotsav");
				window.location.href="http://trovetrace.infotsav.in";
				</script>
			<?php
		}
		else
		{

			$sql="SELECT email, password, status FROM registration WHERE email='".$email."'";
			$temp=mysqli_query($connect,$sql);
			$result = mysqli_fetch_assoc($temp);

			$_SESSION['email']=$result['email'];
			$email = $_SESSION['email'];

			if($result['status'] == 1) 
			{
				$login_error = '<font color="red">You are blocked. Contact admin</font>';
			}else if($result['password'] != md5($_POST['password']))
			{ 
	            ?>
	                <script type="text/javascript">
					alert("Incorrect Password");
					window.location.href="http://trovetrace.infotsav.in/login.php";  //change
					</script>
				<?php 
				die();
			}else if($result['email'] == $email && $result['password'] == md5($_POST['password'])) 
			{
				
				$_SESSION['authenticated'] = 'trove_trace';
				//echo $_SESSION['authenticated'];
				//changing current login flag to 1
				$sql1 = "UPDATE trovetrace.registration SET current_login=1 WHERE email='".$email."'";
				mysqli_query($sql1);
				header("location:../index.php");
			}
		}
	}

	?>

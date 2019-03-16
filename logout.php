<?php
session_start();
include("./include/connection.php");
			//changing current login flag back to 0
			$email= $_SESSION['email'];
			$sql1 = "UPDATE registration SET current_login=0 WHERE email='$email'";
			mysqli_query($connect,$sql1);
			// empty the $_SESSION array
			$_SESSION = array();
			
			// invalidate the session cookie
			if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-86400, '/');
			}
			// end session and redirect
			session_destroy();
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=index.php\">";
?>
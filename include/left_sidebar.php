    <div class="left">
	<?php 
			if(isset($_SESSION['authenticated']))
			{
			
			?>	
			<h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
				
			<form method="post" action="logout.php" name="logout">
			&nbsp;&nbsp;&nbsp;<input type="image" src="images/logout.png" value="Log Out" name="logout" height='20px' width='60px'/>
			</form>
			 <p>&nbsp;</p>
			<h2 class="services">Play Game..</h2>
     
      <p>
	   <!--<a href="question.php" class="services" onclick="window.open(this.href, 'popupwindow', 'width=1024,height=768,scrollbars,resizable'); return false;" >-->
	   <a href="question.php" class="services"><img src="images/play.png" alt="Play Game" title="Play game" width="236" height="200" border="0"/></a></p>
			
				<?php } else { ?>
				<h2>Login</h2>
				<?php
					if (isset($login_error)) {
					echo "<p>$login_error</p>";
					}
					?>
				<form action="" method="post" name="login">
					<table width="100%" border=" 0" cellspacing="4" cellpadding="1">
					  <tr>
						<th scope="row">Username:</th>
						<td><input type="text" name="username" size="20"></td>
					  </tr>
					  <tr>
						<th scope="row">Password:</th>
						<td><input type="password" name="password" size="20"></td>
					  </tr>
					  <tr>
						<th scope="row">&nbsp;</th>
						<td><input type="submit" style="background-image: url(images/login.png); background-color:Transparent;background-size: 100%;border-style:none;height:22px" name="login" value="                   "></td>
					  </tr>
					</table>
				</form>
			
				<p>Login with Infotsav ID<br />Or <a href="http://www.infotsav.org/registration.php">Register Here</a> </p></li>
				<?php } ?>

      <p>&nbsp;</p>
      
      <div class="latest_updates">
        <h2>Latest Updates</h2>
        <p class="time">03.11.12</p>
        <p>Trials are over and results will be declared soon<?php include("include/offline.php"); ?><br>Check out <a href="http://www.facebook.com/pages/Trove-Trace/352871024802655" target="_blank" >Facebook Page</a> for Hints.<br />
		
		<br />
	<?php include("include/prize.php"); ?>
          </p>
       
       </div>
    </div>
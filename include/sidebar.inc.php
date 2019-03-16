<!-- start sidebar one -->
	<div id="sidebar1" class="sidebar">
		<ul>
			<li id="recent-posts">
			<?php 
			if(isset($_SESSION['authenticated']))
			{
			
			?>	
			<h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
				<ul>
				<li>
			<form method="post" action="" name="logout">
			<input type="submit" value="Log Out" name="logout" />
			</form>
			</li>
				<?php } else { ?>
				<h2>Login Here !</h2>
				<ul>
				<li>
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
						<td><input type="submit" name="login" value="Log in"></td>
					  </tr>
					</table>
				</form>
				
				
				</li><li>
				
				<p><a href="register.php">New User? Register Here</a></p></li>
				<?php } ?>
					<li>
						<h3><a href="#">LOREM IPSUM DOLOR SIT </a></h3>
						<p>Donec vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. </p>
					</li>
					<li>
						<h3><a href="#">FERMENTUM NIBH IN AMIT </a></h3>
						<p>Donec vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. </p>
					</li>
				</ul>
			</li>
			<li></li>
		</ul>
	</div>
	<!-- end sidebar one -->
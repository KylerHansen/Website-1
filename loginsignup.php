<?php require "head.php";?>
<link href="stylesphp/loginsignup.css" rel="stylesheet" type="text/css"/>
</head>
<?php require "navbar.php";?>

<?php require "topadspace.php";?>
	

<div class="content">
	
	<div class="colA">

	</div>

		
	<div class="colB">
	<h1 id="title">Sign In </h1>
	<?php
		if(isset($_SESSION['userId'])){
			echo '<p id="title">You have successfully logged in.</p>';
			}
		else{
			echo'<p id="title">You have successfully logged out.</p>';
			}
	?>
	
	<div class="login">
			<form autocomplete="on" method="post" action="includes/login.inc.php">
				<div class="text">
					Email:</br>
					<input id="box" type="email" name="mail" autofocus required>
					</br></br>
					Password:</br>
					<input id="box" type="password" name="pwd" required>
				</div>
				<p id="forgot"><a href="passreset.php">Forgot Password?</a></p>
				</br></br>
				INSERT reCAPTCHA HERE
				</br>
				</br>
				<input id="submit" type="submit" target="_self" method="post" value="Log In" name="login-submit">
			</form>
			<!-- <form action="includes/logout.inc.php" method="post">
				<input id="submit" type="submit" method="post" value="Log Out" name="logout-submit">
			</form>-->
	</div>		
	<p id="clickhere">Don't have an account? <a href="register.php">Click here</a> to sign up.
	</br> </p>
	</div>

	<div class="colC">
	
	</div>	
</div>
<?php require "bottomadspace.php";?>
<?php require "footer.php";?>
<script src="scripts/navbar.js"></script>


</body>
</html>


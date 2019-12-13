<?php require "head.php";?>
<link href="stylesphp/passreset.css" rel="stylesheet" type="text/css"/>
</head>
<?php require "navbar.php";?>

<?php require "topadspace.php";?>

<div class="content">
	
	<div class="colA">
	
	</div>

		
	<div class="colB">
	<h1>Reset Password:</h1>
	<form method="post" autocomplete="on" action="<!--PHP Code Here-->">
	Email:</br>
	<input id="email" type="email" name="email" required>
	</br>
	</br>	
	INSERT reCAPTCHA HERE
	</br>
	</br>
	<input id="submit" type="submit" target="_self" method="post" value="Send Email">
	</form>
	
	</div>

	<div class="colC">
	
	</div>	
</div>
<?php require "bottomadspace.php";?>
<?php require "footer.php";?>
<script src="scripts/navbar.js"></script>
</body>
</html>


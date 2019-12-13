<?php require "head.php";?>
<link href="stylesphp/feedback.css" rel="stylesheet" type="text/css"/>
</head>
<?php require "navbar.php";?>

<?php require "topadspace.php";?>

<div class="content">
	
	<div class="colA">
	
	</div>

		
	<div class="colB">
	<h1>Contact Us:</h1>
	<h3> Please let us know if you enjoy using Swapp.com!</h3>
	<form method="post" autocomplete="on" action="<!--PHP Code Here-->">
	Name:</br>
	<input type="text" name="name" autofocus required>
	</br></br>
	Email:</br>
	<input type="email" name="email" required>
	</br></br>
	Comments:</br>
	<textarea name="feedback" required style="width:90%; height:200px"></textarea>
	</br></br></br>
	INSERT reCAPTCHA HERE
	</br>
	</br>
	<input id="submit" type="submit" target="_self" method="post">
	</form>
	
	</div>

	<div class="colC">
	
	</div>	
</div>
<?php require "bottomadspace.php";?>
<?php require "footer.php";?>
<!-----------------------------------Java Scripts-------------------------------------------------->
<script src="scripts/navbar.js"></script>
</body>
</html>


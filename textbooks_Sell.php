<?php require "head.php";?>
<link href="stylesphp/textbook_sell.css" rel="stylesheet" type="text/css"/>
</head>
<?php require "navbar.php";?>

<?php require "topadspace.php";?>

<div class="content">
	
	<div class="colA">

	</div>

		
	<div class="colB">
	</br>
	<h1>Create a Listing</h1>
	</br></br>
	<form method="post" autocomplete="on" action="<!--PHP Code Here-->">
	
	<h4>* Indicates Required Field</h4>
	*Book Title:</br>
	<input id="box" type="text" name="book_title" autofocus required>
	</br></br>
	
	*ISBN:</br>
	<input id="box2" type="text" name="ISBN" placeholder="0-0000-00-0-000-00" required min="10">
	<div class="popup" onclick="isbnhint()">
	<i class="fa fa-question-circle-o"></i><img class="popuptext" id="ISBNpic" src="Images/isbn_hint.png" alt="Example of ISBN">
	</div>
	
	</br></br>
	
	*Book Author(s):</br>
	<div class="comment">(If more than one use a comma to seperate.)</div>
	<input id="box" type="text" name="book_author" required>
	</br></br>
	
	*Condition:</br>
	<input type="radio" name="book_condition" value="poor">Poor
	<input type="radio" name="book_condition" value="fair">Fair
	<input type="radio" name="book_condition" value="good" checked>Good
	<input type="radio" name="book_condition" value="like_new">Like New
	<input type="radio" name="book_condition" value="new">New
	</br></br>
	
	*Asking Price:</br>
	<input id="box2" type="text" name="price" required value="$">
	</br></br>
	
	*Contact Name:</br>
	<input id="box2" type="text" name="seller_name" required>
	</br></br>
	
	*Phone Number and/or Email:</br>
	<input id="phoneNumberInput" type="tel" name="telephone_number" placeholder="(000)-000-0000">
	<input id="emailInput" type="email" name="user_email" placeholder="Email">
	</br></br>
	
	*School:</br>
	<input  id="box" type="text" name="school" required>
	</br></br>
	
	Class this textbook was used for:</br>
	<input id="box" type="text" name="class" placeholder="Ex: English 2010">
	</br></br>
	
	Professor(s) that require this textbook:</br>
	<input  id="box" type="text" name="professor">
	</br></br>
	
	Comments/Description:
	</br>
	<textarea name="sell_description" style="width:80%; height:100px"></textarea>
	</br></br>
	
	
	<div class="graybox">
	Upload Photo:
	</br>
	<input id="right" type="file" value="Upload Photo:" name="picture" accept="image/*">
	</div>
	</br></br>
	
	
	</br></br></br>
	INSERT reCAPTCHA HERE
	</br></br>
	
	<input id="submit" type="submit" value="Submit Listing" target="_self" method="post">
	</form>
	</div>

	<div class="colC">
	
	</div>	
</div>
<?php require "bottomadspace.php";?>
<?php require "footer.php";?>

<!------------------------------------Java Scripts------------------------------------------------------------>
<!-------------------------------------------------------------------------------------------------------------->
<script src="scripts/navbar.js"></script>

<script> /*toggles ISBN Hint popup*/
	function isbnhint() {
	var popup = document.getElementById("ISBNpic");
	popup.classList.toggle("show");}
</script>
	
</body>
</html>
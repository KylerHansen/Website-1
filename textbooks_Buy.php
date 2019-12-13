<?php require "head.php";?>
<link href="stylesphp/textbooks_buy.css" rel="stylesheet" type="text/css"/>
</head>
<?php require "navbar.php";?>

<?php require "topadspace.php";?>

<div class="content">
	
	<div class="colA">
<h3>Filter Results:</h3>
<form action="<!--PHP scripting link here-->">
				<input type="text" placeholder="Book Title or Authors" name="search">
					</br><a class="addtext" id="add1" onclick="AddRemove1()">Add <i class="fa fa-angle-double-right"></i></a><a class="removetext" id="remove1" onclick="RemoveAdd1()"> Remove <i class="fa fa-times-rectangle">  </i></a></br></br>
					
				<input type="text" placeholder="ISBN Number" name="ISBN">
					<div class="popup" onclick="isbnhint()"><i class="fa fa-question-circle-o"></i><img class="popuptext" id="ISBNpic" src="Images/isbn_hint.png" alt="Example of ISBN"></div>
					</br><a class="addtext" id="add2" onclick="AddRemove2()">Add <i class="fa fa-angle-double-right"></i></a><a class="removetext" id="remove2" onclick="RemoveAdd2()"> Remove <i class="fa fa-times-rectangle">  </i></a></br></br>
				
				<input type="text" placeholder="School Name" name="school">
					</br><a class="addtext" id="add3" onclick="AddRemove3()">Add <i class="fa fa-angle-double-right"></i></a><a class="removetext" id="remove3" onclick="RemoveAdd3()"> Remove <i class="fa fa-times-rectangle">  </i></a></br></br>
				
				<input type="text" placeholder="Course Name" name="course">
					</br><a class="addtext" id="add4" onclick="AddRemove4()">Add <i class="fa fa-angle-double-right"></i></a><a class="removetext" id="remove4" onclick="RemoveAdd4()"> Remove <i class="fa fa-times-rectangle">  </i></a></br>
				
				<input type="text" placeholder="Professor Name" name="professor">
					</br><a class="addtext" id="add5" onclick="AddRemove5()">Add <i class="fa fa-angle-double-right"></i></a><a class="removetext" id="remove5" onclick="RemoveAdd5()"> Remove <i class="fa fa-times-rectangle">  </i></a></br>
					
							
			
				<h4>Condition</h4>
					<input type="checkbox" value="new" name="book_condition">New</br>
					<input type="checkbox" name="book_condition" value="like_new">Like New</br>
					<input type="checkbox" name="book_condition" value="good">Good</br>
					<input type="checkbox" name="book_condition" value="fair">Fair</br>
					<input type="checkbox" name="book_condition" value="poor">Poor</br></br>
							
			</form>

	</div>

		
	<div class="colB">
	
	</br></br></br>
		<p>bbb 1Test for scrolling</br>
		1Test for scrolling</br></p>
		<p>2 Test for scrolling</br>
		2Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
			<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
			<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
			<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br></p>
		<p> Test for scrolling</br>
		Test for scrolling</br>BBBBBB</p>
		
	</div>

	<div class="colC">
	
	</div>	
</div>
<?php require "bottomadspace.php";?>
<?php require "footer.php";?>
<!-----------------------------------Java Scripts-------------------------------------------------->
<script src="scripts/navbar.js"></script>

<script> /*toggles ISBN Hint popup*/
	function isbnhint() {
	var pop = document.getElementById("ISBNpic");
	pop.classList.toggle("show");}
</script>
<script>/*script controls the Add>> RemoveX filters visibility toggle maybe an easier way to write this?*/
	function AddRemove1(){
			 document.getElementById("add1").style.display = "none";
			 document.getElementById("remove1").style.display ="block";}
	function RemoveAdd1(){
			document.getElementById("add1").style.display = "block";
			document.getElementById("remove1").style.display ="none";}
			
	function AddRemove2(){
			 document.getElementById("add2").style.display = "none";
			 document.getElementById("remove2").style.display ="block";}
	function RemoveAdd2(){
			document.getElementById("add2").style.display = "block";
			document.getElementById("remove2").style.display ="none";}
			
	function AddRemove3(){
			 document.getElementById("add3").style.display = "none";
			 document.getElementById("remove3").style.display ="block";}
	function RemoveAdd3(){
			document.getElementById("add3").style.display = "block";
			document.getElementById("remove3").style.display ="none";}
			
	function AddRemove4(){
			 document.getElementById("add4").style.display = "none";
			 document.getElementById("remove4").style.display ="block";}
	function RemoveAdd4(){
			document.getElementById("add4").style.display = "block";
			document.getElementById("remove4").style.display ="none";}
			
	function AddRemove5(){
			 document.getElementById("add5").style.display = "none";
			 document.getElementById("remove5").style.display ="block";}
	function RemoveAdd5(){
			document.getElementById("add5").style.display = "block";
			document.getElementById("remove5").style.display ="none";}
</script>




</body>
</html>


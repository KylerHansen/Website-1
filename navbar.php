<body>
	<div class="header">
		<img id="book_logo" src="Images/blogo.png" alt="Swapp Logo"/>
		<a href="index.php">
			<h1>Swapp.com</h1>
			<h2 class="slogan">Connecting Students <span class="slogan_to">to</span> Students</h2>
		</a>
	</div>
<div id="scroll" class="navbar">
	<ul>
		<li><a class="active" href="index.php">Home</a></li>
		<li>
			<div class="dropdown">
				<button class="dropbttn">Textbooks  <i class="fa fa-caret-down"></i></button>
				<div class="dropdownContent">
					<a href="textbooks_Buy.php">Buy </a>
					<a href="textbooks_Sell.php">Sell </a>
				</div>
			</div>		
		</li>
		<li><a class="activeabout" href="about.php">About</a></li>
		<li><a class="activehelp" href="help.php">Help</a></li>
		<li class="loginsignup"><a href="loginsignup.php">Log In / Sign Up</a></li>
		<li class="search-container">
			<form action="<!--PHP scripting link here-->">
				<input type="text" placeholder="Search for book title or author..."
				name="search">
				<button class="search_button" type="submit"><i class="fa fa-search"></i></button>
			</form>
		</li>
		<li><a href="javascript:void(0);" class="minimize_icon" onclick="minimize()">&#9776;</a></li>
		
	</ul>
</div>

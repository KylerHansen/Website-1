<?php require "head.php";?>
<link href="stylesphp/register.css" rel="stylesheet" type="text/css"/>
</head>
<?php require "navbar.php";?>

<?php require "topadspace.php";?>
	

<div class="content">
	
	<div class="colA">

	</div>

		
	<div class="colB">
	<h1 id="title">Register </h1>
	<div class="login">
			<form autocomplete="on" onsubmit="return infocheck()" method="post" action="includes/register.inc.php">
				<div class="text">
					Email:</br>
					<input id="email1" type="email" name="mail" required></br>
					<a class="small">(You will use this to log in.)</a>
					</br></br>
					Confirm Email:</br>
					<input id="email2" type="email" name="mailconfirm" required autocomplete="off">
					</br>
					<div id="confirm_email">
						<p>*Your emails do not match.</p>
						</div>
					</br>
					Password:</br>
					<input id="password" type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						<div id="pass_requirements">
							<h5> Password must contain the following:</h5>
								<p id="letter" class="invalid">At least one lowercase letter</p>
								<p id="capital" class="invalid">At least one capital (uppercase) letter</p>
								<p id="number" class="invalid">At least one number</p>
								<p id="length" class="invalid">Minimum of 8 characters</p>
						</div>
							
					</br><a class="small"><input type="checkbox" onclick="show_pass()">Show Password</a></br>							
				</br>
					Confirm Password:</br>
					<input id="password2" type="password" name="pwdconfirm" required>
						
					<div id="confirm_psw">
					<p>*Your passwords do not match.</p>
					</div>

				</br></br>
					First Name:</br>
					<input id="box" type="text" name="Fname" required>
					</br></br>
						
					Last Name:</br>
					<input id="box" type="text" name="Lname" required>
					</br></br>
					City/State:</br>
					<input id="box" type="text" name="city" required>
					<select id="state" required name="state">
						<option value="Alabama">AL</option>
						<option value="Alaska">AK</option>
						<option value="American_Samoa">AS</option>
						<option value="Arizona">AZ</option>
						<option value="Arkansas">AR</option>
						<option value="California">CA</option>
						<option value="Colorado">CO</option>
						<option value="Connecticut">CT</option>
						<option value="Delaware">DE</option>
						<option value="District of Columbia">DC</option>
						<option value="Florida">FL</option>
						<option value="Georgia">GA</option>
						<option value="Guam">GU</option>
						<option value="Hawaii">HI</option>
						<option value="Idaho">ID</option>
						<option value="Illinois">IL</option>
						<option value="Indiana">IN</option>
						<option value="Iowa">IA</option>
						<option value="Kansas">KS</option>
						<option value="Kentucky">KY</option>
						<option value="Louisiana">LA</option>
						<option value="Maine">ME</option>
						<option value="Marshall_Islands">MH</option>
						<option value="Maryland">MD</option>
						<option value="Massachusetts">MA</option>
						<option value="Michigan">MI</option>
						<option value="Micronesia">FM</option>
						<option value="Minnesota">MN</option>
						<option value="Mississippi">MS</option>
						<option value="Missouri">MO</option>
						<option value="Montana">MT</option>
						<option value="Nebraska">NE</option>
						<option value="Nevada">NV</option>
						<option value="New_Hampshire">NH</option>
						<option value="New_Jersey">NJ</option>
						<option value="New_Mexico">NM</option>
						<option value="New_York">NY</option>
						<option value="North_Carolina">NC</option>
						<option value="North_Dakota">ND</option>
						<option value="Northern_Marianas">MP</option>
						<option value="Ohio">OH</option>
						<option value="Oklahoma">OK</option>
						<option value="Oregon">OR</option>
						<option value="Palau">PW</option>
						<option value="Pennsylvania">PA</option>
						<option value="Puerto_Rico">PR</option>
						<option value="Rhode_Island">RI</option>
						<option value="South_Carolina">SC</option>
						<option value="South_Dakota">SD</option>
						<option value="Tennessee">TN</option>
						<option value="Texas">TX</option>
						<option value="Utah" selected>UT</option>
						<option value="Vermont">VT</option>
						<option value="Virginia">VA</option>
						<option value="Virgin_Islands">VI</option>
						<option value="Washington">WA</option>
						<option value="West_Virginia">WV</option>
						<option value="Wisconsin">WI</option>
						<option value="Wyoming">WY</option>
					</select>
					</br></br>	
					<input type="checkbox" name="olderthan18" value="age" required checked>I am 18 years or older.</br>
					<input type="checkbox" name="agreetoterms" value="terms" required checked>
					I herby agree to Swapp.com's <a href="terms.php">Terms and Conditions</a>, and <a href="privacy.php">Privacy Policy</a>.
			</br></br>
			INSERT reCAPTCHA HERE
			</br>
			</br>
			<input id="submit" type="submit" name="signup-submit" target="_self" method="post" value="Create Account">
		</form>
				</div>
				</div>
	
	<p id="forgot">Already have an account? <a href="loginsignup.php">Log In Here</a></p>
	</br> </p>
	</div>

	<div class="colC">
	
	</div>	
</div>
<?php require "bottomadspace.php";?>
<?php require "footer.php";?>
<!-----------------------------------Java Scripts-------------------------------------------------->
<script src="scripts/navbar.js"></script>
<script> <!--Displays pass requirements and checks when fullfilled-->
									var myInput = document.getElementById("password");
									var letter = document.getElementById("letter");
									var capital = document.getElementById("capital");
									var number = document.getElementById("number");
									var length = document.getElementById("length");

									// When the user clicks on the password field, show the message box
									myInput.onfocus = function() {
									  document.getElementById("pass_requirements").style.display = "block";
									}

									// When the user clicks outside of the password field, hide the message box
									myInput.onblur = function() {
									  document.getElementById("pass_requirements").style.display = "none";
									}

									// When the user starts to type something inside the password field
									myInput.onkeyup = function() {
									  // Validate lowercase letters
									  var lowerCaseLetters = /[a-z]/g;
									  if(myInput.value.match(lowerCaseLetters)) { 
										letter.classList.remove("invalid");
										letter.classList.add("valid");
									  } else {
										letter.classList.remove("valid");
										letter.classList.add("invalid");
											}

									  // Validate capital letters
									  var upperCaseLetters = /[A-Z]/g;
									  if(myInput.value.match(upperCaseLetters)) { 
										capital.classList.remove("invalid");
										capital.classList.add("valid");
									  } else {
										capital.classList.remove("valid");
										capital.classList.add("invalid");
											}

									  // Validate numbers
									  var numbers = /[0-9]/g;
									  if(myInput.value.match(numbers)) { 
										number.classList.remove("invalid");
										number.classList.add("valid");
									  } else {
										number.classList.remove("valid");
										number.classList.add("invalid");
											}

									  // Validate length
									  if(myInput.value.length >= 8) {
										length.classList.remove("invalid");
										length.classList.add("valid");
									  } else {
										length.classList.remove("valid");
										length.classList.add("invalid");
											}
									}
</script>
								
<script><!--Show password check box-->
function show_pass() {
			var p = document.getElementById("password");
			if (p.type === "password") {
				p.type = "text";}
			else {
				p.type = "password";}
		} 
</script>
								
<script><!--password match check-->
function infocheck(){
						var p1 = document.getElementById("password").value;
						var p2 = document.getElementById("password2").value;
						var e1 = document.getElementById("email1").value;
						var e2 = document.getElementById("email2").value;
						if (p1!==p2){
										if (e1!==e2) {document.getElementById("confirm_psw").style.display = "block"; document.getElementById("confirm_email").style.display = "block";alert("Error: You must fill out the form correctly."); return false;}
										else {document.getElementById("confirm_psw").style.display = "block"; document.getElementById("confirm_email").style.display = "none"; alert("Error: You must fill out the form correctly."); return false;}
						} 
						else if (e1!==e2) {document.getElementById("confirm_email").style.display = "block"; document.getElementById("confirm_psw").style.display = "none"; alert("Error: You must fill out the form correctly."); return false; }
						
						else if (p1===p2 && e1===e2){document.getElementById("confirm_email").style.display = "none"; document.getElementById("confirm_psw").style.display = "none"; return true;}
						} 	

-->						
</script>
			
</body>
</html>

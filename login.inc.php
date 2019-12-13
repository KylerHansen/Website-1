<?php
if (isset($_POST['login-submit'])) {

require 'dbh.inc.php';

/*$mailuid = _POST['mail'];
$password = _POST['pwd']; 
*/
$mailuid = ['123@hotmail.com'];
$password = ['Abcdefg1'];   /*Pulls Variables from form on login page*/

if(empty($mailuid)|| empty($password)){
	header("Location: ../loginsignup.php?error=emptyfields"); /*make sure to sanitize*/
	exit();	
}	
else{
	//$sql = "SELECT * FROM users WHERE email=?";

	$stmt = mysqli_stmt_init($conn); /*Creates and checks connection to DB*/
	

	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: ../loginsignup.php?error=sqlerror");
		exit();	
	}
	else{
	//	mysqli_stmt_bind_param($stmt, "s", $mailuid);  /*used to bind input data for the parameter markers in the SQL statement that was passed to mysql_stmt_prepare()*/
	//	mysqli_stmt_execute($stmt);  /*executes the prepared query associated with the statment handler*/
			//Added Code
			$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
			
			$stmt->bind_param("s", $mailuid); //Something is wrong with the binding
			$stmt->execute();
		echo "to here";
		
		//End added code
		$result = mysqli_stmt_get_result($stmt);		/*All the information recieved from select statement is inserted into results variable*/
		if($row = mysqli_fetch_assoc($result)){   /*Takes raw data from database (results) and stores it as an associative array*/
			$pwdcheck = password_verify($password, $row['password']); /*compares entered in $password that is hashed to database password*/
														if($pwdcheck == false){
															//header("Location: ../loginsignup.php?error=wrongpwd");
															//exit();	
																				}
														else if($pwdcheck == true){
															session_start();
															$_SESSION['userId'] = $row['idUsers'];
															$_SESSION['email'] = $row['email'];
															$_SESSION['name'] = $row['fname'];
															header("Location: ../loginsignup.php?login=success");
															exit();
															
																				}
														else{
															header("Location: ../loginsignup.php?error=wrongpwd");
															exit();
																	}
											}
			else{
				//header("Location: ../loginsignup.php?error=nonexistinguser");   /*I KEEP GETTING THIS ERROR CHECK FOR SYNTAX MISTAKES CHECK FOR OTHER MISTAKES ETC.*/
				//exit();
	echo "else statement";
				}
	}
}	
	
	
}
else{
	header("Location: ../loginsignup.php");
	exit();	
}
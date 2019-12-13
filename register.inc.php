<?php
if (isset($_POST['signup-submit'])) {
	
	require 'dbh.inc.php';
	
	$email = $_POST['mail'];
	$emailconfirm = $_POST['mailconfirm'];
	$password = $_POST['pwd'];
	$passwordconfirm = $_POST['pwdconfirm'];
	$fname = $_POST['Fname'];
	$lname = $_POST['Lname'];
	$city= $_POST['city'];
	$state = $_POST['state'];
	
	if (empty($email)||empty($emailconfirm)||empty($password)||empty($passwordconfirm)||empty($fname)||empty($lname)||empty($city)||empty($state)){
			header("Location: ../register.php?error=emptyfields&mail=".$email);								
			exit();																			/*Check if any fields are empty*/
	}
	else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location: ../register.php?error=invalidmail");								/*Validates email*/
			exit();
	}
	else if ($email !== $emailconfirm){
		header("Location: ../register.php?error=emailcheck");							/*Check if emails match*/
			exit();
	}
	else if ($password !== $passwordconfirm){
		header("Location: ../register.php?error=passwordcheck=".$email);				/*Check if passwords match*/
			exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE email=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../register.php?error=sqlerror");
			exit();
		}																						/*Checks if the email is already in the database*/
			else{
				mysqli_stmt_bind_param($stmt, "s", $email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultcheck = mysqli_stmt_num_rows($stmt);
				if($resultcheck > 0){
					header("Location: ../register.php?error=emailtaken");
					exit();
				}
			else{
				$sql = "INSERT INTO users(email, password, fname, lname, city, state) VALUES(?, ?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../register.php?error=sqlerror=");
			exit();	
			}																					/*Connets to database, then hashes password than inserts info into database NEED TO ADD SALTS AND PEPPERS AND SANITIZE INPUTS*/
			else {
				$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
				
				mysqli_stmt_bind_param($stmt, "ssssss", $email, $hashedpwd, $fname, $lname, $city, $state);
				mysqli_stmt_execute($stmt);
				header("Location: ../register.php?registration=completed");
				exit();
			}
			}
	}
	}
mysqli_stmt_close($stmt);
mysqli_close($conn);	
}
else {
header("Location: ../register.php");
exit();										/*If the user accesses php.inc page without clicking the submit button it will take them back to register.php page.*/
}
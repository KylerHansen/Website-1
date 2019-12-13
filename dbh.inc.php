 <?php
 
 $servername = "localhost";
 $dBUsername = "root";
 $dBPassword = "B@lut15Good"; /*maybe need to ad mysql password here*/
 $dBname = "loginsystem";
 
 $conn = mysqli_connect( $servername, $dBUsername, $dBPassword, $dBname);
 
 if(!$conn){
	 die("Connection Failed:".mysqli_connect_error());
 }
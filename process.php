<?php
   //Get values pass from form in this
   $username = $_POST['user'];
   $password = $_POST['pass'];
   
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   
   //connect to server and select database
   $con = mysqli_connect ("localhost", "root",NULL,"<db>");
   
   //query database for user
   $result = mysqli_query($con,"SELECT * FROM user WHERE Username = '$username' and Password = '$password'")
					or die("Failed to query database ".mysql_error());
	$row = mysqli_fetch_array($result);
	if($row['Username'] == $username && $row['Password'] == $password){
		header("location: index.html");
	} else {
		header("location: login.html");
	}
?>
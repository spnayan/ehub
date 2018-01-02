<?php 
	session_start();
	if(!is_null($_SESSION['userId'])){
	
		header("Location:../display/home.php");

}

 ?>






<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<form action="signup.php" method="POST">
	<input type="text" name="firstName" placeholder="First Name"> <br>
	<input type="text" name="middleName" placeholder="Middle Name"><br>
	<input type="text" name="lastName" placeholder="Last Name"><br>
	<input type="text" name="username" placeholder="Username"><br>
	<input type="text" name="emailId" placeholder="Email Id"><br>
	<input type="text" name="school" placeholder="School"><br>
	<input type="text" name="college" placeholder="College"><br>
	<input type="text" name="university" placeholder="University"><br>
	<input type="date" name="dob"> <br>
	<input type="text" name="gender" placeholder="gender"><br>
	<input type="text" name="currentSubject" placeholder="Current Subject"><br>
	<input type="text" name="level" placeholder="Level"><br>
	<input type="text" name="mobileNumber" placeholder="Mobile Number"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<button type="submit" name="register">Register </button> 
</form>
<p>
	<form action="login.php" method="POST" name="login">
		<input type="text" name="uem" placeholder="username or email "> <br>
		<input type="password" name="password" placeholder="password"> <br>
		<button type="submit" name="login">Login</button>


	</form>


</p>
</body>
</html>
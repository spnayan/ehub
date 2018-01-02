<?php 
session_start();
include 'sql_connect.php';

/*getting user data*/
if(isset($_POST['register']))
{
	$firstName = mysqli_real_escape_string($connect, $_POST['firstName']);
	$middleName = mysqli_real_escape_string($connect, $_POST['middleName']);
	$lastName = mysqli_real_escape_string($connect, $_POST['lastName']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$emailId = mysqli_real_escape_string($connect, $_POST['emailId']);
	$school = mysqli_real_escape_string($connect, $_POST['school']);
	$college = mysqli_real_escape_string($connect, $_POST['college']);
	$university = mysqli_real_escape_string($connect, $_POST['university']);
	$dob = mysqli_real_escape_string($connect, $_POST['dob']);
	$gender = mysqli_real_escape_string($connect, $_POST['gender']);
	$currentSubject = mysqli_real_escape_string($connect, $_POST['currentSubject']);
	$mobileNumber = mysqli_real_escape_string($connect, $_POST['mobileNumber']);
	$level = mysqli_real_escape_string($connect, $_POST['level']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	//Hashing Password
	$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

$sql= "INSERT INTO users(firstName,middleName,lastName,username,emailId,school,college,university,dob,gender,currentSubject,level,mobileNumber,password) 
	VALUES ('$firstName','$middleName','$lastName','$username',
	'$emailId','$school','$college','$university','$dob','$gender',
	'$currentSubject','$level','$mobileNumber','$hashedPwd') " ;
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
	
if (mysqli_query($connect,$sql)){

	die("Not connected");
	
}
else{
	$_SESSION['userId']= $row['userId'];
	$_SESSION['firstName']=$row['firstName'];
	header("Location: ../display/home.php");

}
}
/*else
{
	header("Location: register.php");
}*/
?>

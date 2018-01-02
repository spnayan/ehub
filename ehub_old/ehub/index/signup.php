<?php 
include 'sql_connect.php';

/*getting user data*/
if(isset($_POST['submit']))
{
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$lastName = $_POST['lastName'];
	$username= $_POST['username'];
	$emailId = $_POST['emailId'];
	$school = $_POST['school'];
	$college = $_POST['college'];
	$university= $_POST['university'];
	$dob = $_POST['dob']; 
	$gender = $_POST['gender'];
	$currentSubject= $_POST['currentSubject'];
	$level= $_POST['level'];
	$mobileNumber = $_POST['mobileNumber'];
	$password = $_POST['password'];

$sql= "INSERT INTO users(firstName,middleName,lastName,username,emailId,school,college,university,dob,gender,currentSubject,level,mobileNumber,password) 
	VALUES ('$firstName','$middleName','$lastName','$username',
	'$emailId','$school','$college','$university','$dob','$gender',
	'$currentSubject','$level','$mobileNumber','$password') " ;
$result = mysqli_query($connect, $sql);
	
if (mysql_query($sql)){

	die("Not connected");
	
}
else{

	echo "Success!";
}
}
else
{
	header("Location: register.php");
}
?>

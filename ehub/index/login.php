<?php 
session_start();
include 'sql_connect.php';
if(isset($_POST['login']))
{

$uem=mysqli_real_escape_string($connect,$_POST['uem']);
$password=mysqli_real_escape_string($connect,$_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$uem' OR emailId='$uem' ";
			$result = mysqli_query($connect, $sql);
			if($result)
			{
				echo "conn";
			}
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck<1) {
				header("Location:register.php?login=error");
				exit();
			} else {
				if ($row = mysqli_fetch_assoc($result)) {
					//De-hashing the password
					$hashedPwdCheck = password_verify($password, $row['password']);
					if ($hashedPwdCheck == false) {
						header("Location:register.php");
						exit();
					} elseif ($hashedPwdCheck == true) {
						//Log in the user here
						$_SESSION['userId'] = $row['userId'];
						$_SESSION['firstName'] = $row['firstName'];
						$_SESSION['lastName'] = $row['lastName'];
						/*var_dump($row);*/
						/*$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_uid'] = $row['user_uid'];*/
						header("Location:../display/home.php");
						exit();
					}
				}
			}
}
else
{


//header("Location:signup.php");

}



 ?>

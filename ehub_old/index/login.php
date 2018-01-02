<?php 

	session_start();
	include 'sql_connect.php';

	if (isset($_POST['login'])) 
	{
		
		
		$uem = $_POST ['uem'];
		$password =$_POST['password'];

		$data = "SELECT * FROM users WHERE (username='$uem' /*or emailId='$uem' or mobileNumber='$uem') */AND password='$password')";
		/*echo $data;exit;*/
		$result = mysqli_query($connect, $data);
		
		$count = mysqli_num_rows($result);

		if($count == 1)
		{
			$userdata = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $data['user_id'];
			// /.................................

		}
		else
		{
			//inlvalid username or password 
		}
	}

	else
	{
		header("Location: register.php");
	}


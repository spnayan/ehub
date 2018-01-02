<?php 
	session_start();
	$connect=mysqli_connect("localhost","root","","ehub");
	if (isset($_POST['ask']))
	{

		$question = mysqli_real_escape_string($connect, $_POST['question']);
		$details = mysqli_real_escape_string($connect, $_POST['details']);
		$_SESSION['userId'];
		/*echo $question;
		echo $details;*/
		$timezone=date_default_timezone_get();
		$sql="INSERT INTO question(`userId`,`question`,`details`,`datetime`) VALUES ('{$_SESSION['userId']}', '$question' , '$details' , '$timezone') ";
		$result=mysqli_query($connect, $sql);

		if($result)
		{
			$_SESSION['qmsg']="Your question was submitted";

		}
		else{
				$_SESSION['qmsg']="Problem Connecting with server";
		}
		


	}

	header("Location:home.php");

	


 ?>
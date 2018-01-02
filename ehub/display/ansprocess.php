 <?php 
    session_start();

 	$connect=mysqli_connect("localhost","root","","ehub");

 	if (isset($_POST['asubmit'])) {

 		$answer= $_POST['answer'];
 		$timezone=date_default_timezone_get();
 		/*echo $answer;*/
 	//Inserting answer parameters
 		$sql="INSERT INTO answers(`questionId`, `userId`, `answer`,`datetime`) VALUES ( '{$_SESSION['questionId']}','{$_SESSION['userId']}','$answer', '$timezone') " ;
 		$result=mysqli_query($connect, $sql);
 		if($result)
 		{
 			$_SESSION['amsg']="Your answer was submitted";
 		}
 		else
 		{
 			$_SESSION['amsg']="Connection error";
 		}

 		header("Location:home.php");
	
 	}

	else {
		header("Location:home.php");
		$_SESSION['amsg']="else";

	}
  ?>
 <!--  $sql="INSERT INTO question(`userId`,`question`,`details`,`datetime`) VALUES ('{$_SESSION['userId']}', '$question' , '$details' , '$timezone') ";
		$result=mysqli_query($connect, $sql); -->



<?php 
	session_start();
	$connect=mysqli_connect("localhost","root","","ehub");
	if($_SESSION['userId']):
		?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../assets/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("searchprocess.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<body>
<div id="container">
				<div id="header">
					<div id="ehub"><h2><a href="home.php">eHuB</a></h2></div>
					<div class="search-box">
					        <input type="text" autocomplete="off" placeholder="Search users/questions" />
					        <div class="result"></div>
    				</div>
					<div id="profile">
						<div id="pp"></div>
					</div>
                    <div id="logout">
                        <form action="logout.php" method="POST">
                        <input type="submit" name="logout" value="logout">
                        </form>
                    </div>
                    <div id="settings">
                        <a href="settings.php">Settings</a>
                    </div>
				</div>

				<div id="nav">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="">Bookmarks</a></li>

						<li><a href="">Blogs</a></li>

					</ul>
					<?php $sql1="SELECT * FROM answers WHERE userId= {$_SESSION['userId']}" ;
					$result1=mysqli_query($connect,$sql1);
					while($row1=mysqli_fetch_assoc($result1)): ?>
					<?php echo $row1['answer']; ?> <br>
					<?php endwhile ?>
					
				</div>
				<div id="mainContent">  //Yaha lekheko kura nai display bhayena k... ans? 
						<?php 
						$sql="SELECT * FROM users WHERE userId= {$_SESSION['userId']}" ;
						$result=mysqli_query($connect,$sql);
						
							$row=mysqli_fetch_assoc($result);
							$_SESSION['firstName']= $row['firstName'];
							echo $row['college'];
							echo $row['level'];
							echo $_SESSION['firstName'];
						
					 ?>
						<?php $sql="SELECT * FROM answer WHERE userId= {$_SESSION['userId']}" ;
						$result=mysqli_query($connect,$sql);
						$row=mysqli_fetch_assoc($result);
						echo $row['answer'] ?>

				</div>
		</div>
					
</body>
</html>
<?php endif?>
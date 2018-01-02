<?php 
session_start();
$connect=mysqli_connect("localhost","root","","ehub");
if($_SESSION['userId'])
{
/*echo "Hi". $_SESSION['firstName'];*/
}
else{
    header("Location:../index/register.php");
}

 ?>

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


<style type="text/css">

*
{
	padding:0px;
	margin:0px;


}
body
{
	background-color:#efeded;
}


#container
{
	width:90%;
	height:100%;
	background:#efeded;
	padding:0px;
	margin:0px auto;
}

#header
{
	width:100%;
	height:90px;
	background-color:white;
	border-bottom:2px solid #1ef7ff;
	position:fixed;
	top:0px;
	left:0px;
}

#ehub
{
	width:30%;
	float:left;
	//background-color:yellow;
	height:100%;
	text-align:center;
}

#ehub h2
{
	/*position:absolute;*/
	top:60px;
	left:100px;
	font-size:30pt;
	margin-top:30px;
}
 
#ehub h2 a
{
	text-decoration:none;
	color:#1ef7ff;

}
#ehub h2 a:hover
{
    color:#00ffbb;
}

#searchBar
{
	height:100%;
	width:50%;
	//background-color:blue;
	float:left;

}
#logout
{
    float: right;
    margin-right: 0px;
    margin-top: 40px;


}

#profile
{
	//background-color:g;
	float:right;
	height:100%;
	width:20%;
}

 #profile #pp
{
	height:45px;
	width:45px;
	border-radius:50%;
	background-color:cyan;
	margin-top:20px;
	margin-left:120px;
	cursor:pointer;
    border:2px solid black;
}
/*.search-box input[type=search], select {
    width: 70%;
    padding: 12px 20px;
    margin: 20px 70px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-sizing: border-box;*/
    .search-box{
        width: 400px;
        position: relative;
        display: inline-block;
        font-size: 14px;
        border-radius: 20px;
        margin-top:20px;
        margin-left:50px;
    }
    .search-box input[type="text"]{
        height: 40px;


        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
         border-radius: 20px;
    }
 .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
        background-color:white;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;


    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;

    }
    .result p:hover{
        background: #f2f2f2;
    }

#nav
{
	height:100%;
	width:20%;
	//background-color:red;
	position:fixed;
	top:110px;
	left:150px;
	//float:left;


}

#nav ul
{
	list-style-type: none;
	//background-color:white;
	margin-top:40px;
}

#nav ul li a
{
height:40px;
width:80%;
//background-color:white;
display:block;
//border:2px solid	 black;
text-align:left;
line-height:40px;
text-decoration: none;
color:#999;
font-size:20px;

}

#nav ul li a:hover
{
	color:black;
}

#maincontent
	
{
	width:700px;
	height:100%;
	background-color:#efeded;
	margin-left:300px;
	margin-top:140px;
}

input[type=text], select {
    width: 90%;
    height:50px;
    padding: 12px 20px;
    margin: 15px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 50px;
    margin: 8px 100px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#logout
{
    padding:0px;
    margin:0px;
}

#askques
{
    width:100%;
    height:230px;
    background-color:white;
    margin-bottom:30px;
    border-radius:20px;
}

#ask
{
    margin-left:440px;
    background-color:#f47a42;
}

#ques
{

    width:100%;
   // height:230px;
    background-color:white;
    margin-bottom:30px;
    border-radius:20px;
    text-align:left;
    font-size:25px;
    text-indent:30px;
    line-height:20px;

}
#questitle
{
    margin-top:20px;
    margin-bottom:0px;
}

#more
{
    display:none;
    position:absolute;
    width:100px;
}
#more ul
{
    list-style-type: none;
    //background-color:white;
    margin-top:30px;
    margin-left:-50px;

}

#more ul li a
{
height:40px;
width:80%;
background-color:white;
display:block;
//border:2px solid   black;
text-align:center;
line-height:40px;
text-decoration: none;
color:#999;
font-size:15px;
border-bottom:2px solid red;
padding:12px 16px;

}

#more ul li a:hover
{
    border-bottom:2px solid black;
}









</style>
<script type="text/javascript">
  function myfunction (){ 

    if(document.getElementById("more").style.display=="block"){
    	document.getElementById("more").style.display="none";
    }
    else{
    		document.getElementById("more").style.display="block";
    }
}


</script>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<div id="container">
				<div id="header">
					<div id="ehub"><h2><a href="home.php">eHuB</a></h2></div>
					<div class="search-box">
					        <input type="text" autocomplete="off" placeholder="Search users/questions" />
					        <div class="result"></div>
    				</div>
					<div id="profile">
						<button id="pp" onclick="myfunction()">
                             <div id="more">
                                  <ul>
                                <li><a href="">Profile</a></li>
                                <li><a href="">Account Setting</a></li>
                                <li><a href="logout.php">Log Out</a></li>

                                 </ul>

                                        
                             </div>
                        </button>
                       
					</div>
                   <!--  <div id="logout">
                        <form action="logout.php" method="POST">
                        <input type="submit" name="logout" value="logout">
                        </form>
                    </div> -->
				</div>

				<div id="nav">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="">Bookmarks</a></li>

						<li><a href="">Blogs</a></li>

					</ul>
				</div>
				<div id="mainContent">
					
				

                        

                        <div id="askques">
                        <form action="askprocess.php" method="POST">
                        
                        	<input type="text" name="question" placeholder="Ask your question" required></br>
                        	<input type="text" name="details" placeholder="Add Details"></br>
                        	<input type="submit" name="ask" value="Ask" id="ask">
                    	</form>
                    		
                         </div>


                         <div>
                        	   <?php

                        		$questions= "SELECT * FROM question";
                        		$result = mysqli_query($connect,$questions);
                        		while($row=mysqli_fetch_assoc($result)): ?>
                        		
                        <div>
                                <div id="ques">
                        		<p >	<p> <b><?php echo $row['question']; ?></b> </p><br>
                        			  
                                      <p>  <?php echo $row['details'];
                        			    $_SESSION['questionId']= $row['questionId'];
                        			    ?></p>

                                        <form >
                        			 	<!-- <input type="text" name="answer" placeholder="Know It? Answer Here"> -->

                        			 	<br>
                        			 	<input type="submit" name="asubmit" value="Answer">
                    					<br>
                                        </form>

                        			 </p> 
                                     </div>
                        	
                        	  <?php endwhile; ?>

                        </div>

               </div>
                <div id="extra"></div>

                



		</div>

</body>
</html>

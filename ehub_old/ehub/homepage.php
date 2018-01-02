




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

#searchBar
{
	height:100%;
	width:50%;
	//background-color:blue;
	float:left;

}

#profile
{
	//background-color:g;
	float:right;
	height:100%;
	width:20%;
}

 #profile div
{
	height:45px;
	width:45px;
	border-radius:50%;
	background-color:cyan;
	margin-top:20px;
	margin-left:120px;
	cursor:pointer;
}
#searchBar input[type=search], select {
    width: 70%;
    padding: 12px 20px;
    margin: 20px 70px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-sizing: border-box;
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
	color:white;
}

#maincontent
	
{
	width:700px;
	height:100%;
	background-color:white;
	margin-left:300px;
	margin-top:140px;
}







</style>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<div id="container">
				<div id="header">
					<div id="ehub"><h2><a href="homepage.php">eHuB</a></h2></div>
					<div id="searchBar">
						<input type="search" placeholder="Search Colleges">
					</div>
					<div id="profile">
						<div id="pp"></div>
					</div>



				</div>

				<div id="nav">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Bookmarks</a></li>

						<li><a href="">Blogs</a></li>

					</ul>
				</div>
				<div id="mainContent"></div>
				<div id="extra"></div>




		</div>

</body>
</html>
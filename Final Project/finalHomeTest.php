<?php
	session_start();
?>
<html>
	<head>
		<style>
			header, footer, #main, #nav {
				box-sizing: border-box;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			
			header {
				height: 10%;
			}
			
			footer, #nav {
				height: 5%;
			}
			
			#main {
				height: 80%;
			}
			
			header {
				border: 5px double black;
				font-size: 30px;
				background-color: green;
			}
			
			footer, #main, #nav{
				border: 1px solid black;
				font-size: 20px;
				background-color: lightgray;
			}
			
			.btn {
				text-decoration: none;
				border: 1px solid;
				color: black;
				margin-right: 5px;
				padding: 4px 5px;
			}
			
			#userbtn {
				float: right;
			}
				
			
			.btn:hover {background-color: darkgrey}
		</style>
		<title>This is the home page.</title>
	</head>
	
	<body>
		<header>Welcome to my site!</header>
		<div id = "nav">
			<a class = "btn" id = "login" href = "finalLogin.html">Login</a>
			<a class = "btn" id = "upcoming" href = "finalUpcoming.html">Upcoming Releases</a>
			<a class = "btn" id = "reviews" href = "finalReviews.html">Reviews</a>
			<a class = "btn" id = "about" href = "finalAbout.html">About</a>
			<a class = "btn" id = "user" href = "finalUser.html">User</a>
			<?php if(isset($_SESSION['username'])){?>
				<div><?= $_SESSION['username']?></div>
			<?php }?>
		</div>
		<div id="main">Using the navigation buttons above, you can view upcoming games and submit reviews, but you will need to&nbsp;<a href = "login.html">login</a>&nbsp;first.</div>
		<footer>Thank you for visiting!</footer>
	</body>
</html>
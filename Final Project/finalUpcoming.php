<?php
	session_start();
?>
<html>
	<head>
		<style>
			header, footer {
				box-sizing: border-box;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			
			#main {
				box-sizing: border-box;
				display: flex;
				justify-content: left;
				overflow: auto;
				white-space: nowrap;
				height: 60%;
				border-bottom: 1px solid black;
				padding-right: 10px;
				padding-left: 10px;
			}
			
			#nav {
				box-sizing: border-box;
				display: flex;
				align-items: center;
				justify-content: space-between;
			}
			
			#flexContainer1 {
				display: flex;
				align-items: center;
				justify-content: center;
			}
			
			#flexContainer2 {
				display: flex;
				alight-items: center;
				justify-content: flex-end;
			}
			
			#username {
				margin-right: 10px;
				margin-top: 5px;
				font-size: 1.4em;
			}
			
			.emptyBtn {
				text-decoration: none;
				border: 1px solid;
				color: black;
				margin-right: 5px;
				padding: 4px 5px;
				visibility: hidden;
			}
			
			#nav, #main {
				border-left: 1px solid black;
				border-right: 1px solid black;
				background-color: lightgrey;
			}
			
			.upcoming {
				display: flex;
				flex-direction: column;
				margin: 5px;
				width: 200px;
			}
			
			.title {
				text-wrap: wrap;
				margin-bottom: 7px;
			}
			
			header {
				height: 10%;
			}
			
			footer, #nav {
				height: 5%;
			}
			
			header {
				border: 5px double black;
				font-size: 30px;
				background-color: green;
			}
			
			footer {
				border: 1px solid black;
				font-size: 20px;
				background-color: lightgray;
			}
			
			#space {
				border-left: 1px solid black;
				border-right: 1px solid black;
				height: 20%;
				background-color: lightgray;
				border-top: 1px solid black;
			}
			
			.btn {
				text-decoration: none;
				border: 1px solid;
				color: black;
				margin-right: 5px;
				padding: 4px 5px;
				font-size: 1.4em;
			}
			
			.btn:hover {background-color: darkgrey}
		</style>
		<title>Upcoming Releases.</title>
	</head>
	
	<body>
		<header>Upcoming Releases</header>
		<div id = "nav">
		    <div id = "empty">
				<a class = "emptyBtn" href = "finalDestroy.php">Logout&nbsp&nbsp&nbsp<?= $_SESSION['username']?></a>
			</div>
			<div id = "flexContainer1">
				<a class = 'btn' id = "home" href = "finalHome.php">Home</a>
				<a class = "btn" id = "reviews" href = "finalReviews.php">Reviews</a>
				<a class = "btn" id = "about" href = "finalAbout.php">About</a>
				<?php if(isset($_SESSION['username'])){?>
					<a class = "btn" id = "user" href = "finalUser.php">User Profile</a>
				<?php }?>
			</div>
			<div id = "flexContainer2">
				<?php if(!isset($_SESSION['username'])){?>
					<a class = "btn" id = "login" href = "finalLogin.html">Login</a>
				<?php }?>
				<?php if(isset($_SESSION['username'])){?>
					<div id = "username"><?= $_SESSION['username']?></div>
				<?php }?>
				<?php if(isset($_SESSION['username'])){?>
					<a class = "btn" id = "logout" href = "finalDestroy.php">Logout</a>
				<?php }?>
			</div>
		</div>
		<div id = "space"></div>
		<div id="main">
			<div class = "upcoming">
				<img src = "THE_THAUMATURGE_Cover_Art.jpg" alt = "Video game" width = "200" height = "200">
				<div class = "title">The Thaumaturge</div>
				<div class = "date">12-04-2024</div>
			</div>
			<div class = "upcoming">
				<img src = "Path_of_Exile_2.png" alt = "Video game" width = "200" height = "200">
				<div class = "title">Path of Exile 2</div>
				<div class = "date">12-06-2024</div>
			</div>
			<div class = "upcoming">
				<img src = "Alien_Rogue_Incursion.jpg" alt = "Video game" width = "200" height = "200">
				<div class = "title">Alien: Rogue Incursion</div>
				<div class = "date">12-19-2024</div>
			</div>
			<div class = "upcoming">
				<img src = "Dynasty-Warriors-Origins.jpg" alt = "Video game" width = "200" height = "200">
				<div class = "title">Dynasty Warriors: Origins</div>
				<div class = "date">01-17-2025</div>
			</div>
			<div class = "upcoming">
				<img src = "Sniper_Elite_Resistance.webp" alt = "Video game" width = "200" height = "200">
				<div class = "title">Sniper Elite: Resistance</div>
				<div class = "date">01-30-2025</div>
			</div>
			<div class = "upcoming">
				<img src = "Civ_7.jpg" alt = "Video game" width = "200" height = "200">
				<div class = "title">Civilization 7</div>
				<div class = "date">02-11-2025</div>
			</div>
			<div class = "upcoming">
				<img src = "Assassins_Creed_Shadows.webp" alt = "Video game" width = "200" height = "200">
				<div class = "title">Assassin's Creed: Shadows</div>
				<div class = "date">02-14-2025</div>
			</div>
		</div>
		<footer>Thank you for visiting!</footer>
	</body>
</html>
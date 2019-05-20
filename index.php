<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="hotdogstyle.css" media="screen" />
	<title>Dirty Dogs</title>
	<img src="images/header.png" alt ="header image" style="width: 100%;">
	<div class="nav">
		<ul id="navBar">
		  <li id="navBar" class="active"><a href="index.php">Home</a></li>
		  <li id="navBar"><a href="menu.php">Menu</a></li>
		  <li id="navBar"><a href="catering.php">Catering</a></li>
		  <li id="navBar"><a href="about.php">About Us</a></li>
		  <li id="navBar"><a href="contact.php">Contact</a></li>
	 	</ul>
 	</div>
</head>
<body>
	<div class="index-button">
		<div id = "index-button-content">
			<img src="images/hot-dog-64.png" alt="hotdog icon">
			<h1 style="font-size: 40px; padding-left: 10%; padding-right: 10%;">Dirty Dogs serves all-beef, vegan, and vegetarian hotdogs.</h1>
			<a href = "menu.php"><button>More Dogs'n Make 'Em Hot</button></a><br><br>
			<a href = "https://www.linkedin.com/in/aidanbaker/" style="color: #e7e7ef;" target="_blank">Hidden Link!</a>
		</div>
	</div>
	
	<div class="index-content">
		<div class="row">
			<div class="column">
				<h3 style="align-self: center;">Gourmet All Beef Hotdogs</h3>
				<p style="width: 67%; align-self: center;">Praesent commodo cursus magna, vel sclerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			</div>
			<div class="column"><img src="images/allbeef.png"></div>
		</div>

		<div class="row">
			<div class="column"><img src="images/vegan.png"></div>
			<div class="column">
				<h3 style="align-self: center;">Vegan Hotdogs</h3>
				<p style="width: 67%; align-self: center;">Praesent commodo cursus magna, vel sclerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<h3 style="align-self: center;">Vegetarian Hotdogs</h3>
				<p style="width: 67%; align-self: center;">Praesent commodo cursus magna, vel sclerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			</div>
			<div class="column"><img src="images/vegetarian.png"></div>
		</div>
	</div>
	
</body>
<?php include('footer.php'); ?>
</html>
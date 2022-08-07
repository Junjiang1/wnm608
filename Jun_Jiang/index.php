<?php
include_once "lib/php/functions.php";
include_once "part/templates.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Healthy Foodie</title>

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<link rel="stylesheet" href="css/style1.css">
</head>
<body>

	<!-- header>h1+P -->
	 <?php include('./part/navbar.php');?>



	<div class="title">
		<h1>Welcome!</h1>
	</div>

	<div class="container">


		<div class="view-window" style="background-image: url('img/banner.jpg')">
			
		</div>


		</article>

		<article id="article2" class="article">
				<div class="flex-stretch">
				<h2 class="company">Jun's Company, Inc.</h2>
				</div>
				<div class="article-body">
				<p>We pay more and more attention to dietary health issues, such as hormones, pesticides, and food safety. The purpose of this website is to provide people with safe, healthy and delicious food through this website


				</p>
			</div>
		</article>
		</div>

		<div class="container">
		<h2>Latest Fruits</h2>
		<?php 
			recommendedCategory("fruit"); ?>
		<h2>Latest Vegetables</h2>
		<?php 
			recommendedCategory("vegetable"); ?>
	</div>



	<footer>&copy; 2022 ART_JUN JIANG</footer>

</body>

		
</html>
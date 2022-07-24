<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href="http://www.junjiangdesign.com/aau/wnm608/Jun_Jiang/">
<link rel="stylesheet" href="lib/css/styleguide.css">
<link rel="stylesheet" href="lib/css/gridsystem.css">
<link rel="stylesheet" href="css/storetheme.css">
<link rel="stylesheet" href="css/style1.css">

</head>
<body>
	
		
<!-- 	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Store</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class=" nav nav-flex flex-none">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="#">Link 3</a></li>
				</ul>
			</nav>
		</div>
	</header>
 -->
<!-- 	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Healthy Foodie</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none"></nav>
			<nav class="nav">
				<ul class="container display-flex">
					<li><a href="index.php">Home</a></li>
					<li><a href="product list.php">Product List</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header> -->
	<?php include('./part/navbar.php');?>
	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

		<?php
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='/aau/wnm608/Jun_Jiang/img/$o'>";
});

// print_p($product);
?><!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>


	<?php include "part/meta.php"; ?>


	<style>
		.card-section {
		    margin: 20px;
		}
	</style>	

</head>
<body>
	<?php include "part/navbar.php"; ?>
		<div class="container">
			<div class="grid gap">
				<div class=".col-xs-12 col-md-7">
					<div class="card soft">
						<div class="images-main">
						    <img src="/aau/wnm608/Jun_Jiang/img/<?= $product->thumbnall?>" alt="">
					    </div>
						<div class="images-thumbs">
							<?= $image_elements ?>
						</div>
			        </div>

			    </div>

			    <div class=".col-xs-12 col-md-5">
			    	<div class="card soft flat">
			    		<div class="card-section">
			    		    <h2 class="product-title"><?= $product->name ?></h2>
			    		     <div class="product-price">&dollar;<?= $product->price ?></div>
			    	    </div>

			    	    <div class="card-section">
			    	    	<label for="product-amount" class="form-label">Amount</label>
			    	    	<div class="form-select" id="product-amount">
			    	           <select>
			    	             <option>1</option>
			    	             <option>2</option>  
			    	             <option>3</option>  
			    	             <option>4</option>
			    	             <option>5</option>
			    	             <option>6</option>
			    	             <option>7</option>
			    	             <option>8</option>
			    	             <option>9</option>
			    	             <option>10</option>
			    	           </select>
			    	        </div>
			    	    </div>    

			    		<div class="card-section">
			    			<a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a>
			    		</div>
			    	</div>
			    </div>
		    </div>


		    <div>
		    	<div class="card soft light">
		    		<p><?= $product->description ?></p>
		    	</div>
		    </div>
	    </div>
	    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/product_thumbs.js"></script>
</body>
</html>
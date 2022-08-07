<?php
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?>



<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Confirmattion Page </title>
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">

	
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<base href="http://www.junjiangdesign.com/aau/wnm608/Jun_Jiang/">
     <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="css/storetheme.css">


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

  
   <body> 
   	  <?php include('./part/navbar.php');?>
	<div class="container">
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
		      		<h2>You added <?= $product -> name ?> to your cart</h2>
                    <p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>

                    <div class="display-flex">
                    	<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
                    	<div class="flex-stretch"></div>
                    	<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
		      		</div>
		    	</div>
			</div>
		</article>
	</div>
</body>
</html>
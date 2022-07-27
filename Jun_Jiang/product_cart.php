
<?php
include_once "lib/php/functions.php";
include_once "part/templates.php";



$cart = getCartItems();

?>


<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Cart Page </title>


	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href="http://www.junjiangdesign.com/aau/wnm608/Jun_Jiang/">
<link rel="stylesheet" href="lib/css/styleguide.css">
<link rel="stylesheet" href="lib/css/gridsystem.css">
<link rel="stylesheet" href="css/storetheme.css">
<link rel="stylesheet" href="css/style1.css">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script></head>

<body>
	<!--   <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>Store</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class=" nav nav-flex flex-none">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product_list.php">Store</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </nav>
        </div>
    </header>
 -->
<!--    <header class="navbar">
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
    </header>   -->


    <?php include "part/meta.php"; ?>
</head>

<body>
    <?php include "part/navbar.php"; ?>

    <div class="container">
        <h2>In your Cart</h2>
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <?= array_reduce($cart,'cartListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft flat">
                    <!-- <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Sub Total</strong></div>
                        <div class="flex-none">&dollar;3.50</div>
                    </div> -->
                    <!-- <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Taxes</strong></div>
                        <div class="flex-none">&dollar;3.50</div>
                    </div> -->
                    <!-- <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Total</strong></div>
                        <div class="flex-none">&dollar;7.00</div>
                    </div> -->
                    <!-- <div class="card-section">
                        <a href="product_checkout.php"class="form-button">Checkout</a>
                    </div> -->

                    <?= cartTotals() ?>
    
            </div>
        </div>
    </div>  
</body>
</html>
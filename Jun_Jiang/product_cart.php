
<?php
include_once "lib/php/functions.php";
include_once "part/templates.php";


$cart = getCart();

$cart_items = getCartItems();

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

<style>
    strong {
    margin-bottom: 20px;
    display: block;
}
.price {
    margin-bottom: 15px;
}
</style>
	
    <?php include "part/meta.php"; ?>
</head>

<body>
    <?php include "part/navbar.php"; ?>

    <div class="container">
        <h2>In your Cart</h2>

        <?php
            if(count($cart)) {
        ?>  

         

        <div class="grid gap">
            <div class="col-xs-12 col-md-7 card soft">
                <div class="">
                     <?= array_reduce($cart_items,'cartListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 card soft flat">
                <div class="">
                    <?= cartTotals() ?>

                    <div class="card-section">
                        <a href="product_checkout.php"class="form-button">Checkout</a>
                    </div>
                </div>
        </div>

        <?php
            } else {
        ?>
            
        <div class="card soft">
            <p>No items in cart</p>
        </div>

        <h3> Other Recommendation</h3>
        <?php 
            recommendedAnything(6);
            }
        ?>
        
    </div>  
</body>
</html>
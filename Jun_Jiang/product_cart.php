
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
                 

                    <?= cartTotals() ?>
    
            </div>
        </div>
    </div>  
</body>
</html>
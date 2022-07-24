<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	
<meta name="viewport" conttent="width=device-width">

<base href="http://www.junjiangdesign.com/aau/wnm608/Jun_Jiang/">
     <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="css/storetheme.css">

    <style>
        .figure.product {
            border-radius: 0.5em;
            box-shadow: 0 2px 5px rgb(0 0 0 / 10%);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .flex-stretch {
            flex: 1;
            max-height: 360px;
        }
        figcaption.flex-none.product-price {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>    

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script></head>


    <!--    <header class="navbar">
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
                    <li><a href="product list.php">Product list</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>  --> 
  
<body>
    <?php include('./part/navbar.php');?>
      <div class="title">
        <h2>Product list</h2>
    </div>

    <div class="container" id="hotdog">

                <div class="form-control">
                    <form>
                        <input type="search" class="hotdog" placeholder="Search">
                    </form>
              
                </div>


	<div class="container">
		
			
			
			

                <?php
               

            include_once "./lib/php/functions.php";
            include_once "./part/templates.php";

            $result = makeQuery(
                makeConn(),
                "
                SELECT *
                FROM `products`
                ORDER BY `date_create` DESC
                LIMIT 12
                "
            );

            echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";
            ?>

     <!--            <a class="col-xs-12 col-md-4" href="product_item.php?id=12">
    <figure class="figure product display-flex flex-column">
        <div class="flex-stretch">
            <img src="/aau/wnm608/Jun_Jiang/img/chia_seed.jpg" alt="">
        </div>
        <figcaption class="flex-none">
            <div>chia_seed</div>
            <div>&dollar;4.98</div>
        </figcaption>
    </figure>
</a> -->


		
</div>
</div>	
</body>
 <footer>&copy; 2022 ART_JUN JIANG</footer>
</html>




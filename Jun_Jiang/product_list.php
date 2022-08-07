
<?php

include_once "lib/php/functions.php";
include_once "part/templates.php";

?>




<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        .btn-group{
            margin-right: 20px;
        }
        .form-button {
            background-color: var(--color-neutral-light);
            padding: 0.5em 10px;
            border-radius: 0.2em;
            cursor: pointer;
            text-align: center;
        }

        button:hover {
            background-color: #9c9a9a;
            color: white;
            transition-duration: 0.3s;
            border: none;
        }
        .minimal{
            margin-top: 0;
        }
    </style>    

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
</head>


<body>
    <?php include('./part/navbar.php');?>
      
      <div class="title">
        <h2>Product list</h2>
    </div>

    <div class="container">

    <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" placeholder="Search Products">
            </form>
        </div>
        <div class="form-control">
            <div class="card soft">
                <div class="display-flex m-flex">
                    <div class="display-flex flex-stretch">
                         <div class="flex-none btn-group">
                            <button data-filter="category" data-value="" type="button" class="form-button button-stretch">All</button>
                        </div>
                        <div class="flex-none btn-group">
                            <button data-filter="category" data-value="fruit" type="button" class="form-button button-stretch">Fruit</button>
                        </div>
                        <div class="flex-none btn-group">
                            <button data-filter="category" data-value="vegetable" type="button" class="form-button button-stretch">Vegetable</button>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="form-select">
                            <select class="js-sort minimal">
                                <option value="1">Newest</option>
                                <option value="2">Oldest</option>
                                <option value="3">Least Expensive</option>
                                <option value="4">Most Expensive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class='productlist grid gap'></div>
    </div>
      </div>
</body>
</html>


		





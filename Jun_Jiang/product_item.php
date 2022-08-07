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
	
	<?php include('./part/navbar.php');?>

	

		<?php
include_once "lib/php/functions.php";
include_once "part/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='/aau/wnm608/Jun_Jiang/img/$o'>";
});

// print_p($_SESSION);

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

		<div class="container">
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<div class="images-main custom">
						    <img src="/aau/wnm608/Jun_Jiang/img/<?= $product->thumbnall?>" alt="">
					    </div>
						<div class="images-thumbs">
							<?= $image_elements ?>
						</div>
			        </div>

			    </div>

			    <div class="col-xs-12 col-md-5 card soft">


			    	<form class="" method="post" action="cart_actions.php?action=add-to-cart">


			    		<input type="hidden" name="product-id" value="<?= $product->id ?>">

			    		
			    	<div class="">
			    		<div class="card-section">
			    		    <h2 class="product-title"><?= $product->name ?></h2>
			    		    <div class="product-category"><?= $product->category ?></div>
			    		     <div class="product-price">&dollar;<?= $product->price ?></div>
			    	    </div>

			    	    <div class="card-section">
			    	    	<label for="product-amount" class="form-label">Amount</label>
			    	    	<div class="form-select">
			    	           <select id="product-amount" name="product-amount">
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
				    	        <label for="product-color" class="form-label">Package</label>
				    	        <div class="form-select">
				    	    	    <select id="product-color" name="product-color">
				    	    		    <option>Large</option>
				    	                <option>Small</option>
				    	            </select>
				    	        </div>
				    	    </div>
			    	    </div>

			    		<div class="card-section">
			    			<input type="submit" class="form-button" value="Add To Cart">
			    		</div>
			    	</form>
			    </div>
		    </div>


		    <div>
		    	<div class="card soft dark">
		    		<p><?= $product->description ?></p>
		    	</div>
		    </div>



		     <h2>Recommended Product</h2>
				<?php
					recommendedSimilar($product->category,$product->id);
				?>
	    </div>


	   

			    		
	    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/product_thumbs.js"></script>
</body>
</html>
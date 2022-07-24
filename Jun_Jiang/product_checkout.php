<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Checkout Page </title>
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">

	
<meta name="viewport" conttent="width=device-width">

<base href="http://www.junjiangdesign.com/aau/wnm608/Jun_Jiang/">
     <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="css/storetheme.css">

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
  
    <?php include('./part/navbar.php');?>
      

	<div class="container">
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
		      		<h2>Product Checkout</h2>


            <form class="form">
		        <h3>Address</h3>
		    
		    	<div class="form-control">
		    		<label for="address-street" class="form-label">Street</label>
		    		<input id="address-street" type="text" placeholder="Street name" class="form-input">
		    	</div>
		    	<div class="form-control">
		    		<div class="grid gap">
		    			<div class="col-xs-12 col-md-6">
		    				<label for="address-city" class="form-label">City</label>
		    		        <input id="address-city" type="text" placeholder="City" class="form-input">
		    			</div>
		    			<div class="col-xs-12 col-md-6">
		    				<label for="address-state" class="form-label">State</label>
		    		        <input id="address-state" type="text" placeholder="State" class="form-input">
		    			</div>
		    		</div>
		    	</div>
		    	<div class="form-control">
		    		<div class="grid gap">
		    			<div class="col-xs-12 col-md-6">
		    				<label for="address-zip" class="form-label">Zip Code</label>
		    		        <input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
		    			</div>
		    			<div class="col-xs-12 col-md-6">
		    				<label for="address-country" class="form-label">Country</label>
		    		        <input id="address-country" type="text" placeholder="Country" class="form-input">
		    			</div>
		    		</div>
		    	</div>
		    	


		        <h3>Payment</h3>
		    
		    	<div class="form-control">
		    		<label for="payment-name" class="form-label">Full Name</label>
		    		<input id="payment-name" type="text" placeholder="Name" class="form-input">
		    	</div>
		    	<div class="form-control">
		    		<label for="payment-number" class="form-label">Number</label>
		    		<input id="payment-name" type="text" placeholder="#### #### #### ####" class="form-input">
		    	</div>
		    	<div class="form-control">
		    	<div class="grid gap">
		    			<div class="col-xs-12 col-md-6">
		    				<label for="payment-expiration" class="form-label">Expiration</label>
		    		        <input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
		    			</div>
		    			<div class="col-xs-12 col-md-6">
		    				<label for="payment-cvv" class="form-label">CVV</label>
		    		        <input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
		    			</div>
		    		</div>
		    	</div>
		    	<div class="form-control">
		    		<label for="payment-zip" class="form-label">Zip Code</label>
		    		<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
		    	</div>
		    	<div class="form-control">
		    		<!-- <input type="submit" class="form-button" value="submit"> -->
		    		<a href="product_confirmation.php" class="form-button"> Complete Checkout</a>
		    	</div>
		    </form>
		    	</div>
			</div>
		</article>
	</div>
</body>
</html>

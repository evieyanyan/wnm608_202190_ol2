<?php 

	include_once 'lib/php/functions.php';
	include_once 'parts/templates.php';
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <?php include "parts/meta.php"?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
   	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
    <script>
        query({ type: 'products_all' }).then(d => {
            // console.log('d', d);
            $(".productlist").html(listItemTemplate(d.result));
        });
    </script>

</head>
<body>
    <?php include "parts/header.php"?>


    <div class="container">
			<h2>Product List</h2>
			
			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Product">
				</form>
			</div>
			<div class="form-control">
				<div class="card soft">
				<div class="display-flex">
					<div class="flex-stretch display-flex">
						<div class="flex-none">
							<button data-filter="category" data-value="" type="button" class="form-button" >All</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="t-shirts" type="button" class="form-button" >T-shirts</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="bags" type="button" class="form-button" >Bags</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="bottles" type="button" class="form-button" >Bottles</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="towels" type="button" class="form-button" >Towels</button>
						</div>
					</div>
					<div class="flex-none">				
						<div class="form-select">
							<select class="js-sort">
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
   

</body>
</html>

</body>
</html>
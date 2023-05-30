<!-- header>h1+p -->


<?php 
	include_once 'lib/php/functions.php';
 ?>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<a href="index.php">
				<img src="img/logo.png" style="height: 40px;margin-top: 12px;height: 100px;" alt=""></a>
				<!-- <h1 style="font-family: --font-theme-title:june-expt-variable, sans-serif; color: var(--color-white);">Black Sand Beach Gift Shop</h1> -->
			</div>
			<div class="flex-stretch"></div>
		<nav class="flex-none nav">
			<ul class="container display-flex" style="margin-top: 40px;">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<!-- <li><a href="login.php">login</a></li> -->
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge();?></span>




				</a></li>
			</ul>
		</nav>
		</div>
	</header>

 <?php 
    include_once "lib/php/functions.php";

    
$product = makeQuery(makeConn(),"SELECT * FROM `giftshop` WHERE `id`=".$_GET['id'])[0];

$cart_product = array_find(getCart(),function($o){return $o->id==$_GET['id'];});

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Item</title>
    <?php include "parts/meta.php"?>
    <script src="js/product_thumbs.js"></script>
</head>
<body>
    <?php include "parts/header.php"; ?>

    <div class="container">
        <div class="card soft margin-top-5em">
            <h2> You added <?= $product->name ?> to your cart. </h2>
            <p> There are now <?= $cart_product->amount?> of <?= $product->name ?> in your cart. </p>
            <div class="display-flex">
                <div class="flex-none"><a href="products.php">Continue Shopping</a></div>
                <div class="flex-stretch"></div>
                <div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
            </div>
        </div>
    </div>
</body>
</html>

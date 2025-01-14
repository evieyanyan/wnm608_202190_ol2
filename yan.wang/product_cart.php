<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
// $cart = makeQuery(makeConn(),"SELECT * FROM `giftshop` WHERE `id` IN (4,7,10)");

$cart = getCart();
$cart = getCartItems();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>

    <?php include "parts/header.php"; ?>

    <div class="container">
        <h2>In Your Cart</h2>
        <?php
        if(count($cart)){
        ?>
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <?=array_reduce($cart,'cartListTemplate') ?>
                </div>
            </div>
             <div class="col-xs-12 col-md-5">
                <div class="card soft">
                    <?= cartTotals() ?>
                </div>
            </div> 
        </div>

        <?php
        }else{
        ?>  
            <div class="card soft">
                <p>No items in cart</p>
            </div>
                <h3>Other Recommendation</h3>
                <?php recommendedAnything(6); ?>
            
        <?php   
        }
        ?>
    </div>

</body>
</html>

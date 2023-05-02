<?php
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";
    $bag_items = getBagItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bag Page</title>
    <?php include "parts/meta.php"?>
    
</head>
<body>
    <?php include "parts/header.php"; ?>

    <div class="container margin-top-5em">
        <h2 style="color: var(--color-lotus);"> In your Bag </h2>
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <?= array_reduce($bag_items, 'bagListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft flat">
                    <?= bagTotal() ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




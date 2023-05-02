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

</head>
<body>
    <?php include "parts/header.php"?>
    <style>
        .title {
            margin-top: 0px;
        }
    </style>
    <div class="container">
        <div class="card soft margin-top-5em">
            <h2 class="title">Products</h2>


	<?php

	$result = makeQuery(
		makeConn(),
		"
		SELECT `id`,`name`,`price`, `images`, `thumbnail`
		FROM `giftshop`
		ORDER BY `date_create` DESC;
		"
		);
	echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

		?>


        </div>
    </div>

</body>
</html>

</body>
</html>
<?php 

function MYSQLIAuth(){
	return [
	"localhost",
	"yanyanevie",
	"MEdeqqmima1204!",
	"yanyanevie_giftshop"
	];
}

function PDOAuth(){
	return [
	"mysql:host=localhost;dbname=yanyanevie_giftshop",
	"yanyanevie",
	"MEdeqqmima1204!",
	[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}
	
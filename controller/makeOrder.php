<?php 
include 'dbconn.php';
session_start();
include 'getId.php';
$conn = dbcon();
$user_id = $_SESSION["user_id"];
$order_id = getId("pc_order_master");
$store_id =  $_POST['store_id'];
$total_price = $_POST['total_price'];


$sql_cart = "INSERT INTO `pc_order_master` (`id`, `user_id`, `store_id`, `datetime_created`, `status`, `total_price`) VALUES ('".$order_id."', 'USR-1', '".$store_id."', NOW(), '0', '".$total_price."');";

$sql_cart_update = "UPDATE `pc_cart` SET `order_id` = '".$order_id."' WHERE `pc_cart`.`user_id` = '".$user_id."';";


if ($conn->query($sql_cart) === TRUE) {
	if ($conn->query($sql_cart_update) === TRUE){
		echo "|-SUCCESS-|";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();







?>
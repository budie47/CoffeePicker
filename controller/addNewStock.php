<?php
include 'dbconn.php';
session_start();
include 'getId.php';

$name= $_POST["name"];
$stock_no= $_POST["stock_no"];
$quantity= $_POST["quantity"];
$unit= $_POST["unit"];
$price_per_unit= $_POST["price_per_unit"];
$price= $_POST["price"];
$expired_date= $_POST["expired_date"];
$shop_id = $_SESSION['shop_id'];

$conn = dbcon();
$stock_id = getId("pc_stock");

$sql_add_stock = "INSERT INTO `pc_stock` (`id`, `name`, `stock_no`, `quantity`, `price`, `expired_date`, `unit`, `price_per_unit`, `store_id`, `datetime_created`) VALUES ('".$stock_id."', '".$name."', '".$stock_no."', '".$quantity."', '".$price."', STR_TO_DATE('".$expired_date."', '%d-%m-%Y'), '".$unit."', '".$price_per_unit."', '".$shop_id."', NOW());";

if($conn->query($sql_add_stock)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
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
$stock_id = $_POST["stock_id"];

$conn = dbcon();


$sql_update_stock = "UPDATE `pc_stock` SET `name` = '".$name."', `stock_no` = '".$stock_no."', `quantity` = '".$quantity."', `price` = '".$price."', `expired_date` = STR_TO_DATE('".$expired_date."', '%d-%m-%Y'), `unit` = '".$unit."', `price_per_unit` = '".$price_per_unit."' WHERE `pc_stock`.`id` = '".$stock_id."';";
//echo $sql_update_stock;
if($conn->query($sql_update_stock)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
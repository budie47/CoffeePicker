<?php
include 'dbconn.php';
session_start();
include 'getId.php';

$stock_id = $_POST["stock_id"];

$conn = dbcon();


$sql_delete_stock =  "DELETE FROM `pc_stock` WHERE `pc_stock`.`id` = '".$stock_id."'";
//echo $sql_update_stock;
if($conn->query($sql_delete_stock)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
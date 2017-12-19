<?php
include 'dbconn.php';
session_start();
$cart_id = $_POST['cart_id'];


$conn = dbcon();

$sql_update_menu = "UPDATE `pc_cart` SET `status` = '1' WHERE `pc_cart`.`id` = ".$cart_id.";";

if($conn->query($sql_update_menu)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
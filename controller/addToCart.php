<?php
include 'dbconn.php';
session_start();

$item_id= $_POST["item_id"];
$price= $_POST["price"];
$item_name= $_POST["item_name"];
$size= $_POST["size"];
$comment= $_POST["comment"];
$user_id = $_SESSION["user_id"]; 

$conn = dbcon();

$sql_add_item = "INSERT INTO `pc_cart` ( `item_id`, `price`, `item_name`, `size`, `comment`,`user_id`) VALUES ( '".$item_id."', '".$price."', '".$item_name."', '".$size."', '".$comment."','".$user_id."')";

if ($conn->query($sql_add_item) === TRUE) {
	echo "|-SUCCESS-|";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
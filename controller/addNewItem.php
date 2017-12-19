<?php
include 'dbconn.php';
session_start();
include 'getId.php';

$name= $_POST["name"];
$status= $_POST["status"];
$price= $_POST["price"];
$size= $_POST["size"];
$image= $_POST["image"];
$menu_id =$_POST["menu_id"];;

$conn = dbcon();
$item_id = getId("pc_menu_detail");

$sql_add_item = "INSERT INTO `pc_menu_detail` (`menu_id`, `id`, `item_name`, `price`, `size`, `status`, `datetime_created`,`image`) VALUES ('".$menu_id."', '".$item_id."', '".$name."', '".$price."', '".$size."', '".$status."', NOW(),'".$image."')";
if ($conn->query($sql_add_item) === TRUE) {
	echo "|-SUCCESS-|";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
<?php
include 'dbconn.php';
session_start();
include 'getId.php';

$name= $_POST["name"];
$status= $_POST["status"];
$price= $_POST["price"];
$size= $_POST["size"];
$image= $_POST["image"];
$menu_id =$_POST["menu_id"];
$item_id = $_POST["item_id"];

$conn = dbcon();

$sql_update_item = "UPDATE `pc_menu_detail` SET `item_name` = '".$name."', `price` = '".$price."', `size` = '".$size."', `status` = '".$status."',`image` = '".$image."' WHERE `pc_menu_detail`.`id` = '".$item_id."';";
if ($conn->query($sql_update_item) === TRUE) {
	echo "|-SUCCESS-|";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
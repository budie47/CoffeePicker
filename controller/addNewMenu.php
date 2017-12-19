<?php
include 'dbconn.php';
session_start();
include 'getId.php';

$name= $_POST["name"];
$status= $_POST["status"];
$shop_id = $_SESSION['shop_id'];

$conn = dbcon();
$menu_id = getId("pc_menu_master");

//echo $store_new_id;
$sql_add_menu = "INSERT INTO `pc_menu_master` (`id`, `store_id`, `menu_name`, `status`,`datetime_created`) VALUES ('".$menu_id."', '".$shop_id."', '".$name."', '".$status."',NOW())";
if ($conn->query($sql_add_menu) === TRUE) {
	echo "|-SUCCESS-|";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
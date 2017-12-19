<?php
include 'dbconn.php';
session_start();
include 'getId.php';


$menu_id =$_POST["menu_id"];
$item_id = $_POST["item_id"];

$conn = dbcon();

$sql_delete_item = "DELETE FROM `pc_menu_detail` WHERE `pc_menu_detail`.`id` = '".$item_id."'";

if ($conn->query($sql_delete_item) === TRUE) {
	echo "|-SUCCESS-|";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
<?php
include 'dbconn.php';
session_start();
include 'getId.php';

$menu_id = $_POST["menu_id"];

$conn = dbcon();

$sql_delete_menu =  "DELETE FROM `pc_menu_master` WHERE `pc_menu_master`.`id` = '".$menu_id."'";
//echo $sql_update_stock;
if($conn->query($sql_delete_menu)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
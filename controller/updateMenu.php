<?php
include 'dbconn.php';
session_start();
$name = $_POST['name'];
$status= $_POST["status"];
$menu_id = $_POST['menu_id'];

$conn = dbcon();

$sql_update_menu = "UPDATE `pc_menu_master` SET `menu_name` = '".$name."', `status` = '".$status."' WHERE `id` = '".$menu_id."';";

if($conn->query($sql_update_menu)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
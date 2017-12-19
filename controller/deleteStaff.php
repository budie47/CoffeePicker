<?php
include 'dbconn.php';
session_start();
$staff_id = $_POST['staff_id'];
//$status= $_POST["status"];
$shop_id = $_SESSION['shop_id'];

$conn = dbcon();

$sql_delete_staff = "DELETE FROM `pc_staff` WHERE `pc_staff`.`id` = '".$staff_id."'";

if($conn->query($sql_delete_staff)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
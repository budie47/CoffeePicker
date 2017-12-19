<?php
include 'dbconn.php';
session_start();
$staff_id = $_POST['staff_id'];
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$phoneno= $_POST["phoneno"];
$email= $_POST["email"];
$address= $_POST["address"];
//$status= $_POST["status"];
$shop_id = $_SESSION['shop_id'];

$conn = dbcon();

$sql_update_staff = "UPDATE `pc_staff` SET `first_name` = '".$fname."', `last_name` = '".$lname."', `email` = '".$email."', `phone_no` = '".$phoneno."', `address` = '".$address."' WHERE `pc_staff`.`id` = '".$staff_id."';";

if($conn->query($sql_update_staff)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
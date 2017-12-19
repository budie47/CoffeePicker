<?php
include 'dbconn.php';
session_start();
include 'getId.php';

$fname= $_POST["fname"];
$lname= $_POST["lname"];
$username= $_POST["username"];
$password= sha1($_POST["password"]);
$phoneno= $_POST["phoneno"];
$email= $_POST["email"];
$address= $_POST["address"];
$status= $_POST["status"];
$shop_id = $_SESSION['shop_id'];

$conn = dbcon();
$staff_id = getId("pc_staff");

$sql_add_staff = "INSERT INTO `pc_staff` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone_no`, `type`, `status`, `store_id`, `datetime_created`,`address`) VALUES ('".$staff_id."', '".$username."', '".$password."', '".$fname."', '".$lname."', '".$email."', '".$phoneno."', 'STAFF', '0', '".$shop_id."', NOW(),'".$address."')";

if($conn->query($sql_add_staff)===TRUE){
	echo "|-SUCCESS-|";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
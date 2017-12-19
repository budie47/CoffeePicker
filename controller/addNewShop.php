<?php
include 'dbconn.php';
session_start();
include 'getId.php';

$name= $_POST["name"];
$address= $_POST["address"];
$town= $_POST["town"];
$postcode= $_POST["postcode"];
$state= $_POST["state"];
$country= $_POST["country"];
$open_hour= $_POST["open_hour"];
$close_hour= $_POST["close_hour"];
$status= $_POST["status"];

$conn = dbcon();
$store_new_id = getId("pc_store");

//echo $store_new_id;
$sql_add_shop = "INSERT INTO `pc_store` (`id`, `name`, `address`, `district`, `town`, `postcode`, `state`, `country`, `close_hour`, `open_hour`, `store_no`, `admin_id`,`datetime_created`) VALUES ('".$store_new_id."', '".$name."', '".$address."', '-', '".$town."', '".$postcode."', '".$state."', '".$country."', '".$open_hour."', '".$close_hour."', '".$status."', '".$_SESSION['id']."',NOW());";

if ($conn->query($sql_add_shop) === TRUE) {
	echo "|-SUCCESS-|";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();


?>
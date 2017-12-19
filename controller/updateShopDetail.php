<?php 

include 'dbconn.php';
session_start();

$shop_id = $_SESSION['shop_id'];

$name= $_POST["name"];
$address= $_POST["address"];
$town= $_POST["town"];
$postcode= $_POST["postcode"];
$state= $_POST["state"];
$country= $_POST["country"];
$open_hour= $_POST["open_hour"];
$close_hour= $_POST["close_hour"];
$status= $_POST["status"];
$image = $_POST["image"];

$conn = dbcon();

$sql_update_shop = "UPDATE `pc_store` SET `name` = '".$name."', `address` = '".$address."', `town` = '".$town."', `postcode` = '".$postcode."', `state` = '".$state."', `country` = '".$country."', `close_hour` = '".$close_hour."', `open_hour` = '".$open_hour."', `image` = '".$image."' WHERE `pc_store`.`id` = '".$shop_id."';";

if ($conn->query($sql_update_shop) === TRUE) {
	echo "|-SUCCESS-|";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
dbclose();



?>
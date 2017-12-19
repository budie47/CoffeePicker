<?php

include 'dbconn.php';
session_start();
$connList = dbcon();
  $id  = "null";
 $shop_id = $_SESSION['shop_id'];

if($connList){
	$sql_get_shop_name = "SELECT name,address,district,town,postcode,state,country,close_hour,open_hour,store_no,admin_id,image FROM `pc_store` WHERE id =  '". $shop_id."'";

	    $resultList = $connList->query($sql_get_shop_name);
	    if ($resultList->num_rows > 0) {

	    	 while($row = $resultList->fetch_assoc()) {
	    	 	 $name = $row["name"];
	    	 	 $address = $row["address"];
	    	 	 $district = $row["district"];
	    	 	 $postcode = $row["postcode"];
	    	 	 $town = $row["town"];
	    	 	 $state = $row["state"];
	    	 	 $country = $row["country"];
	    	 	 $close_hour = $row["close_hour"];
	    	 	 $open_hour = $row["open_hour"];
	    	 	 $store_no = $row["store_no"];
	    	 	 $admin_id = $row["admin_id"];
	    	 	 $image = $row["image"];

	    	 	 $string = $name."-|-".$address."-|-".$district."-|-".$postcode."-|-".$state."-|-".$country."-|-".$open_hour."-|-".$close_hour."-|-".$store_no."-|-".$admin_id."-|-". $town."-|-".$image;
	    	 	 echo $string;

	    	 }

	    }
	}

  ?>
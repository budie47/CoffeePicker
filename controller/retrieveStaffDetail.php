<?php

include 'dbconn.php';
session_start();
$connList = dbcon();
  $id  = "null";
 $shop_id = $_SESSION['shop_id'];
 $staff_id = $_POST['staff_id'];

if($connList){
	$sql_get_staff_detail = "SELECT username, first_name, last_name, address, email,phone_no FROM `pc_staff` WHERE id =  '". $staff_id."' AND store_id = '".$shop_id."'";

	    $resultList = $connList->query($sql_get_staff_detail);
	    if ($resultList->num_rows > 0) {

	    	 while($row = $resultList->fetch_assoc()) {
	    	 	 $username = $row["username"];
	    	 	 $first_name = $row["first_name"];
	    	 	 $last_name = $row["last_name"];
	    	 	 $address = $row["address"];
	    	 	 $email = $row["email"];
	    	 	 $phone_no = $row["phone_no"];
	    	 	
	    	 	 $string = $username."-|-".$first_name."-|-".$last_name."-|-".$address."-|-".$email."-|-".$phone_no;
	    	 	 echo $string;

	    	 }

	    }
	}

  ?>
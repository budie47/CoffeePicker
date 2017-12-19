<?php

include 'dbconn.php';
session_start();
$connList = dbcon();
  $id  = "null";
 $shop_id = $_SESSION['shop_id'];
 $menu_id = $_POST['menu_id'];

if($connList){
	$sql_get_staff_detail = "SELECT id,menu_name,status FROM `pc_menu_master` WHERE id =  '". $menu_id."' AND store_id = '".$shop_id."'";

	    $resultList = $connList->query($sql_get_staff_detail);
	    if ($resultList->num_rows > 0) {

	    	 while($row = $resultList->fetch_assoc()) {
	    	 	 $menu_name = $row["menu_name"];
	    	 	 $status = $row["status"];
	    	 	 $id = $row["id"];
	    	 	
	    	 	 $string = $id."-|-".$menu_name."-|-".$status;
	    	 	 echo $string;

	    	 }

	    }
	}

  ?>
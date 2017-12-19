<?php

include 'dbconn.php';
session_start();
$connList = dbcon();
  $id  = "null";
 $item_id = $_POST['item_id'];
 $menu_id = $_POST['menu_id'];

if($connList){
	$sql_get_item_detail = "SELECT menu_id,id,item_name,price,size,status,image FROM `pc_menu_detail` WHERE id =  '". $item_id."' AND menu_id = '".$menu_id."'";

	    $resultList = $connList->query($sql_get_item_detail);
	    if ($resultList->num_rows > 0) {

	    	 while($row = $resultList->fetch_assoc()) {
	    	 	 $menu_id = $row["menu_id"];
	    	 	 $item_id = $row["id"];
	    	 	 $item_name = $row["item_name"];
	    	 	 $price = $row["price"];
	    	 	 $status = $row["status"];
	    	 	 $size = $row["size"];
	    	 	 $image = $row["image"];
	    	 	
	    	 	 $string = $menu_id."-|-".$item_id."-|-".$item_name."-|-".$price."-|-".$status."-|-".$size."-|-".$image;
	    	 	 echo $string;

	    	 }

	    }
	}

  ?>
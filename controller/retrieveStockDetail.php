<?php

include 'dbconn.php';
session_start();
$connList = dbcon();
 $id  = "null";
 $shop_id = $_SESSION['shop_id'];
 $stock_id = $_POST['stock_id'];

if($connList){
	$sql_get_stock_detail = "SELECT id,name,stock_no,quantity,price,expired_date,unit,price_per_unit FROM `pc_stock` WHERE id =  '". $stock_id."' AND store_id = '".$shop_id."'";
		//echo $sql_get_stock_detail;

	    $resultList = $connList->query($sql_get_stock_detail);
	    if ($resultList->num_rows > 0) {

	    	 while($row = $resultList->fetch_assoc()) {
	    	 	 $id = $row["id"];
	    	 	 $name = $row["name"];
	    	 	 $stock_no = $row["stock_no"];
	    	 	 $quantity = $row["quantity"];
	    	 	 $price = $row["price"];
	    	 	 $expired_date = $row["expired_date"];
	    	 	 $unit = $row["unit"];
	    	 	 $price_per_unit = $row["price_per_unit"];
	    	 	//       	0			1			2				3				4				5				6				7
	    	 	 $string = $id."-|-".$name."-|-".$stock_no."-|-".$quantity."-|-".$unit."-|-".$price_per_unit."-|-".$price."-|-".$expired_date;
	    	 	 echo $string;

	    	 }

	    }
	}

  ?>
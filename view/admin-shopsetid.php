<?php
include '../controller/dbconn.php';
session_start();
$connList = dbcon();
  $id  = "null";
  $id_get = $_GET['id'];
  if($id_get == "0"){
  	$id_get = $_SESSION['shop_id'];
  }else {
  	$_SESSION['shop_id'] = $_GET['id'];
  }


if($connList){
	$sql_get_shop_name = "SELECT name FROM `pc_store` WHERE id =  '".$_SESSION['shop_id']."'";

	    $resultList = $connList->query($sql_get_shop_name);
	    if ($resultList->num_rows > 0) {

	    	 while($row = $resultList->fetch_assoc()) {
	    	 	 $name = $row["name"];
	    	 	 $_SESSION['shop_name'] = $name;
	    	 }

	    }
	}

	header('Location: admin-shopdashboard.php');
?>
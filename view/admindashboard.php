<?php
session_start();
	if (!isset($_SESSION['id'])) {
		header('Location: ../index.php');
	}
	$user_id = $_SESSION['id'];
	$user_name = $_SESSION['name'];

	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Coffee Picker | Admin Dashboard</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
		<link type="text/css" href="../lib/timepicker/css/bootstrap-timepicker.min.css" />
		<link type="text/css" href="../lib/css/flexdatalist/jquery.flexdatalist.css" />
		<link rel="stylesheet" type="text/css" href="../lib/font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="../css/sidemenu.css">
		<link rel="stylesheet" type="text/css" href="../css/cp-style.css">

		<script src="../lib/jquery-3.2.1.min.js"></script>
		<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="../lib/timepicker/js/bootstrap-timepicker.js"></script>
		<!-- <script src="../lib/js/flexdatalist/jquery.flexdatalist.js"></script> -->
		<script type="text/javascript" src="../controller/shop-controller.js"></script>

	</head>

	<body>
		<nav  class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navbar-header navbar-right toright">
				<span class="navbar-brand white" style="margin-right: 20px;" href="#">Welcome <?php echo $user_name; ?></span>
				<span class="navbar-brand white" style="margin-right: 20px;" href="#"><a onclick="logout()" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></span>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left mobileright">
					<li> <a class="white" href="admindashboard.php">COFFEE PICKER</a></li>
				</ul>
			</div>
		</nav>

		<?php include 'admin/sidemenu.php';?>

		<div class="container">
			<div id="cp-home">
				<div class="shop-btn-menu">
					<button type="button" class="btn btn-primary btn-shop" data-toggle="modal" data-target="#CP_SHOP_ADD"><i class="fa fa-plus" aria-hidden="true"></i> Add New Shop</button>
				</div>
				<div class="row" id="admin-list-reload">
					
				</div>
			</div>
		</div>

		<?php require 'admin/addNewShopModal.php' ?>
		<script src="../controller/logout.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#cp-home").show();
				$("#admin-list-reload").load("admin/admin-list-shop.php");
			})
		</script>
	</body>
	</html>


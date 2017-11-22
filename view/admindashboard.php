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
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/sidemenu.css">
	<link rel="stylesheet" type="text/css" href="../css/cp-style.css">
	<script src="../lib/jquery-3.2.1.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>


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


	<?php
	include 'admin/sidemenu.php';
	?>

	<div class="container">
		<div id="cp-home">
			<div class="shop-btn-menu">
				<button type="button" class="btn btn-primary btn-shop" data-toggle="modal" data-target="#CP_SHOP_ADD"><i class="fa fa-plus" aria-hidden="true"></i> Add New Shop</button>
			</div>
			<div class="row">

				<div class="shop-list">
				<div class="col-xs-6 col-md-3 shop-detail">
					<a href="admin-shopdashboard.php" class="thumbnail">
						<label class="shop-title">Coffee Bean House</label><span >
							<i class="fa fa-pencil glyphicon" style="color:green";float:left; aria-hidden="true"></i></span>
						 <i class="fa fa-trash glyphicon" style="color:red";float:left;  aria-hidden="true"></i></span><br />

						<span>Lot94, Jalan Lapangan Terbang Subang, Saujana, 40150 Shah Alam, Selangor</span><br />
						<span>Operation Hour : <b>1000 - 2100</b> </span><br />
						<span>Status : <b>OPEN</b></span>

					</a>
				</div>
				<div class="col-xs-6 col-md-3 shop-detail">
					<a href="#" class="thumbnail">
						<label class="shop-title">Kedai Kopi Saujana</label><span >
							<i class="fa fa-pencil glyphicon" style="color:green";float:left; aria-hidden="true"></i></span>
						 <i class="fa fa-trash glyphicon" style="color:red";float:left;  aria-hidden="true"></i></span><br />

						<span>Lot94, Jalan Lapangan Terbang Subang, Saujana, 40150 Shah Alam, Selangor</span><br />
						<span>Operation Hour : <b>1000 - 2100</b> </span><br />
						<span>Status : <b>OPEN</b></span>

					</a>
				</div>
				<div class="col-xs-6 col-md-3 shop-detail">
					<a href="#" class="thumbnail">
						<label class="shop-title">Kedai Kopi Saujana</label><span >
							<i class="fa fa-pencil glyphicon" style="color:green";float:left; aria-hidden="true"></i></span>
						 <i class="fa fa-trash glyphicon" style="color:red";float:left;  aria-hidden="true"></i></span><br />

						<span>Lot94, Jalan Lapangan Terbang Subang, Saujana, 40150 Shah Alam, Selangor</span><br />
						<span>Operation Hour : <b>1000 - 2100</b> </span><br />
						<span>Status : <b>OPEN</b></span>

					</a>
				</div>
			</div>
		</div>

		</div>


	</div>
	<?php require 'admin/addNewShopModal.php' ?>
<script src="../controller/logout.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#cp-home").show();
})
</script>


</body>
</html>

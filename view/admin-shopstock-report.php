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
<?php require 'admin/header-admin-shopdashboard.php'; ?>
<body>

<?php require 'admin/nav-admindashboard.php'; ?>
<?php require 'admin/sidemenu-admin-shopdashboard.php'; ?>

	<div class="container admin-shop">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
				 <div class="panel-heading">Stock Expired Date</div>
					<div class="panel-body">

				 </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				 <div class="panel-heading">Stock Status</div>
					<div class="panel-body">

				 </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
				 <div class="panel-heading">Summary Quantity Per Stock</div>
					<div class="panel-body">

				 </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				 <div class="panel-heading">Stock Status</div>
					<div class="panel-body">

				 </div>
				</div>
			</div>
		</div>

	</div>
	<?php
		include 'admin/updateShopSettingModal.php';
	 ?>
<script src="../controller/logout.js"></script>
<script src="../controller/maintain-stock-controller.js"></script>

</body>
</html>

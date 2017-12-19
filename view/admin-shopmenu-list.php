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
	<?php 
	require 'admin/sidemenu-admin-shopdashboard.php'; 
	include 'admin/updateItemModal.php';
	include 'admin/addNewMenuModal.php';
	include 'admin/addNewItemModal.php';
	include 'admin/updateMenuModal.php';
	include 'admin/updateShopSettingModal.php';
	?>

	<div class="container admin-shop">
		<div class="row">
			<div class="col-md-12" >
				<div class="panel panel-default" id="menu-list">
					<div class="panel-heading">Menu List</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12" style="padding:15px;">
								<button type="button" class="btn btn-primary btn-shop" data-toggle="modal" data-target="#CP_MENU_ADD"><i class="fa fa-plus" aria-hidden="true"></i> Add Menu</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="div_menu_table_list">
									
								</div>
								
							</div>

						</div>

					</div>
				</div>

				<div class="panel panel-default" id="menu-item-list">
					<div class="panel-heading" id="panel-menu-item-list">Menu Item List</div>
					<div class="panel-body">
						<div class="row">						<p id="browse_menu_id" class="cp-hidden"></p>
							<div class="col-md-12" style="padding:15px;">
								<button type="button" class="btn btn-primary " id="CP_MENU_ITEM_LIST_BACK"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Menu</button>
								<button type="button" class="btn btn-primary btn-shop" data-toggle="modal" data-target="#CP_MENU_ITEM_ADD"><i class="fa fa-plus" aria-hidden="true"></i> Add Item</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="div_menu_detail_table_list">
									
								</div>
								
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>



	</div>
	<?php


	?>
	<script src="../controller/logout.js"></script>
	<script src="../controller/maintain-menu-controller.js"></script>

</body>
</html>

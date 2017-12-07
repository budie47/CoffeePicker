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
		 <div class="col-md-12" >
			<div class="panel panel-default">
			 <div class="panel-heading">Stock List</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12" style="padding:15px;">
							<button type="button" class="btn btn-primary btn-shop" data-toggle="modal" data-target="#CP_STOCK_ADD"><i class="fa fa-plus" aria-hidden="true"></i> Add Stock</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-bordered" id="stock_list_table">
							 <thead>
								 <tr>
									 <th>Name</th>
									 <th>Stock No</th>
									 <th>Quantity</th>
									 <th>Unit</th>
									 <th>Price Per Unit</th>
									 <th>Total Price</th>
									 <th>Expired Date</th>
									 <th>Status</th>
									 <th style="width:9%">Action</th>
								 </tr>
							 </thead>
							 <tbody>
								 <tr>
									 <td>Coffee Arabica Powder</td>
									 <td>STK-0021102</td>
									 <td>2</td>
									 <td>Packet</td>
									 <td>RM 12.50</td>
									 <td>RM 25.00</td>
									 <td>224-11-2018</td>
									 <td>OK</td>
									 <td>
										 <div class="btn-group">
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CP_STAFF_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
											<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
										</div>
									 </td>
								 </tr>
								 <tr>
									 <td>Coffee Arabica Powder</td>
									 <td>STK-0021102</td>
									 <td>2</td>
									 <td>Packet</td>
									 <td>RM 12.50</td>
									 <td>RM 25.00</td>
									 <td>224-11-2018</td>
									 <td>OK</td>
									 <td>
										 <div class="btn-group">
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CP_STAFF_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
											<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
										</div>
									 </td>
								 </tr>
								 <tr>
									 <td>Coffee Arabica Powder</td>
									 <td>STK-0021102</td>
									 <td>2</td>
									 <td>Packet</td>
									 <td>RM 12.50</td>
									 <td>RM 25.00</td>
									 <td>224-11-2018</td>
									 <td>OK</td>
									 <td>
										 <div class="btn-group">
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CP_STAFF_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
											<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
										</div>
									 </td>
								 </tr>

							 </tbody>
						 </table>
						</div>

					</div>
			 </div>
			</div>
		 </div>
		</div>

	</div>
	<?php
	include 'admin/addNewStockModal.php';
include 'admin/updateShopSettingModal.php';
	 ?>
<script src="../controller/logout.js"></script>
<script src="../controller/maintain-stock-controller.js"></script>

</body>
</html>

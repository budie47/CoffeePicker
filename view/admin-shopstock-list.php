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
					<table class="table table-bordered" id="stock_list_table">
					 <thead>
						 <tr>
							 <th>Firstname</th>
							 <th>Lastname</th>
							 <th>Email</th>
						 </tr>
					 </thead>
					 <tbody>
						 <tr>
							 <td>John</td>
							 <td>Doe</td>
							 <td>john@example.com</td>
						 </tr>
						 <tr>
							 <td>Mary</td>
							 <td>Moe</td>
							 <td>mary@example.com</td>
						 </tr>
						 <tr>
							 <td>July</td>
							 <td>Dooley</td>
							 <td>july@example.com</td>
						 </tr>
					 </tbody>
				 </table>
			 </div>
			</div>
		 </div>
		</div>



	</div>
<script src="../controller/logout.js"></script>
<script src="../controller/maintain-staff-controller.js"></script>

</body>
</html>

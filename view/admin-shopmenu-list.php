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
			 <div class="panel-heading">Menu List</div>
				<div class="panel-body">
					<table class="table table-bordered" id="staff_list_table">
					 <thead>
						 <tr>
							 <th>Menu Code</th>
							 <th>Menu Name</th>
							 <th>Status</th>
							 <th>Action</th>
						 </tr>
					 </thead>
					 <tbody>
						 <tr>
							 <td>MN002112</td>
							 <td>Coffee</td>
							 <td>Active</td>
							 <td>
								 <div class="btn-group">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CP_STAFF_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
								</div>
							 </td>
						 </tr>
						 <tr>
							 <td>MN002112</td>
							 <td>Coffee</td>
							 <td>Active</td>
							 <td>
								 <div class="btn-group">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CP_STAFF_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
									<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
								</div>
							 </td>
						 </tr>
						 <tr>
							 <td>MN002112</td>
							 <td>Coffee</td>
							 <td>Active</td>
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
	<?php
	include 'admin/updateShopSettingModal.php';
	 ?>
<script src="../controller/logout.js"></script>
<script src="../controller/maintain-staff-controller.js"></script>

</body>
</html>

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
		   <div class="panel-heading">Staff List

			 </div>
		    <div class="panel-body">
					<div class="row">
						<div class="col-md-12" style="padding:15px;">
							<button type="button" class="btn btn-primary btn-shop" data-toggle="modal" data-target="#CP_STAFF_ADD"><i class="fa fa-plus" aria-hidden="true"></i> Add Staff</button>
						</div>
					</div>

						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered" id="staff_list_table">
								 <thead>
									 <tr>
										 <th>Name</th>
										 <th>Username</th>
										 <th>Email</th>
										 <th>Phone No</th>
										 <th>Status</th>
										 <th style="width:9%">Action</th>
									 </tr>
								 </thead>
								 <tbody>
									 <tr>
										 <td>Hasif Hamdan</td>
										 <td>asip46</td>
										 <td>asip46@gmail.com</td>
										 <td>+6014447456</td>
										 <td>Active</td>
										 <td>
											 <div class="btn-group">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CP_STAFF_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
												<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</div>
										 </td>
									 </tr>
									 <tr>
										 <td>Muz Affan</td>
										 <td>muz46</td>
										 <td>muz46@gmail.com</td>
										 <td>+6014447456</td>
										 <td>Active</td>
										 <td>
											 <div class="btn-group">
												<button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
												<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</div>
										 </td>
									 </tr>
									 <tr>
										 <td>Hafiz Din</td>
										 <td>din00</td>
										 <td>din00@gmail.com</td>
										 <td>+6014447456</td>
										 <td>Active</td>
										 <td>
											 <div class="btn-group">
												<button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
												<button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</div>
										 </td>
									 </tr>
									 <tr>
										 <td>Syukri Othaman</td>
										 <td>syuk46</td>
										 <td>asip46@gmail.com</td>
										 <td>+6014447456</td>
										 <td>Active</td>
										 <td>
											 <div class="btn-group">
												<button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
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
	include 'admin/addNewStaffModal.php';
	include 'admin/updateNewStaffModal.php';
	include 'admin/updateShopSettingModal.php';
	?>
<script src="../controller/logout.js"></script>
<script src="../controller/maintain-staff-controller.js"></script>

</body>
</html>

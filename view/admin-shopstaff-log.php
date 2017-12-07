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
			 <div class="panel-heading">Staff Log</div>
				<div class="panel-body">
					<table class="table table-bordered" id="staff_log_table">
					 <thead>
						 <tr>
							 <th>Name</th>
							 <th>Date Log In</th>
							 <th>Time Log In</th>
							 <th>Date Log Out</th>
							 <th>Time Log Out</th>
						 </tr>
					 </thead>
					 <tbody>
						 <tr>
							 <td>Hasif Hamdan</td>
							 <td>21-11-2017</td>
							 <td>08:00:21</td>
							 <td>21-11-2017</td>
							 <td>18:00:21</td>

						 </tr>
						 <tr>
							 <td>Muz Affan</td>
							 <td>21-11-2017</td>
							 <td>08:00:21</td>
							 <td>21-11-2017</td>
							 <td>18:00:21</td>
						 </tr>
						 <tr>
							 <td>Hafiz Din</td>
							 <td>21-11-2017</td>
							 <td>08:00:21</td>
							 <td>+6014447456</td>
							 <td>18:00:21</td>
						 </tr>
						 <tr>
							 <td>Syukri Othaman</td>
							 <td>21-11-2017</td>
							 <td>08:00:21</td>
							 <td>21-11-2017</td>
							 <td>18:00:21</td>
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

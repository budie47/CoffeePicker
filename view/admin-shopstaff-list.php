<?php
	session_start();
	if (!isset($_SESSION['id'])) {
		header('Location: ../index.php');
	}
	$admin_id = $_SESSION['id'];
	$admin_name = $_SESSION['name'];

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
		   <div class="panel-heading">Staff List</div>
		    <div class="panel-body">
					<table class="table table-bordered" id="staff_list_table">
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

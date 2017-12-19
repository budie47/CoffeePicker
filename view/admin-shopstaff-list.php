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
								<button type="button" class="btn btn-primary btn-shop" ><i class="fa fa-plus" aria-hidden="true"></i> Add Staff</button>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div id="div_staff_table_list">
									
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

	</div>

	<script src="../controller/logout.js"></script>
	<script src="../controller/maintain-staff-controller.js"></script>

</body>
</html>

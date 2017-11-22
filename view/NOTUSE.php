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

	<div class="container" style="margin-left:200px">





	</div>

<script src="../controller/logout.js"></script>


</body>
</html>

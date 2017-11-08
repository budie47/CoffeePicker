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
<head>
	<title>Coffee Picker | Shop Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome-4.7.0/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="../css/sidemenu-shop.css">
	<link rel="stylesheet" type="text/css" href="../css/cp-style.css">

	<script src="../lib/jquery-3.2.1.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>


</head>
<body>

	<nav  class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header navbar-right toright">
			<span class="navbar-brand white" style="margin-right: 20px;" href="#">Welcome <?php echo $admin_name; ?></span>
			<span class="navbar-brand white" style="margin-right: 20px;" href="#"><a onclick="logout()" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></span>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left mobileright">
				<li> <a class="white" href="admindashboard.php">COFFEE PICKER | Kedai Kopi Saujana</a></li>
			</ul>

		</div>

	</nav>

	<div class="nav-side-menu">
	    <div class="brand">Brand Logo</div>
	    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

	        <div class="menu-list">

	            <ul id="menu-content" class="menu-content collapse out">
	                <li class="active">
	                  <a href="#">
	                  <i class="fa fa-shopping-cart fa-lg"></i> Shop Dashboard
	                  </a>
	                </li>

	                <li data-toggle="collapse" data-target="#staff" class="collapsed">
	                  <a href="#"><i class="fa fa-users fa-lg"></i> Maintain Staff <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="staff">
	                  <li>Staff List</li>
	                  <li>Staff Log</li>
	                </ul>
									<li data-toggle="collapse" data-target="#stock" class="collapsed">
										<a href="#"><i class="fa fa-archive fa-lg"></i> Maintain Stock <span class="arrow"></span></a>
									</li>
									<ul class="sub-menu collapse" id="stock">
										<li>Stock List</li>
										<li>Stock Report</li>
									</ul>
									<li data-toggle="collapse" data-target="#menu" class="collapsed">
										<a href="#"><i class="fa fa-file-text-o fa-lg"></i> Maintain Menu <span class="arrow"></span></a>
									</li>
									<ul class="sub-menu collapse" id="menu">
										<li>Menu List</li>
										<li>Item List</li>
									</ul>

	                 <li>
	                  <a href="#">
	                  <i class="fa fa-cog fa-lg"></i> Shop Setting
	                  </a>
	                  </li>

	                 <li>
	                  <a href="#">
	                  <i class="fa fa-arrow-left fa-lg"></i> Back to Shop List
	                  </a>
	                </li>
	            </ul>
	     </div>
	</div>

	<div class="container">


	</div>
	<?php
	include 'admin/addNewShopModal.php';
	?>


<script type="text/javascript">
$(document).ready(function(){
	$("#cp-home").show();
})
function logout(){
	location.href="../controller/logout.php";
}
</script>


</body>
</html>

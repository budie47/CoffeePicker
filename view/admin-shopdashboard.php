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
<link rel="stylesheet" type="text/css" href="../css/shop-dashboard-panel.css">
	<script src="../lib/jquery-3.2.1.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

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
	    <div class="brand">Kedai Kopi Saujana</div>
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

	<div class="container" style="margin-left:200px">

		<div class="row dashboard-stats shop-panel" >
			<div class="col-md-12">
				<div class="col-md-3 col-sm-6">
						<section class="panel panel-box">
								<div class="panel-left panel-icon bg-success">
										<i class="fa fa-dollar text-large stat-icon success-text"></i>
								</div>
								<div class="panel-right panel-icon bg-reverse">
										<p class="size-h1 no-margin countdown_first">9999</p>
										<p class="text-muted no-margin text"><span>Profit</span></p>
								</div>
						</section>
				</div>
				<div class="col-md-3 col-sm-6">
						<section class="panel panel-box">
								<div class="panel-left panel-icon bg-danger">
										<i class="fa fa-shopping-cart text-large stat-icon danger-text"></i>
								</div>
								<div class="panel-right panel-icon bg-reverse">
										<p class="size-h1 no-margin countdown_second">9999</p>
										<p class="text-muted no-margin text"><span>Sales</span></p>
								</div>
						</section>

				</div>
				<div class="col-md-3 col-sm-6">
						<section class="panel panel-box">
								<div class="panel-left panel-icon bg-lovender">
										<i class="fa fa-line-chart text-large stat-icon lovender-text"></i>
								</div>
								<div class="panel-right panel-icon bg-reverse">
										<p class="size-h1 no-margin countdown_third">9999<span class="size-h3">%</span></p>
										<p class="text-muted no-margin text"><span>Growth</span></p>
								</div>
						</section>
				</div>

				<div class="col-md-3 col-sm-6">
						<section class="panel panel-box">
								<div class="panel-left panel-icon bg-info">
										<i class="fa fa-users text-large stat-icon info-text"></i>
								</div>
								<div class="panel-right panel-icon bg-reverse">
										<p class="size-h1 no-margin countdown_fourth">999</p>
										<p class="text-muted no-margin text"><span>Users</span></p>
								</div>
						</section>
				</div>
		</div>
			</div>
			<div class="row">
				<div class="col-md-6">
						<div class="panel panel-default">
								<div class="panel-heading">
										Profit
								</div>
								<div class="panel-body">
									<canvas id="myChart"></canvas>
								</div>
						</div>
				</div>
				<div class="col-md-6">
						<div class="panel panel-default">
								<div class="panel-heading">
										Top Menu

								</div>
								<div class="panel-body">
										<canvas id="menuChart"></canvas>
								</div>
						</div>
				</div>

			</div>


			<div class="col-md-6">
					<div class="panel panel-default">
							<div class="panel-heading">
									Stock Summary
							</div>
							<div class="panel-body">
									This layout uses tabs to demonstrate what you could do with it. It probably makes more sense to use individual pages/templates in a production app.
									<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
							</div>
					</div>
			</div>
			<div class="col-md-3">
					<div class="panel panel-default">
							<div class="panel-heading">
									Menu List
							</div>
							<div class="panel-body">
									This layout uses tabs to demonstrate what you could do with it. It probably makes more sense to use individual pages/templates in a production app.
									<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
							</div>
					</div>
			</div>
			<div class="col-md-3">
					<div class="panel panel-default">
							<div class="panel-heading">
									Staff Log
							</div>
							<div class="panel-body">
									This layout uses tabs to demonstrate what you could do with it. It probably makes more sense to use individual pages/templates in a production app.
									<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
							</div>
					</div>
			</div>






	</div>
	<?php
	include 'admin/addNewShopModal.php';
	?>


<script type="text/javascript">
$(document).ready(function(){
	$("#cp-home").show();
});
function logout(){
	location.href="../controller/logout.php";
}
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August","September","October","November","December"],
        datasets: [{
            label: "Shop Profit in 2017",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45,21,32,42,52,52],
        }]
    },

    // Configuration options go here
    options: {}
});
var ctx1 = document.getElementById('menuChart').getContext('2d');
var myBarChart = new Chart(ctx1, {
    type: 'bar',
    data: [{x:'Latte', y:20}, {x:'Mocha', y:10}],
    options: options
});
</script>


</body>
</html>

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

<script src="../controller/logout.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#cp-home").show();
});
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

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coffee Picker | Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome-4.7.0/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="../css/sidemenu2.css">
	<link rel="stylesheet" type="text/css" href="../css/cp-style.css">

	<script src="../lib/jquery-3.2.1.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>


</head>
<body>

	<nav  class="navbar navbar-static-top" role="navigation" style="margin:0px;background-color:#312A25;">
		<div class="navbar-header navbar-right toright">
			<span class="navbar-brand white" style="margin-right: 20px;" href="#">Welcome Administrator</span>
			<span class="navbar-brand white" style="margin-right: 20px;" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left mobileright">
				<li> <a class="white" href="admindashboard.php">COFFEE PICKER</a></li>
			</ul>

		</div>

	</nav>

	<div class="container">
		<div class="row">
			 <div id="wrapper">
	        <!-- Sidebar -->
	        <div id="sidebar-wrapper">
	            <ul class="sidebar-nav" style="margin-left:0;">
	                <li class="sidebar-brand">

	                        <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;" > <i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i></a>

	                </li>
	                <li>
	                    <a href="#"><i class="fa fa-sort-alpha-asc " aria-hidden="true"> </i> <span style="margin-left:10px;">Section</span>  </a>
	                </li>
	                <li>
	                    <a href="#"> <i class="fa fa-play-circle-o " aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
	                </li>
	                <li>
	                    <a href="#"> <i class="fa fa-puzzle-piece" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
	                </li>
	                <li>
	                    <a href="#"> <i class="fa fa-font" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
	                </li>
	                <li>
	                    <a href="#"><i class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:10px;">Section </span> </a>
	                </li>
	                <li>
	                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span> </a>
	                </li>
	            </ul>
	        </div>
	        <!-- /#sidebar-wrapper -->

	        <!-- Page Content -->
					<div class="container">


						<div class="shop-list">
							<div class="row">
								<div class="col-xs-6 col-md-3 shop-detail">
									<a href="#" class="thumbnail">
										<label class="shop-title">Kedai Kopi Saujana</label><span >
											<i class="fa fa-pencil glyphicon" style="color:green";float:left; aria-hidden="true"></i></span>
										 <i class="fa fa-trash glyphicon" style="color:red";float:left;  aria-hidden="true"></i></span><br />

										<span>Lot94, Jalan Lapangan Terbang Subang, Saujana, 40150 Shah Alam, Selangor</span><br />
										<span>Operation Hour : <b>1000 - 2100</b> </span><br />
										<span>Status : <b>OPEN</b></span>

									</a>
								</div>
								<div class="col-xs-6 col-md-3 shop-detail">
									<a href="#" class="thumbnail">
										<label class="shop-title">Kedai Kopi Saujana</label><span >
											<i class="fa fa-pencil glyphicon" style="color:green";float:left; aria-hidden="true"></i></span>
										 <i class="fa fa-trash glyphicon" style="color:red";float:left;  aria-hidden="true"></i></span><br />

										<span>Lot94, Jalan Lapangan Terbang Subang, Saujana, 40150 Shah Alam, Selangor</span><br />
										<span>Operation Hour : <b>1000 - 2100</b> </span><br />
										<span>Status : <b>OPEN</b></span>

									</a>
								</div>
								<div class="col-xs-6 col-md-3 shop-detail">
									<a href="#" class="thumbnail">
										<label class="shop-title">Kedai Kopi Saujana</label><span >
											<i class="fa fa-pencil glyphicon" style="color:green";float:left; aria-hidden="true"></i></span>
										 <i class="fa fa-trash glyphicon" style="color:red";float:left;  aria-hidden="true"></i></span><br />

										<span>Lot94, Jalan Lapangan Terbang Subang, Saujana, 40150 Shah Alam, Selangor</span><br />
										<span>Operation Hour : <b>1000 - 2100</b> </span><br />
										<span>Status : <b>OPEN</b></span>

									</a>
								</div>
							</div>
						</div>
					</div>





	        <!-- /#page-content-wrapper -->


	    <!-- /#wrapper -->


	    <script>
	    $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	    });
	    </script>



		</div>
	</div>
</body>
</html>

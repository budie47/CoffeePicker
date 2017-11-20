<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coffee Picker</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/datatables.css">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/cp-style.css">
  <link rel="stylesheet" type="text/css" href="css/half-slider.css">

	<script src="lib/jquery-3.2.1.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="lib/datatables/datatables.js"></script>

</head>
<body class="">
  <div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="index.php">COFFEE PICKER</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="index.php">Home</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle active" data-toggle="dropdown">Shop <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="shop.php">Search Shop</a></li>
								<li><a href="menu.php">Browse Menu</a></li>
								<li><a href="order.php">Your Order</a></li>
							</ul>
						</li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <b class="caret"></b></a>
              <ul class="dropdown-menu">
								<li><a href="login.php">User</a></li>
								<li class="divider"></li>
                <li><a href="login.php">Shop Manager</a></li>

              </ul>
            </li>
          </ul>
        </div>

    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->


<div class="container" style="margin-top:90px">

	<div class="row">
	 <div class="col-md-3" >
	  <div class="panel panel-default">
	   <div class="panel-heading">Search Filter</div>
	    <div class="panel-body">
				<form>
				  <div class="form-group">
				    <label for="country">Country:</label>
				    <input type="text" class="form-control" id="country_search" value="Malaysia">
				  </div>
				  <div class="form-group">
				    <label for="state">State:</label>
				    <select class="form-control" id="state_search">
							<option>Melaka</option>
							<option>Johor</option>
							<option>Kedah</option>
							<option>N.Sembilan</option>
							<option>Kuala Lumpur</option>
							<option>Pahang</option>
						</select>
				  </div>
					<div class="form-group">
				    <label for="pwd">Select Area:</label>
						<select class="form-control" id="area_search">
							<option>Melaka</option>
							<option>Johor</option>
							<option>Kedah</option>
							<option>N.Sembilan</option>
							<option>Kuala Lumpur</option>
							<option>Pahang</option>
						</select>
				  </div>
				  <button type="submit" class="btn btn-default">Search</button>
				</form>
	   </div>
	  </div>
	 </div>
	 <div class="col-md-9" >
		<div class="panel panel-default">
		 <div class="panel-heading">List of Shop</div>
			<div class="panel-body">
				<input type="text" class="form-control" id="" placeholder="Search your shop here">

				<div class="row">
						<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
							<ul class="shop-list-list">
								<li>
									<time datetime="2014-07-20">
										<span class="day">4</span>
										<span class="month">Jul</span>
										<span class="year">2014</span>
										<span class="time">ALL DAY</span>
									</time>
									<img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
									<div class="info">
										<h2 class="title">Independence Day</h2>
										<p class="desc">United States Holiday</p>
									</div>
									<div class="social">
										<ul>
											<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
											<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
											<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
										</ul>
									</div>
								</li>

								<li>
									<time datetime="2014-07-20 0000">
										<span class="day">8</span>
										<span class="month">Jul</span>
										<span class="year">2014</span>
										<span class="time">12:00 AM</span>
									</time>
									<div class="info">
										<h2 class="title">One Piece Unlimited World Red</h2>
										<p class="desc">PS Vita</p>
										<ul>
											<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
											<li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>
										</ul>
									</div>
									<div class="social">
										<ul>
											<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
											<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
											<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
										</ul>
									</div>
								</li>

								<li>
									<time datetime="2014-07-20 2000">
										<span class="day">20</span>
										<span class="month">Jan</span>
										<span class="year">2014</span>
										<span class="time">8:00 PM</span>
									</time>
									<img alt="My 24th Birthday!" src="https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg" />
									<div class="info">
										<h2 class="title">Mouse0270's 24th Birthday!</h2>
										<p class="desc">Bar Hopping in Erie, Pa.</p>
										<ul>
											<li style="width:33%;">1 <span class="glyphicon glyphicon-ok"></span></li>
											<li style="width:34%;">3 <span class="fa fa-question"></span></li>
											<li style="width:33%;">103 <span class="fa fa-envelope"></span></li>
										</ul>
									</div>
									<div class="social">
										<ul>
											<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
											<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
											<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
										</ul>
									</div>
								</li>

								<li>
									<time datetime="2014-07-31 1600">
										<span class="day">31</span>
										<span class="month">Jan</span>
										<span class="year">2014</span>
										<span class="time">4:00 PM</span>
									</time>
									<img alt="Disney Junior Live On Tour!" src="http://www.thechaifetzarena.com/images/main/DL13_PiratePrincess_thumb.jpg" />
									<div class="info">
										<h2 class="title">Disney Junior Live On Tour!</h2>
										<p class="desc"> Pirate and Princess Adventure</p>
										<ul>
											<li style="width:33%;">$49.99 <span class="fa fa-male"></span></li>
											<li style="width:34%;">$29.99 <span class="fa fa-child"></span></li>
										</ul>
									</div>
									<div class="social">
										<ul>
											<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
											<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
											<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>


		 </div>
		</div>
	 </div>
	</div>

</div><!-- /.container -->
</body>
</html>

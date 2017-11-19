<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coffee Picker</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/cp-style.css">
  <link rel="stylesheet" type="text/css" href="css/half-slider.css">

	<script src="lib/jquery-3.2.1.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>

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
				<h4>By State</h4>
				<h4>By Country</h4>
	   </div>
	  </div>
	 </div>
	 <div class="col-md-9" >
		<div class="panel panel-default">
		 <div class="panel-heading">List of Shop</div>
			<div class="panel-body">
				<input type="text" class="form-control" id="" placeholder="Search your shop here">
				<h4>using Data table</h4>
		 </div>
		</div>
	 </div>
	</div>

</div><!-- /.container -->
</body>
</html>

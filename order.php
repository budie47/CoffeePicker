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
	 <div class="col-md-8" >
		<div class="panel panel-default">
		 <div class="panel-heading">Your Order</div>
			<div class="panel-body">
				<table id="cart" class="table table-hover table-condensed">
			    				<thead>
									<tr>
										<th style="width:50%">Item</th>
										<th style="width:10%">Price</th>
										<th style="width:8%">Quantity</th>
										<th style="width:22%" class="text-center">Subtotal</th>
										<th style="width:10%"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-th="Product">
											<div class="row">
												<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
												<div class="col-sm-10">
													<h4 class="nomargin">Mocha</h4>
													<p>Shop Name : LoL Shop</p>
												</div>
											</div>
										</td>
										<td data-th="Price">RM 1.99</td>
										<td data-th="Quantity">
											<input type="number" class="form-control text-center" value="1">
										</td>
										<td data-th="Subtotal" class="text-center">RM 1.99</td>
										<td class="actions" data-th="">

											<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr class="visible-xs">
										<td class="text-center"><strong>Total 1.99</strong></td>
									</tr>
									<tr>
										<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Ordering</a></td>
										<td colspan="2" class="hidden-xs"></td>
										<td class="hidden-xs text-center"><strong>Total RM1.99</strong></td>
										<td><a href="#" class="btn btn-success btn-block">Make Order <i class="fa fa-angle-right"></i></a></td>
									</tr>
								</tfoot>
							</table>
		 </div>
		</div>
	 </div>
	</div>



</div>
</body>
</html>

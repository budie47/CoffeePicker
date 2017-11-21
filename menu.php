<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; ?>
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
	 <div class="col-md-12" >
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
						<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
							<ul class="shop-list-list">
								<li>
									<img src="img/example.jpg" alt="">
									<div class="info">
										<h2 class="title">The Coffee Bean</h2>
										<p class="desc"><b>Address:</b> Jusco Melaka Shopping Center, G39, Lebuh Ayer Keroh, 75450 Melaka</p>
										<p class="desc"><b>Open Hour:</b>10AM–10PM</p>
									</div>

								</li>
							</ul>
						</div>
					</div>

		 </div>
		</div>
	 </div>
	</div>
	<div class="row">
	 <div class="col-md-3" >
	  <div class="panel panel-default">
	   <div class="panel-heading">Order Summary</div>
	    <div class="panel-body">



										<div class="col-md-12">
												<strong>Mocha</strong>
												<div class="pull-right"><span>RM</span><span>200.00</span></div>
										</div>
										<div class="col-md-12">
												<strong>Quantity</strong>
												<div class="pull-right"><span>1</span></div>
												<hr>
										</div>
										<div class="col-md-12">
												<strong>Mocha</strong>
												<div class="pull-right"><span>RM</span><span>200.00</span></div>
										</div>
										<div class="col-md-12">
												<strong>Quantity</strong>
												<div class="pull-right"><span>1</span></div>
												<hr>
										</div>
										<div class="col-md-12">
												<strong>Mocha</strong>
												<div class="pull-right"><span>RM</span><span>200.00</span></div>
										</div>
										<div class="col-md-12">
												<strong>Quantity</strong>
												<div class="pull-right"><span>1</span></div>
												<hr>
										</div>


										<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='order.php'" >Checkout</button>



	   </div>
	  </div>
	 </div>
	 <div class="col-md-9" >
		<div class="panel panel-default">
		 <div class="panel-heading">Order Menu</div>
			<div class="panel-body">
				<input type="text" class="form-control" id="" placeholder="Search your item here">
				<hr />
				<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="thumbnail" >
				<div class="shop-item2">
					<img src="img/ice-mocha.jpg" class="img-responsive item-img">
				</div>

				<div class="caption">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4 price">
								<h3 style="margin:5px auto;"><label>$1</label></h3>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add 2 Cart</a>
							</div>
					</div>

					<p> </p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 item-tumbnail">
				<div class="thumbnail shop-item" >
					<div class="shop-item2">
						<img src="img/mocha2.jpg" class="img-responsive item-img">
					</div>
				<div class="caption">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4 price">
								<h3 style="margin:5px auto;"><label>$2</label></h3>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add 2 Cart</a>
							</div>
					</div>

					<p> </p>
				</div>
			</div>
		</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="thumbnail shop-item" >
					<div class="shop-item2">
						<img src="img/mocha2.jpg" class="img-responsive item-img">
					</div>
				<div class="caption">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4 price">
								<h3 style="margin:5px auto;"><label>$3</label></h3>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add 2 Cart</a>
							</div>
					</div>

					<p> </p>
				</div>
			</div>
		</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="thumbnail" >
					<div class="shop-item2">
						<img src="img/mocha2.jpg" class="img-responsive item-img">
					</div>
				<div class="caption">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4 price">
								<h3 style="margin:5px auto;"><label>$4</label></h3>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8">
							<a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add 2 Cart</a>
							</div>
					</div>

					<p> </p>
				</div>
			</div>
		</div>
		 </div>
		</div>
	 </div>
	</div>

</div><!-- /.container -->
</body>
</html>

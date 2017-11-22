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

												<div class="col-sm-10">
													<h4 class="nomargin">Mocha</h4>

													<p>Size : Large 12oz</p>
													<p>Add Ons : Chocolate Powder Topping</p>
													<p>Comment : Put more Chocolate Topping and less suger</p>
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
										<td><a href="#" class="btn btn-default"><i class="fa fa-angle-left"></i> Continue Ordering</a></td>
										<td colspan="2" class="hidden-xs"></td>
										<td class="hidden-xs text-center"><strong>Total RM1.99</strong></td>
										<td><a href="#" class="btn btn-default btn-block">Make Order <i class="fa fa-angle-right"></i></a></td>
									</tr>
								</tfoot>
							</table>
		 </div>
		</div>
	 </div>
	 <div class="col-md-4" >
		<div class="panel panel-default">
		 <div class="panel-heading">Selected Shop</div>
			<div class="panel-body">
        <div class="row">
            <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
              <ul class="shop-list-list menu-shop-info">
                <li>
                  <!-- <img src="img/example.jpg" alt=""> -->
                  <div class="info menu-shop-detail">
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



</div>
</body>
</html>

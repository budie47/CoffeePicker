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
							<ul class="shop-list-list menu-shop-info">
								<li>
									<img src="img/example.jpg" alt="">
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
  <div class="col-md-3">
    <div class="row" >
     <div class="panel panel-default">
      <div class="panel-heading">Search</div>
       <div class="panel-body">
         <div class="input-group">
            <input type="text" class="form-control" id="" placeholder="Search your item here">
          <span class="input-group-btn">
             <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
          </span>
       </div>
      </div>
     </div>
    </div>
    <div class="row" >
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

  </div>
  <div class="col-md-9">
    <div class="col-md-12">
      <div class="row">
        <div class="panel panel-default">
         <div class="panel-heading">Order Menu</div>
          <div class="panel-body">

            <div class="row">
              <div class="col-xs-12 col-md-12 col-sm-12">
                  <div class="row product-list">

                    <div class="col-md-4 product-list-menu">
                        <section class="panel">
                            <div class="pro-img-box">
                                <img src="img/mocha2.jpg" alt="">
                            </div>
                            <div class="panel-body text-center">
                                <h4>
                                    <a href="#" class="pro-title">
                                        Mocha
                                    </a>
                                </h4>
                                <p class="price">RM 15.00</p>
                                <button type="button" class="btn btn-default btn-sm"  data-toggle="modal" data-target="#CP_MENU_VIEW">VIEW</button>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-4 product-list-menu">
                        <section class="panel">
                            <div class="pro-img-box">
                                <img src="img/mocha2.jpg" alt="">
                            </div>
                            <div class="panel-body text-center">
                                <h4>
                                    <a href="#" class="pro-title">
                                        Americano
                                    </a>
                                </h4>
                                <p class="price">RM 12.00</p>
                                <button type="button" class="btn btn-default btn-sm"  data-toggle="modal" data-target="#CP_MENU_VIEW">VIEW</button>
                            </div>
                        </section>
                    </div>





                  </div>
              </div>
            </div>
            <hr />



         </div>
        </div>

      </div>
    </div>

  </div>


</div><!-- /.container -->
<?php require 'menu_view_detail.php'; ?>
</body>
</html>

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
            <li class="active"><a href="index.php">Home</a></li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
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
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/index-background.jpg" style="width:100%;  opacity:0.6;" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Order Your Coffee Right Now</h1>
          <p>Pick up at your selected shop</p>
          <input type="text" class="form-control" id="" placeholder="Search your shop here">
          <br />
          <p><a class="btn btn-lg btn-default" href=""><i class="fa fa-search" aria-hidden="true"></i> Search</a>
        </p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="img/index-background3.jpg" style="width:100%;  opacity:0.6;" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Browse Menu From All Popular Coffee Shop</h1>
          <p>With COFFEEPICKER, you be able to order from a various coffee shop around you and we guarentee your order will be done before reach the shop.</p>
          <p><a class="btn btn-large btn-default" href="#">Browse Menu</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="img/index-background2.jpg" style="width:100%;  opacity:0.6;" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Manage Your Shop</h1>
          <p>You can use COFFEEPICKER platform for managing your shop</p>
          <p>Click button below for login</p>
          <p><a class="btn btn-large btn-default" href="view">Log in</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>

<div class="container">
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-md-4 text-center">
      <img class="img-square" src="img/coffee.svg">
      <h2>1. Choose Your Coffee</h2>
      <p>You can choose the coffee shop that you like.You can order the coffee from here with out waiting the queue long at the coffee shop.</p>
      <!-- <p><a class="btn btn-default" href="#">View details »</a></p> -->
    </div>
    <div class="col-md-4 text-center">
      <img class="img-square" src="img/menu.svg">
      <h2>2. Place Your Order</h2>
      <p>We proccess your order with the finest and greatest ingrediant. </p>
      <!-- <p><a class="btn btn-default" href="#">View details »</a></p> -->
    </div>
    <div class="col-md-4 text-center">
      <img class="img-square" src="img/store.svg">
      <h2>3. Pick Up Your Coffee</h2>
      <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
      <!-- <p><a class="btn btn-default" href="#">View details »</a></p> -->
    </div>
  </div><!-- /.row -->
  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>

  </footer>

</div><!-- /.container -->
</body>
</html>

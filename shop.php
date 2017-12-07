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
        <div class="row">

          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="input-group">
               <input type="text" class="form-control" id="" placeholder="Search your shop here">
             <span class="input-group-btn">
                <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
             </span>
          </div>
            <span>

          </span>
          </div>

        </div>


				<div class="row">
						<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
							<ul class="shop-list-list">

								<li>
									<img src="img/example.jpg" alt="">
									<div class="info">
										<h2 class="title">The Coffee Bean</h2>
										<p class="desc"><b>Address:</b> Jusco Melaka Shopping Center, G39, Lebuh Ayer Keroh, 75450 Melaka</p>
										<p class="desc"><b>Open Hour:</b>10AM–10PM</p>
										<ul>
											<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
											<li style="width:50%;"><i class="fa fa-check" aria-hidden="true"></i> SELECT</li>
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
									<img src="img/example.jpg" alt="">
									<div class="info">
										<h2 class="title">The Coffee Bean</h2>
										<p class="desc"><b>Address:</b> Jusco Melaka Shopping Center, G39, Lebuh Ayer Keroh, 75450 Melaka</p>
										<p class="desc"><b>Open Hour:</b>10AM–10PM</p>
										<ul>
											<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
											<li style="width:50%;"><i class="fa fa-check" aria-hidden="true"></i> SELECT</li>
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
									<img src="img/example.jpg" alt="">
									<div class="info">
										<h2 class="title">The Coffee Bean</h2>
										<p class="desc"><b>Address:</b> Jusco Melaka Shopping Center, G39, Lebuh Ayer Keroh, 75450 Melaka</p>
										<p class="desc"><b>Open Hour:</b>10AM–10PM</p>
										<ul>
											<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
											<li style="width:50%;"><i class="fa fa-check" aria-hidden="true"></i> SELECT</li>
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

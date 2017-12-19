<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; ?>
<body class="">
<?php require 'public-navbar.php'; ?>

<!-- <script src="controller//js/bootstrap.min.js"></script> -->
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

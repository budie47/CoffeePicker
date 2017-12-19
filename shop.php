<?php 
include 'controller/dbconn.php';
session_start();
	if (!isset($_SESSION["user_id"])) {
		header('Location: user-login.php');
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; ?>
<body class="">
<?php require 'public-navbar.php'; ?>

<script src="controller/public-shop-controller.js"></script>
<div class="container" style="margin-top:90px">

	<div class="row">
	 <div class="col-md-3" >
	  <div class="panel panel-default">
	   <div class="panel-heading">Search Filter</div>
	    <div class="panel-body">
				<form>
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
							<div id="div-all-shop-list">
								

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

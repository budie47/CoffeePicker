<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; ?>
<body>	<div class="navbar-wrapper">
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

<!-- 						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="shop.php">Search Shop</a></li>
								<li><a href="menu.php">Browse Menu</a></li>
								<li><a href="order.php">Your Order</a></li>
							</ul>
						</li> -->

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="user-login.php">User</a></li>
								<li class="divider"></li>
								<li><a href="staff-login.php">Staff</a></li>
                <li><a href="login.php">Shop Manager</a></li>

              </ul>
            </li>
          </ul>
        </div>

    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->

	<div class="container">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 login-box center">
			<div class="form-group logo-div">
				<img src="img/cp-logo.png" class="img-circle logo" alt="Coffee Picker logo">
			</div>
			<div class="form-group">
				<h3 class="center">COFFEE PICKER</h3>
			</div>
			<div class="form-group">
				<label for="login-username">Username</label>
				<input type="text" class="form-control" id="login-username" >
			</div>
			<div class="form-group">
				<label for="login-password">Password</label>
				<input type="password" class="form-control" id="login-password" >
			</div>
			<div class="form-group">
				<button type="button" class="btn btn-default btn-block" id="CP_LOGIN">LOGIN</button>
			</div>
			<a href="#" data-toggle="modal" data-target="#CP_PUBLIC_REGISTER">Sign Up Here</a>

		</div>

	</div>
	<?php
	include 'view/public-registerModal.php';
	?>

	<script src="controller/login-controller.js"></script>

	<script type="text/javascript">

	$(document).ready(function(){
		//open register link
		$("#CP_LOGIN").click(function(e){
			e.preventDefault();
			var username = $("#login-username").val();
			var password = $("#login-password").val();
			if(username !== "" || password !== ""){
				var data = {
					username:username,
					password:password,
					type:"PUBLIC"
				}
				loginUser(data)
			}else{
				alert("Please enter the login information correctly");
			}


		})


	});
	</script>
</body>
</html>

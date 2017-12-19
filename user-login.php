<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; ?>
<body>
<?php require 'public-navbar.php'; ?>

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
			<a href="#" data-toggle="modal" data-target="#CP_REGISTER">Sign Up Here</a>

		</div>

	</div>
	<?php
	include 'view/registerModal.php';
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
					type:"ADMIN"
				}
				login(data)
			}else{
				alert("Please enter the login information correctly");
			}


		})


	});
	</script>
</body>
</html>

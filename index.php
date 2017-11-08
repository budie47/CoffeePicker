<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coffee Picker</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/cp-style.css">
	<script src="lib/jquery-3.2.1.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>


</head>
<body>

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
				<input type="text" class="form-control" id="login-username">
			</div>
			<div class="form-group">
				<label for="login-password">Password</label>
				<input type="password" class="form-control" id="login-password">
			</div>
			<div class="form-group">
				<button type="button" class="btn btn-default btn-block" onclick="location.href = 'view/admindashboard2.php'">LOGIN</button>
			</div>


		</div>

	</div>

</body>
</html>

<?php
$user_name = "staff_test";

 ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'admin/header-admin-shopdashboard.php'; ?>
<body>

<?php require 'admin/nav-admindashboard.php'; ?>
<?php require 'admin/sidemenu-staff-shopdashboard.php'; ?>

	<div class="container admin-shop" >
		<div class="row">
		 <div class="col-md-8" >
		  <div class="panel panel-default">
		   <div class="panel-heading">New Order</div>
		    <div class="panel-body">
					<table class="table table-bordered" id="staff_list_table">
					 <thead>
						 <tr>
							 <th>Order No</th>
							 <th>Customer Name</th>
							 <th>Date Time</th>
							<th>Total Price</th>
							<th>Action</th>
						 </tr>
					 </thead>
					 <tbody>
						 <tr>
							 <td>CBH001002448</td>
							 <td>Bruce Wayne</td>
							 <td>21-11-2017 11:31:22</td>
							 <td>RM 15.90</td>
							 <td>
								 <button type="button" class="btn btn-default">View Detail</button>
							 </td>
						 </tr>
					 </tbody>
				 </table>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-4" >
			<div class="panel panel-default">
			 <div class="panel-heading">Today Order History</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-bordered" id="">
							 <thead>
								 <tr>
									 <th>Order No</th>
									 <th>Date Time</th>
									<th>Total Price</th>
								 </tr>
							 </thead>
							 <tbody>
								 <tr>
									 <td>CBH001002448</td>
									 <td>11:31:22</td>
									 <td>RM 15.90</td>
								 </tr>
								 <tr>
									 <td>CBH001002449</td>
									 <td>11:40:22</td>
									 <td>RM 15.90</td>
								 </tr>
								 <tr>
									 <td>CBH001002450</td>
									 <td>11:50:22</td>
									 <td>RM 15.90</td>
								 </tr>
								 <tr>
										<td colspan="2">Total:</td>
										<td>RM 180</td>
								 </tr>
							 </tbody>
						 </table>
						</div>

					</div>
			 </div>
			</div>
		 </div>
		</div>


	</div>


<script src="../controller/logout.js"></script>



</body>
</html>

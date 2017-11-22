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
		   <div class="panel-heading">Order Detail | Order No : CBH001002448</div>
		    <div class="panel-body">
					<table class="table table-bordered" id="staff_list_table">
					 <thead>
						 <tr>
							 <th>Order No</th>
							 <th>Customer Name</th>
               <th>Item</th>
               <th>Quantity</th>
							 <th>Date Time</th>
							<th>Price</th>
              <th>Total Price</th>
						 </tr>
					 </thead>
					 <tbody>
						 <tr>
							 <td>CBH001002448</td>
							 <td>Bruce Wayne</td>
               <td>12oz Americano</td>
               <td>1</td>
							 <td>21-11-2017 11:31:22</td>
							 <td>RM 15.90</td>
							 <td>RM 15.90</td>
						 </tr>
             <tr>
               <td>CBH001002448</td>
               <td>Bruce Wayne</td>
                <td>12oz Americano</td>
                <td>1</td>
               <td>21-11-2017 11:31:22</td>
               <td>RM 15.90</td>
               <td>RM 15.90</td>
             </tr>
             <tr>
               <td>CBH001002448</td>
               <td>Bruce Wayne</td>
                <td>12oz Americano</td>
                <td>1</td>
               <td>21-11-2017 11:31:22</td>
               <td>RM 15.90</td>
               <td>RM 15.90</td>
             </tr>
             <tr>
                <td colspan="6">Total:</td>
                <td>RM 180</td>
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
							<table class="table " id="">
							 <tbody>
								 <tr>
                   <td colspan="2">Order Number : CBH001002448</td>
								 </tr>
                 <tr>
                    <td colspan="2">Date Time : 24-11-2017 11:40:22</td>
                 </tr>
								 <tr>
									 <td>Cashier: Syukri</td>
									 <td></td>
								 </tr>
								 <tr>
									 <td>Subtotal</td>
									 <td>RM 24.40</td>
								 </tr>
                 <tr>
                   <td>Tax</td>
                   <td>RM 100</td>
                 </tr>
                 <tr>
                   <td>CASH SALE</td>
                   <td>RM 124.40</td>
                 </tr>
                 <tr>
                   <td>Cash Tendered</td>
                   <td>RM 150.40</td>
                 </tr>
								 <tr>
                   <td colspan="2">

                        <button type="button" class="btn btn-success btn-block">PAY</button>

                   </td>


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

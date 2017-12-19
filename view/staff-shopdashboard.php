<?php
session_start();
include '../controller/dbconn.php';
	if (!isset($_SESSION["user_id"])) {
		header('Location: ../index.php');
	}
	$user_id = $_SESSION["user_id"];
	$user_name = $_SESSION["name"];
	$store_id =  $_SESSION["shop_name"];


	?>
<!DOCTYPE html>
<html lang="en">
<?php require 'admin/header-admin-shopdashboard.php'; ?>
<body>

<?php require 'admin/nav-admindashboard.php'; ?>
<?php require 'admin/sidemenu-staff-shopdashboard.php'; ?>

	<div class="container admin-shop" >
		<div class="row">
		 <div class="col-md-12" >
		  <div class="panel panel-default">
		   <div class="panel-heading">New Order <?php echo $_SESSION["shop_name"]; ?></div>
		    <div class="panel-body">
					<table class="table table-bordered" id="order_list_table">
					 <thead>
						 <tr>
							 <th>Order No</th>
							 <th>Cart No</th>
							 <th>Customer Name</th>
							 <th>Date Time</th>
							 <th>Item Name</th>
							 <th>Price</th>
							 <th>Size</th>
							<th>Comment</th>
							<th>Action</th>
						 </tr>
					 </thead>
					 <tbody>
					 	<?php 

					 	$connList = dbcon();

					 	$sql_get_order_detail = "SELECT pom.id,pom.user_id,pom.store_id,pom.datetime_created,pom.status,pom.total_price,pc.item_id,pc.price,pc.item_name,pc.size,pc.comment,CONCAT(pu.first_name,' ',pu.last_name) AS user_name, pc.id AS cart_id FROM pc_order_master pom INNER JOIN pc_cart pc ON pc.order_id = pom.id  INNER JOIN pc_user pu on pc.user_id = pu.id WHERE pom.store_id ='".$store_id."' AND pc.status != 1";

					 	$resultList = $connList->query($sql_get_order_detail);
					 	if ($resultList->num_rows > 0) {
					 		while($row = $resultList->fetch_assoc()) {

					 			?>

					 			 <tr>
					 				 <td id="CP_ORDER_ACCEPT_ID"><?php echo $row ['id']; ?></td>
					 				 <td id="CP_ORDER_CART_ID"><?php echo $row ['cart_id']; ?></td>
					 				  <th><?php echo $row ['user_name']; ?></th>
					 				  <th><?php echo $row ['datetime_created']; ?></th>
					 				  <th><?php echo $row ['item_name']; ?></th>
					 				  <th><?php echo $row ['price']; ?></th>
					 				  <th><?php echo $row ['size']; ?></th>
					 				 <th><?php echo $row ['comment']; ?></th>
					 				 <td>
					 					 <button type="button" class="btn btn-default" id="CP_STAFF_ACCEPT_ORDER">Pick up</button>
					 				 </td>
					 			 </tr>


					 			<?



					 		}
					 	}
					 	// output data of each row

					 	 ?>

					 </tbody>
				 </table>
		   </div>
		  </div>
		 </div>
		</div>


	</div>


<script src="../controller/logout.js"></script>

<script src="../controller/staff-accept-order-controller.js"></script>

</body>
</html>

<?php
include '../../controller/dbconn.php';
session_start();

$shop_id = $_SESSION['shop_id'];

?>
							<table class="table table-bordered" id="stock_list_table">
							 <thead>
								 <tr>
									 <th>Name</th>
									 <th>Stock No</th>
									 <th>Quantity</th>
									 <th>Unit</th>
									 <th>Price Per Unit</th>
									 <th>Total Price</th>
									 <th>Expired Date</th>
									
									 <th style="width:9%">Action</th>
								 </tr>
							 </thead>
							 <tbody>
							 	<?php 
							 	$connList = dbcon();
							 	if($connList){
							 		$sql_get_stock_detail = "SELECT id, name, stock_no,quantity,price,expired_date,store_id,unit,price_per_unit FROM `pc_stock` WHERE store_id = '".$shop_id."';";
							 		
							 		$resultList = $connList->query($sql_get_stock_detail);
							 		if ($resultList->num_rows > 0) {
							 			while($row = $resultList->fetch_assoc()) {
							 				$stock_id = $row['id'];
							 				$name = $row['name'];
							 				$stock_no = $row['stock_no'];
							 				$quantity = $row['quantity'];
							 				$unit = $row['unit'];
							 				$pricePerUnit = $row['price_per_unit'];
							 				$price = $row['price'];
							 				$expired_date = $row['expired_date'];
							 				?>

							 				<tr>
							 					<td><?php echo $name;?></td>
							 					<td><?php echo $stock_no;?></td>
							 					<td><?php echo $quantity;?></td>
							 					<td><?php echo $unit;?></td>
							 					<td><?php echo $pricePerUnit;?></td>
							 					<td><?php echo $price;?></td>
							 					<td><?php echo $expired_date;?></td>
							 					<td class="cp-hidden" id="update_stock_id"><?php echo $stock_id;?></td>
							 					<td>
							 						<div class="btn-group">
							 							<button type="button" class="btn btn-primary" id="CP_STOCK_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
							 							<button type="button" class="btn btn-danger" id="CP_STOCK_DELETE"><i class="fa fa-trash" aria-hidden="true"></i></button>
							 						</div>
							 					</td>
							 				</tr>


							 				<?php

							 			}
							 		}else{
							 			echo "No Stock";
							 		}

							 	}

							 	 ?>

							 </tbody>
							</table>
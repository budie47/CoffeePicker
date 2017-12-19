<?php 

session_start();
include 'controller/dbconn.php';

	if (!isset($_SESSION["user_id"])) {
		header('Location: user-login.php');
	}

	
	 ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; 
?>
<body class="">
<?php require 'public-navbar.php'; ?>

<div class="container" style="margin-top:90px">
	<div class="row">
	 <div class="col-md-8" >
		<div class="panel panel-default">
		 <div class="panel-heading">Your Order</div>
			<div class="panel-body">
				<table id="cart" class="table table-hover table-condensed">
			    				<thead>
									<tr>
										<th style="width:50%">Item</th>
										<th style="width:10%">Price</th>
										<th style="width:8%">Quantity</th>
										<th style="width:22%" class="text-center">Subtotal</th>
										<th style="width:10%"></th>
									</tr>
								</thead>
								<tbody>
									<?php 
									
									$connList = dbcon();

									$totalPrice = 0;

									if($connList){
										$sql_cart = "SELECT item_id,price,item_name,size,comment FROM `pc_cart` WHERE user_id = '".$_SESSION["user_id"]."' AND status = 0";
										$resultList = $connList->query($sql_cart);
										if ($resultList->num_rows > 0) {
											while($row = $resultList->fetch_assoc()) {
												$item_id = $row['item_id'];
												$price = $row['price'];
												$item_name = $row['item_name'];
												$size = $row['size'];
												$comment = $row['comment'];

												$p = explode(" ", $price);
												$totalPrice =$totalPrice + floatval($p[1]);

												echo $totalPrice;
												?>

												<tr>
													<td data-th="Product">
														<div class="row">

															<div class="col-sm-10">
																<h4 class="nomargin"> <?php echo $item_id." | ".$item_name; ?></h4>

																<p>Size : <?php echo $size; ?></p>
																
																<p>Comment :<?php echo $comment; ?></p>
															</div>
														</div>
													</td>
													<td data-th="Price"> <?php echo $price; ?></td>
													<td data-th="Quantity">
														<input type="number" class="form-control text-center" value="1">
													</td>
													<td data-th="Subtotal" class="text-center"><?php echo $price; ?></td>
													<td class="actions" data-th="">

														<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
													</td>
												</tr>



												<?php

												
											}
										}

									}

									 ?>

								</tbody>
								<tfoot>
									<tr class="visible-xs">
										<td class="text-center"><strong>Total <?php echo $totalPrice; ?></strong></td>
									</tr>
									<tr>
										<td><a href="#" class="btn btn-default"><i class="fa fa-angle-left"></i> Continue Ordering</a></td>
										<td colspan="2" class="hidden-xs"></td>
										<td class="hidden-xs text-center"><strong>Total RM<?php echo $totalPrice; ?> <p id="total_price_order" class="cp-hidden"><?php echo $totalPrice; ?></p></strong></td>
										<td><button class="btn btn-default btn-block" id="CP_ORDER_MAKE_BTN">Make Order <i class="fa fa-angle-right"></i></button></td>
									</tr>
								</tfoot>
							</table>
		 </div>
		</div>
	 </div>

	</div>



</div>
<script type="text/javascript" src="controller/public-order-controller.js"></script>
</body>
</html>

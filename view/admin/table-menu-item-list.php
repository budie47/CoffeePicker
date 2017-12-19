<?php
include '../../controller/dbconn.php';
session_start();

$shop_id = $_SESSION['shop_id'];
$menu_id = $_POST['menu_id'];

?>
<table class="table table-bordered" id="menu_item_list_table">
	<thead>
		<tr>
			
			<th>Item</th>
			<th>Price</th>
			<th>Size</th>
			<th class="cp-hidden"></th>
			<th style="width:20%">Image</th>
			<th style="width:9%">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$connList = dbcon();
		
		if($connList){
			$sql_get_current_item_list = "SELECT id,item_name,price,size,image FROM `pc_menu_detail` WHERE menu_id = '".$menu_id."' ";
			

			$resultList = $connList->query($sql_get_current_item_list);

			if ($resultList->num_rows > 0) {

				while($row = $resultList->fetch_assoc()) {
					$item_id = $row['id'];
					$item_name = $row['item_name'];
					$price = $row['price'];
					$size = $row['size'];
					$image = $row['image'];
					?>
					<tr>
						<td><?php echo $item_name;?></td>
						<td><?php echo $price;?></td>
						<td><?php echo $size;?></td>

						<td class="cp-hidden" id="update_menu_item_id"><?php echo $item_id;?></td>
						<td><img src="<?php echo $image;?>" class="img-thumbnail" width="100%"> </td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary" id="CP_MENU_ITEM_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
								<button type="button" class="btn btn-danger" id="CP_MENU_DELETE"><i class="fa fa-trash" aria-hidden="true"></i></button>
							</div>
						</td>
					</tr>

					<?php

				}
			}else {
				echo "No Current ID";
			}
		}

		?>
	</tbody>
</table>

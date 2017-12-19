<?php
include '../../controller/dbconn.php';
session_start();

$shop_id = $_SESSION['shop_id'];

?>
<table class="table table-bordered" id="menu_list_table">
	<thead>
		<tr>
			
			<th>Menu Name</th>
			<th>Status</th>
			<th class="cp-hidden"></th>
			<th style="width:20%">Browse</th>
			<th style="width:20%">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$connList = dbcon();
		
		if($connList){
			$sql_get_current_id = "SELECT id,menu_name,status FROM `pc_menu_master` WHERE store_id = '".$shop_id."'";
				//echo $sql_get_current_id;

			$resultList = $connList->query($sql_get_current_id);

			if ($resultList->num_rows > 0) {

				while($row = $resultList->fetch_assoc()) {
					$menu_id = $row['id'];
					$menu_name = $row['menu_name'];
					$status = $row['status'];

					?>
					<tr>
						<td  id="update_menu_name"><?php echo $menu_name;?></td>
						<td><?php echo $status;?></td>


						<td class="cp-hidden" id="update_menu_id"><?php echo $menu_id;?></td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary" id="CP_MENU_BROWSE"><i class="fa fa-arrow-right" aria-hidden="true"></i>Browse</button>
								
							</div>
						</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary" id="CP_MENU_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
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

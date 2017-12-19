<?php
include '../../controller/dbconn.php';
session_start();

$shop_id = $_SESSION['shop_id'];

?>
<table class="table table-bordered" id="staff_list_table">
	<thead>
		<tr>
			<th>Name</th>
			
			<th>Email</th>
			<th>Phone No</th>
			<th>Type</th>
			<th class="cp-hidden"></th>
			<th>Address</th>
			<th style="width:9%">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$connList = dbcon();
		
		if($connList){
			$sql_get_current_id = "SELECT id,CONCAT(first_name,' ',last_name)AS name,email,phone_no,type,address FROM `pc_staff` WHERE store_id = '".$shop_id."'";
				//echo $sql_get_current_id;

			$resultList = $connList->query($sql_get_current_id);

			if ($resultList->num_rows > 0) {

				while($row = $resultList->fetch_assoc()) {
					$name = $row['name'];
					$email = $row['email'];
					$phone_no = $row['phone_no'];
					$type = $row['type'];
					$address = $row['address'];
					$staff_id = $row['id'];
					?>
					<tr>
						<td><?php echo $name;?></td>
						<td><?php echo $email;?></td>
						<td><?php echo $phone_no;?></td>
						<td><?php echo $type;?></td>
						<td><?php echo $address;?></td>
						<td class="cp-hidden" id="update_staff_id"><?php echo $staff_id;?></td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary" id="CP_STAFF_UPDATE"><i class="fa fa-pencil" aria-hidden="true"></i></button>
								<button type="button" class="btn btn-danger" id="CP_STAFF_DELETE"><i class="fa fa-trash" aria-hidden="true"></i></button>
							</div>
						</td>
					</tr>

					<?php

				}
			}else {
				echo "No Current ID";
				echo $sql_get_current_id;
			}
		}

		?>
	</tbody>
</table>

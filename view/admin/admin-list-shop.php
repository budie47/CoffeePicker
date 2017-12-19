<?php
include '../../controller/dbconn.php';
session_start();

?>
<div class="shop-list">
	<?php
	$connList = dbcon();
	  $id  = "null";
	  if($connList){
	    $sql_get_current_id = "SELECT id,name,CONCAT(address,',',postcode,',',town,',',state,',',country)AS address,open_hour,close_hour,store_no FROM `pc_store` WHERE admin_id = '".$_SESSION['id']."'";

	    $resultList = $connList->query($sql_get_current_id);
	    if ($resultList->num_rows > 0) {
	    // output data of each row
	    
	      while($row = $resultList->fetch_assoc()) {
	          $name = $row["name"];
	          $address = $row["address"];
	          $open_hour = $row["open_hour"];
	          $close_hour = $row["close_hour"];
	          $status = $row["store_no"];
	          $store_id = $row["id"];
	          ?>
	          <div class="col-xs-6 col-md-3 shop-detail">
	          	<a href=<?php echo "admin-shopsetid.php?id=".$store_id; ?> class="thumbnail" id=<?php echo $store_id; ?>>
	          		<label class="shop-title"><?php echo $name; ?></label>
	          		<label style="display: none;" id="CP_SHOP_ID"></label>
	          		<br>
	          		<span><?php echo $address; ?></span><br />
	          		<span>Operation Hour : <b><?php echo $open_hour."-".$close_hour; ?> </b> </span><br />
	          		<span>Status : <b><?php echo $status; ?></b></span>
	          	</a>							
	          </div>
	          <?php
	      	
	      }
	      dbclose();

	    } else {
	        echo "No Current ID";
	    }
	    $connList->close();
	  }
	?>

</div>
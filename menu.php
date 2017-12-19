<!DOCTYPE html>
<html lang="en"> 
<?php 
include 'controller/dbconn.php';
session_start();
  if (!isset($_SESSION["user_id"])) {
    header('Location: user-login.php');
  }
$store_id = $_GET['id'];

if (strlen($store_id) < 1) {
  ?>
  <script type="text/javascript">
    alert("You need select shop first");
  </script>
  <?php
  header('Location: shop.php');
  exit;
}

 ?>


<?php require 'header.php'; ?>
<body class="">
<?php require 'public-navbar.php'; ?>


<div class="container" style="margin-top:90px">
	<div class="row">
	 <div class="col-md-12" >
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
						<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
							<ul class="shop-list-list menu-shop-info">
                <?php 
                  $connList = dbcon();
                  $sql_get_store_detail = "SELECT name,address,town,postcode,state,country,open_hour,close_hour,image FROM `pc_store` WHERE id = '".$store_id."'";
                  if($connList){
                    $resultList = $connList->query($sql_get_store_detail);
                    while($row = $resultList->fetch_assoc()) {
                      $name = $row["name"];
                      $address = $row["address"];
                      $town = $row["town"];
                      $postcode = $row["postcode"];
                      $state = $row["state"];
                      $country = $row["country"];
                      $open_hour = $row["open_hour"];
                      $close_hour = $row["close_hour"];
                     
                      
                      $image = $row["image"];

                      ?>
                      <li>
                        <img src="<?php echo $image; ?>" alt="">
                        <div class="info menu-shop-detail">
                         <h2 class="title"><?php echo $name; ?></h2>
                          <p class="desc"><b>Address:</b> <?php echo $address.", ".$town.", ".$postcode.", ".$state.", ".$country; ?></p>
                          <p class="desc"><b>Open Hour:</b><?php echo $open_hour; ?> - <?php echo $close_hour; ?></p>
                        </div>

                      </li>

                      <?php
                    }
                  }
                 ?>

							</ul>
						</div>
					</div>

		 </div>
		</div>
	 </div>
	</div>
  <div class="col-md-3">
    <div class="row" >
     <div class="panel panel-default">
      <div class="panel-heading">Search</div>
       <div class="panel-body">
         <div class="input-group">
            <input type="text" class="form-control" id="" placeholder="Search your item here">
          <span class="input-group-btn">
             <button class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
          </span>
       </div>
      </div>
     </div>
    </div>
    <div class="row" >
 	  <div class="panel panel-default">
 	   
 	    <div class="panel-body">
					<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='order.php'" >Checkout</button>
 	   </div>
 	  </div>
 	 </div>

  </div>
  <div class="col-md-9">
    <div class="col-md-12">
      <div class="row">
        <div class="panel panel-default">
         <div class="panel-heading">Order Menu</div>
          <div class="panel-body">

            <div class="row">
              <div class="col-xs-12 col-md-12 col-sm-12">
                  <div class="row product-list">

                    <?php

                    $sql_menu_list = "SELECT pmd.id,pmd.item_name,pmd.price,pmd.image FROM pc_menu_detail pmd INNER JOIN pc_menu_master pmm ON pmd.menu_id = pmm.id WHERE pmm.store_id = '".$store_id."';" ;

                    $conn_product = dbcon();
                    if($conn_product){

                      $resultList = $conn_product->query($sql_menu_list);
                      if ($resultList->num_rows > 0) {
                        while($row = $resultList->fetch_assoc()) {

                          $id = $row['id'];
                          $item_name = $row['item_name'];
                          $price = $row['price'];
                          $image = $row['image'];

                          ?>

                          <div class="col-md-4 product-list-menu">
                              <section class="panel">
                                  <div class="pro-img-box">
                                      <img src="<?php echo $image; ?>" alt="">
                                  </div>
                                  <div class="panel-body text-center">
                                      <h4>
                                          <a href="#" class="pro-title">
                                              <?php echo $item_name; ?>
                                          </a>
                                      </h4>
                                      <p class="price">RM <?php echo $price; ?></p>
                                      <button type="button" class="btn btn-default btn-sm"  id="CP_MENU_VIEW" data-id="<?php echo $id; ?>">VIEW</button>
                                  </div>
                              </section>
                          </div>

                          <?php


                        }

                    }
                  }

                     ?>





                  </div>
              </div>
            </div>
            <hr />



         </div>
        </div>

      </div>
    </div>

  </div>


</div><!-- /.container -->
<?php require 'menu_view_detail.php'; ?>

<script type="text/javascript" src="controller/public-menu-controller.js"></script>
</body>
</html>

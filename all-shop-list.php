							<ul class="shop-list-list">
							<?php 
							include 'controller/dbconn.php';

							$country = $_POST['country_search'];
							$state = $_POST['state_search'];
							$area = $_POST['area_search'];

							$sql_get_store = "SELECT id,name,address,town,postcode,state,country,close_hour,open_hour,store_no,image FROM `pc_store`";

							if(strlen($country) > 0 ){

							}

							$connList = dbcon();
							if($connList){

								
								$resultList = $connList->query($sql_get_store);
								if ($resultList->num_rows > 0) {
									while($row = $resultList->fetch_assoc()) {
										$name = $row["name"];
										$address = $row["address"];
										$town = $row["town"];
										$postcode = $row["postcode"];
										$state = $row["state"];
										$country = $row["country"];
										$open_hour = $row["open_hour"];
										$close_hour = $row["close_hour"];
										$status = $row["store_no"];
										$store_id = $row["id"];
										$image = $row["image"];

										?>
										<li>
											<img src="<?php echo $image; ?>" alt="">
											<div class="info">
												<h2 class="title"><?php echo $name; ?></h2>
												<p class="desc"><b>Address:</b> <?php echo $address.", ".$town.", ".$postcode.", ".$state.", ".$country; ?></p>
												<p class="desc"><b>Open Hour:</b><?php echo $open_hour; ?> - <?php echo $close_hour; ?></p>
												<p class="desc cp-hidden" id="store_id"><b>Store Id:</b><?php echo $store_id; ?></p>
												<ul>
													
													<a href="menu.php?id=<?php echo $store_id; ?>" ><li style="width:100%;"><i class="fa fa-check" aria-hidden="true"></i> SELECT</li></a>
												</ul>
											</div>

										</li>

										<?
									}

								}else{
									echo "No shop";
								}

							}else{
								echo "No Db conn";
							}

							?>

							

							</ul>
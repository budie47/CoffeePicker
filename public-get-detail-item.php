        <?php 
        include 'controller/dbconn.php';
        $connList = dbcon();
          $id  = "null";
         $item_id = $_POST['item_id'];
         

        if($connList){
          $sql_get_item_detail = "SELECT menu_id,id,item_name,price,size,status,image FROM `pc_menu_detail` WHERE id =  '". $item_id."'";

              $resultList = $connList->query($sql_get_item_detail);
              if ($resultList->num_rows > 0) {

                 while($row = $resultList->fetch_assoc()) {
                   $menu_id = $row["menu_id"];
                   $item_id = $row["id"];
                   $item_name = $row["item_name"];
                   $price = $row["price"];
                   $status = $row["status"];
                   $size = $row["size"];
                   $image = $row["image"];
                  
                   ?>

                   <div class="row">
                     <div class="col-md-3">
                       <img src="<?php echo $image; ?>" style="width:100%; height:100%" />
                     </div>
                     <div class="col-md-9">
                       <div class="caption">
                         <h4 class="pull-right" id="item_price_view">RM <?php echo $price; ?></h4>
                         <h4 id="item_name_view"><?php echo $item_name; ?></h4>
                          <h4 id="item_id_view" class="cp-hidden"><?php echo $menu_id; ?></h4>
                         <div class="form-group">
                           <label for="usr">Size:</label>
                           <select class="form-control" id="CP_MENU_VIEW_SIZE">
                            <option>Small</option>
                            <option>Regular</option>
                            <option>Large</option>
                          </select>
                         </div>

                         <div class="form-group">
                           <label for="usr">Another Request:</label>
                           <textarea class="form-control" rows="5" id="CP_MENU_VIEW_COMMENT"></textarea>
                         </div>

                       </div>
                     </div>


                   </div>


                   <?php

                 }

              }
          }

          ?>


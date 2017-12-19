<?php

  function getId($tableName){
    $conn = dbcon();
      $id  = "null";
      if($conn){
        $sql_get_current_id = "SELECT id FROM ".$tableName." ORDER BY datetime_created DESC LIMIT 1";
        $result = $conn->query($sql_get_current_id);
        if ($result->num_rows > 0) {
        // output data of each row
        $current_id = "";
          while($row = $result->fetch_assoc()) {
              $current_id = $row["id"];
          }
          $id_no = explode("-", $current_id);
          $new_id_no = (int)$id_no[1] + 1;
          $id = $id_no[0]."-".$new_id_no;
          dbclose();

        } else {
            echo "No Current ID";
        }
        $conn->close();
      }else {
        echo "Database connection error";
      }
      return $id;
  }


?>
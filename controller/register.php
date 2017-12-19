<?php

include 'dbconn.php';
include 'getId.php';
  $type= $_POST["type"];

  switch ($type) {
    case "ADMIN":
          $first_name = $_POST["first_name"];
          $last_name = $_POST["last_name"];
          $username = $_POST["username"];
          $password = sha1($_POST["password"]);
          $email = $_POST["email"];
          $phone_no = $_POST["phone_no"];
          $conn = dbcon();
          if($conn){

            $admin_new_id = getAdminId();
            //echo $admin_new_id;
            $sql_admin_register = "INSERT INTO `pc_admin` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone_no`,`datetime_created`)";
            $sql_admin_register_2 = $sql_admin_register."VALUES ('".$admin_new_id."', '".$username."', '".$password."', '".$first_name."', '".$last_name."', '".$email."', '".$phone_no."',NOW());";
            if ($conn->query($sql_admin_register_2) === TRUE) {
                echo "|-SUCCESS-|";

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            dbclose();

          }else{
            echo "Database Connection Error";
          }
        break;
   case "PUBLIC":
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $username = $_POST["username"];
        $password = sha1($_POST["password"]);
        $email = $_POST["email"];
        $phone_no = $_POST["phone_no"];
        $conn = dbcon();
        if($conn){
          $user_new_id = getId('pc_user');
          //echo $admin_new_id;
          $sql_admin_register = "INSERT INTO `pc_user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone_no`,`datetime_created`)";
          $sql_admin_register_2 = $sql_admin_register."VALUES ('".$user_new_id."', '".$username."', '".$password."', '".$first_name."', '".$last_name."', '".$email."', '".$phone_no."',NOW());";
          if ($conn->query($sql_admin_register_2) === TRUE) {
              echo "|-SUCCESS-|";

          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
          dbclose();

        }else{
          echo "Database Connection Error";
        }
        break;
    case 2:
        echo "i equals 2";
        break;
}


  function getAdminId(){
    $conn = dbcon();
      $admin_id  = "null";
      if($conn){
        $sql_get_current_id = "SELECT id FROM `pc_admin` ORDER BY datetime_created DESC LIMIT 1";
        $result = $conn->query($sql_get_current_id);
        if ($result->num_rows > 0) {
        // output data of each row
        $current_id = "";
          while($row = $result->fetch_assoc()) {
              $current_id = $row["id"];
          }
          $id_no = explode("-", $current_id);
          $new_id_no = (int)$id_no[1] + 1;
          $admin_id = $id_no[0]."-".$new_id_no;
          dbclose();

        } else {
            echo "No Current ID";
        }
        $conn->close();
      }else {
        echo "Database connection error";
      }
      return $admin_id;
  }


 ?>

<?php 
include 'controller/dbconn.php';
session_start();
          $username = $_POST["username"];
          $password = sha1($_POST["password"]);
          $db_password = "";
          $admin_name ="";
          $id_admin = "";
          $store_id = "";
          //echo $password;

          $conn = dbcon();
          if($conn){
            $sql_admin_login = "SELECT id,username,password,first_name,last_name,store_id FROM `pc_staff` WHERE username = '".$username."' AND password = '".$password."'";
          // echo $sql_admin_login;
            $result = $conn->query($sql_admin_login);
            if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) {
                  $db_password = $row["password"];
                  $admin_name =  $row["first_name"]." ".$row["last_name"];
                  $id_admin = $row["id"];
                  $store_id =  $row["store_id"];
              }

              if($db_password === $password){
                $_SESSION["user_id"] = $id_admin;
                $_SESSION["name"] = $admin_name;
                $_SESSION["shop_name"] = $store_id;
                echo "|-SUCCESS-|";
              }else{
                echo "|-FAIL-|";
              }

              dbclose();

            } else {
                echo "No Current ID";
            }
            dbclose();

          }else{
            echo "Database Connection Error";
          }

 ?>

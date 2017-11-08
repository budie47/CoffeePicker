<?php
  include 'dbconn.php';
  $type= $_POST["type"];
session_start();
  switch ($type) {
    case "ADMIN":

          $username = $_POST["username"];
          $password = sha1($_POST["password"]);
          $db_password = "";
          $admin_name ="";
          $id_admin = "";
          //echo $password;

          $conn = dbcon();
          if($conn){
            $sql_admin_login = "SELECT id,username,password,first_name,last_name FROM `pc_admin` WHERE username = '".$username."' AND password = '".$password."'";
            //echo $sql_admin_login;
            $result = $conn->query($sql_admin_login);
            if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) {
                  $db_password = $row["password"];
                  $admin_name =  $row["first_name"]." ".$row["last_name"];
                  $id_admin = $row["id"];
              }

              if($db_password === $password){
                $_SESSION["id"] = $id_admin;
                $_SESSION["name"] = $admin_name;
                echo "|-SUCCESS-|";
              }

              dbclose();

            } else {
                echo "No Current ID";
            }
            dbclose();

          }else{
            echo "Database Connection Error";
          }
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}


?>

<?php
require "connection.php";
$pid = $_POST["pid"];
$ser = $_POST["s"];
$plan = $_POST["p"];
$price = $_POST["price"];
$est = $_POST["est"];
$email = $_POST["e"];
$pro = Database::search("SELECT * FROM `orders` WHERE `project_id`='" . $pid . "'");
$n = $pro->num_rows;
if (empty($email)) {
      echo "Please enter email";
} else if (empty($price)) {
      echo "Please enter price";
} else if (empty($est)) {
      echo "Please select est date";
} else if ($ser == "0") {
      echo "Please select Service";
} else if ($plan == "0") {
      echo "Please select Plan";
} else if ($n != "1") {
      echo "Project not found";
} else {
      $urs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "';");
      if ($urs->num_rows == 1) {
            $udata = $urs->fetch_assoc();
            $tdate = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $tdate->setTimezone($tz);
            $todayDate = $tdate->format("Y-m-d");
            Database::iud("UPDATE `orders` SET `user_uid`='" . $udata["uid"] . "',`service_id`='" . $ser . "',`plan_type`='" . $plan . "',`price`='" . $price . "',`complete_date`='" . $todayDate . "' WHERE `project_id`='" . $pid . "'");
            echo "success";
      }else{
            echo "User Not Found";
      }
}

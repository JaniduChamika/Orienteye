<?php
require "connection.php";
$sid = $_POST["sid"];
$pid = $_POST["pid"];
$price = $_POST["price"];
$con = $_POST["con"];
$why = $_POST["w"];
if (empty($price)) {
      echo "Please enter plan price";
} else if (empty($con)) {
      echo "Please enter plan description";
} else {
      if ($why == "add") {
            $rs = Database::search("SELECT * FROM `plan_details` WHERE `service_id`='" . $sid . "' AND `plan_type`='" . $pid . "'");
            if ($rs->num_rows == 0) {
                  Database::iud("INSERT INTO `plan_details`(`service_id`,`plan_type`,`content`,`price`) VALUES ('" . $sid . "','" . $pid . "','" . str_replace("'", "\'", $con) . "','" . $price . "')");
                  echo "plan added";
            } else {
                  echo "Already added plan";
            }
      } else if ($why == "up") {
            Database::iud("UPDATE `plan_details` SET `content`='" . str_replace("'", "\'", $con) . "',`price`='" . $price . "' WHERE `service_id`='" . $sid . "' AND `plan_type`='" . $pid . "'");
            echo "Plan Updated";
      }
}

<?php
require "connection.php";
$sid = $_POST["sid"];
$rs = Database::search("SELECT * FROM `service` WHERE `ser_id`='" . $sid . "'");
if ($rs->num_rows == 1) {
      $d = $rs->fetch_assoc();
      if ($d["ad_status"] == '1') {
            Database::iud("UPDATE `service` SET `ad_status`='2' WHERE `ser_id`='".$sid."'");
            echo "deactivated";
      } else if ($d["ad_status"] == '2') {
            Database::iud("UPDATE `service` SET `ad_status`='1' WHERE `ser_id`='".$sid."'");
            echo "activated";

      }
}

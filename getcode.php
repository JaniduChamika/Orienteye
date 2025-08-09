<?php
require "connection.php";

$code = $_POST["code"];
$email = $_POST["e"];
if (empty($code)) {
      echo "Please enter your verification code";
} else {
      $rs = Database::search("SELECT * FROM `user` WHERE `v_code`='" . $code . "' AND `email`='" . $email . "';");
      $n = $rs->num_rows;
      if ($n == 1) {
            echo "yes";
      } else {
            echo "no";
      }
}

<?php
session_start();
$uid = $_SESSION["u"]["uid"];
$msg = $_GET["m"];

require "connection.php";
if (!empty($msg)) {

      $d = new DateTime();
      $z = new DateTimeZone("Asia/Colombo");
      $d->setTimezone($z);
      $date = $d->format("Y-m-d H:i:s");
      Database::iud("INSERT INTO `chat`(`from`,`to`,`msg`,`msg_date`) VALUES ('" . $uid . "','0','" . str_replace("'", "\'", $msg) . "','" . $date . "')");
      echo "success";
}

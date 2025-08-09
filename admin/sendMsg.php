<?php
require "connection.php";
$to = $_GET["to"];
$msg = $_GET["m"];
if (empty($msg)) {
      echo "no massage";
} else {
      $d = new DateTime();
      $tz = new DateTimeZone("Asia/Colombo");
      $d->setTimezone($tz);
      $date = $d->format("Y-m-d H:i:s");


      Database::iud("INSERT INTO `chat` (`from`,`to`,`msg`,`msg_date`) VALUES ('0','" . $to . "','" . str_replace("'", "\'", $msg) . "','" . $date . "')");
      echo "success";
}

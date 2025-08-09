<?php

require "connection.php";

$uid = $_GET["uid"];

$urs = Database::search("SELECT * FROM `user` WHERE `uid` = '" . $uid . "';");
if ($urs->num_rows > 0) {
    $udata = $urs->fetch_assoc();
    if ($udata["status"] == "1") {
        Database::iud("UPDATE `user` SET `status` = 2 WHERE `uid` = '" . $uid . "';");
        echo "1";
    } else if ($udata["status"] == "2") {
        Database::iud("UPDATE `user` SET `status` = 1 WHERE `uid` = '" . $uid . "';");
        echo "2";
    }
}
?>
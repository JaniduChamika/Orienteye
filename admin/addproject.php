<?php

require "connection.php";

$ue = $_POST["ue"];
$s = $_POST["s"];
$pt = $_POST["pt"];
$p = $_POST["p"];
$cd = $_POST["cd"];

$tdate = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$tdate->setTimezone($tz);
$todayDate = $tdate->format("Y-m-d");

if (empty($ue)) {
    echo "u1";
} else if ($s == 0) {
    echo "s1";
} else if ($pt == 0) {
    echo "pt1";
} else if (empty($p)) {
    echo "p1";
} else if (empty($cd)) {
    echo "ed1";
} else if ($cd < $todayDate) {
    echo "d1";
} else {
    $urs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $ue . "';");
    if ($urs->num_rows == 1) {
        $udata = $urs->fetch_assoc();
        $pid = uniqid();
        Database::iud("INSERT INTO `orders`(`project_id`,`user_uid`,`service_id`,`plan_type`,`added_date`,`status_sid`,`price`,`complete_date`) 
        VALUES('" . $pid . "','" . $udata["uid"] . "','" . $s . "','" . $pt . "','" . $todayDate . "','1','" . $p . "','" . $cd . "');");
        echo "Done";
    } else {
        echo "u2";
    }
}

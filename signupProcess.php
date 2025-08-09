<?php

require "connection.php";

$fn = $_POST["fn"];
$ln = $_POST["ln"];
$e = $_POST["e"];
$m = $_POST["m"];
$pa = $_POST["pa"];
$repa = $_POST["repa"];
$g = $_POST["g"];

if (empty($fn)) {
    echo "fn";
} else if (strlen($fn) > 45) {
    echo "fn1";
} else if (empty($ln)) {
    echo "ln";
} else if (strlen($ln) > 45) {
    echo "ln1";
} else if (empty($e)) {
    echo "e";
} else if (strlen($e) > 100) {
    echo "e1";
} else if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
    echo "e2";
} else if (empty($m)) {
    echo "m";
} else if (strlen($m) != 10) {
    echo "m1";
} else if (preg_match("/07[0,1,2,4,5,6,7,8][0-9]+/", $m) == 0) {
    echo "m2";
} else if (empty($pa)) {
    echo "p1";
} else if (strlen($pa) > 20 || strlen($pa) < 8) {
    echo "p2";
} else if (!preg_match("#[0-9]#", $pa)) {
    echo "p5";
} else if (empty($repa)) {
    echo "p3";
} else if ($pa != $repa) {
    echo "p4";
} else if ($g != 1 && $g != 2) {
    echo "g";
} else {
    $emailselect = Database::search("SELECT * FROM user WHERE `email` = '" . $e . "';");
    $mobileresult = Database::search("SELECT * FROM user WHERE `mobile` = '" . $m . "';");
    if ($emailselect->num_rows >= 1) {
        echo "u1";
    } else if ($mobileresult->num_rows >= 1) {
        echo "u2";
    } else {

        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

        $vcode = uniqid();
        
        Database::iud("INSERT INTO user(`fname`,`lname`,`email`,`password`,`gender_id`,`reg_date`,`status`,`mobile`) VALUES('" . $fn . "','" . $ln . "','" . $e . "','" . $pa . "','" . $g . "','" . $date . "','1','" . $m . "');");
        sleep(1);
        echo "Registration Success";
        
    }
}

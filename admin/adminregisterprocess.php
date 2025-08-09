<?php
require "connection.php";

$fn = $_POST["fn"];
$ln = $_POST["ln"];
$e = $_POST["e"];
$g = $_POST["g"];
$p = $_POST["p"];
$cp = $_POST["cp"];
$m = $_POST["m"];
$po = $_POST["po"];

if (empty($fn)) {
    echo "n1";
} else if (strlen($fn) >= 45) {
    echo "n2";
} else if (empty($ln)) {
    echo "n3";
} else if (strlen($ln) >= 45) {
    echo "n4";
} else if (empty($e)) {
    echo "e1";
} else if (strlen($e) >= 100) {
    echo "e2";
} else if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
    echo "e3";
} else if ($g == 0) {
    echo "g1";
} else if (empty($p)) {
    echo "p1";
} else if (strlen($p) > 20 || strlen($p) < 8) {
    echo "p2";
} else if (!preg_match("#[0-9]#", $p)) {
    echo "p3";
} else if (empty($cp)) {
    echo "p4";
} else if ($p != $cp) {
    echo "p5";
} else if (empty($m)) {
    echo "m1";
} else if (strlen($m) != 10 || strlen($m) > 10) {
    echo "m2";
} else if (preg_match("/07[0,1,2,4,5,6,7,8][0-9]+/", $m) == 0) {
    echo "m3";
} else {
    $emailselect = Database::search("SELECT * FROM employee WHERE `email` = '" . $e . "';");
    $mobileresult = Database::search("SELECT * FROM employee WHERE `mobile` = '" . $m . "';");
    $userresult = Database::search("SELECT * FROM user WHERE `email` = '" . $e . "' AND `password` = '".$p."';");
    if ($emailselect->num_rows >= 1) {
        echo "u1";
    } else if ($mobileresult->num_rows >= 1) {
        echo "u2";
    }else if ($userresult->num_rows >= 1) {
        echo "u3";
    } else {

        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");


        Database::iud("INSERT INTO `employee`(`fname`,`lname`,`email`,`mobile`,`password`,`reg_date`,`gender_id`,`employe_type`) VALUES('" . $fn . "','" . $ln . "','" . $e . "','" . $m . "','" . $p . "','" . $date . "','" . $g . "','".$po."');");
    }
}

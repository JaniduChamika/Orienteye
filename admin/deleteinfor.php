<?php
require "connection.php";
session_start();
if (isset($_SESSION["a"])) {
    $email = $_POST["email"];
    $rs1 = Database::search("SELECT * FROM `feedback` WHERE `email` = '" . $email . "'");
    $n = $rs1->num_rows;
    if ($n > 0) {
        $i = $rs1->fetch_assoc();
        $deletepath = "..//resourse//feedback//" . $i["image"];
        if (!unlink($deletepath)) {
            // echo ("$previousFile cannot be deleted due to an error");
        }
        Database::iud("DELETE FROM `feedback` WHERE `email`='" . $email . "'");
        echo "delete_done";
    }
}

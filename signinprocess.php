<?php
session_start();
require "connection.php";
sleep(1);

$email = $_POST["email"];
$pass = $_POST["pass"];
$r = $_POST["remember"];

if (empty($email)) {
    echo ("Please Enter your Email");
} else if (strlen($email) > 100) {
    echo "Email must be less than 100 characters";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
} else if (empty($pass)) {
    echo "Please Enter your Password";
} else if (strlen($pass) < 8 || strlen($pass) > 20) {
    echo "Password Must Have Between 8 and 20 Characters";
} else {

    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' AND `password` = '" . $pass . "'");
    $n = $rs->num_rows;
    if ($n == 1) {

        $d = $rs->fetch_assoc();
        if ($d["status"] == "1") {

            $_SESSION["u"] = $d;

            if ($r == "true") {
                $extime = time() + (60 * 60 * 24 * 365);
                setcookie("e", $email, $extime);
                setcookie("p", $pass, $extime);
            } else {
                setcookie("e", "", -1);
                setcookie("p", "", -1);
            }
            echo "Success";
        }else{
            echo "suspended";
        }
    } else {

        $emprs = Database::search("SELECT * FROM `employee` WHERE `email` = '" . $email . "' AND `password` = '" . $pass . "';");
        if ($emprs->num_rows == 1) {
            $ed = $emprs->fetch_assoc();
            $_SESSION["a"] = $ed;
            if ($r == "true") {
                $extime = time() + (60 * 60 * 24 * 365);
                setcookie("e", $email, $extime);
                setcookie("p", $pass, $extime);
            } else {
                setcookie("e", "", -1);
                setcookie("p", "", -1);
            }
            echo "a1";
        } else {
            $rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "'");
            $n = $rs->num_rows;
            if ($n == 0) {
                echo "Not a registered Email";
            } else {
                $rs = Database::search("SELECT * FROM `user` WHERE `password` = '" . $pass . "'");
                $n = $rs->num_rows;
                if ($n == 0) {
                    echo "Wrong password";
                }
            }
        }
    }
}

<?php
require "connection.php";

$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$email = $_POST["e"];

if (empty($pass1)) {
    echo "Please Enter Your New Password";
} else if (strlen($pass1) < 8 || strlen($pass1) > 20) {
    echo "Password Length Must Between 8 To 20";
} else if (!preg_match("#[0-9]#", $pass1)) {
    echo "Password Must Content At Least 1 Number";
} else if (empty($pass2)) {
    echo "Please Re-Type Your New Password";
} else if ($pass1 != $pass2) {
    echo "Password And Re-type Password Does Not Match";
} else {

    Database::iud("UPDATE `user` set `password`='" . $pass1 . "' WHERE `email`='" . $email . "'");
    if (isset($_COOKIE["e"])) {
        setcookie("e", "", -1);
        setcookie("p", "", -1);
    }

    echo "done";
}

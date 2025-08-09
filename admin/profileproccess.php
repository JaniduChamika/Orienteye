<?php
session_start();
require "connection.php";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];


if (empty($fname)) {
    echo "Please enter your first name";
} else if (strlen($fname) > 50) {
    echo "First name must be less than 50 characters";
} else if (empty($lname)) {
    echo "Please enter your last name";
} else if (strlen($lname) > 50) {
    echo "Last name must be less than 50 characters";
} else if (empty($mobile)) {
    echo "Please enter your mobile number";
} else if (preg_match("/07[0,1,2,4,5,6,7,8][0-9]+/", $mobile) == 0) {
    echo "Invalid mobile number";
} else if (strlen($mobile) != 10) {
    echo "Please enter 10 digit mobile number";
} else {
    Database::iud("UPDATE `employee` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`mobile`='" . $mobile . "' WHERE `email`='" . $email . "'");
    if (isset($_FILES["img"])) {
        $img = $_FILES["img"];
        $fileex = $img["type"];

        $allowed_image_extention = array(
            "image/jpeg", "image/jpg", "image/png", "image/svg+xml"
        );

        if (!in_array($fileex, $allowed_image_extention)) {
            echo "Please Select An svg,jpg or png Image";
        } else {
            $newimgextention;
            if ($fileex == "image/jpeg") {
                $newimgextention = ".jpeg";
            } else if ($fileex == "image/jpg") {
                $newimgextention = ".jpg";
            } else if ($fileex == "image/png") {
                $newimgextention = ".png";
            } else if ($fileex == "image/svg+xml") {
                $newimgextention = ".svg";
            }

            $fimg = uniqid() . $newimgextention;
            $fileName = "..//resourse//profile//" . $fimg;
            move_uploaded_file($img["tmp_name"], $fileName);

            $rs = Database::search("SELECT * FROM `employee` WHERE `email`='" . $email . "'");
            $id = $rs->fetch_assoc();
            $rs1 = Database::search("SELECT * FROM `prifile_img` WHERE `employee_id`='" . $id["eid"] . "'");
            if ($rs1->num_rows == 0) {
                Database::iud("INSERT INTO `prifile_img` (`employee_id`,`img_path`) VALUES ('" . $id["eid"] . "','" . $fimg . "')");
            } else {
                Database::iud("UPDATE `prifile_img` SET `img_path`='" . $fimg . "' WHERE `employee_id`='" . $id["eid"] . "'");
            }
        }
    }
    $rs = Database::search("SELECT * FROM `employee` WHERE `email`='" . $email . "'");
    $id = $rs->fetch_assoc();
    $_SESSION["a"] = $id;

    echo "done";
}

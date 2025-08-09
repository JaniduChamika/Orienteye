<?php

require "connection.php";
session_start();
if (isset($_SESSION["a"])) {

    $email = $_POST["email"];
    $name = $_POST["name"];
    $feed = $_POST["feed"];
    if (empty($email)) {
        echo "Please Add Client email.";
    } else if (empty($name)) {
        echo "Please Add Client name.";
    } else if (empty($feed)) {
        echo "Please Add Client feedback.";
    } else {
        $rs1 = Database::search("SELECT * FROM `feedback` WHERE `email`='" . $email . "'");
        $n1 = $rs1->num_rows;
        if (!empty($_POST["img"])) {
            // $img = $_FILES["img"];
            // $fileex = $img["type"];
            echo $_POST["img"];
            $allowed_image_extention = array("image/jpeg", "image/jpg", "image/png", "image/svg");

            $type1 = (explode(';', $_POST["img"], -1))[0];
            $fileex = (explode(':', $type1, 2))[1];


            if (!in_array($fileex, $allowed_image_extention)) {
                echo "Please Select a Valid image.";
            } else {
                $t = microtime(true);
                $newimagextention;
                if ($fileex = "image/jpeg") {
                    $newimagextention = ".jpeg";
                } else if ($fileex = "image/jpg") {
                    $newimagextention = ".jpg";
                } else if ($fileex = "image/png") {
                    $newimagextention = ".png";
                } else if ($fileex = "image/svg") {
                    $newimagextention = ".svg";
                }

                // $filename = "..//resourse//feedback//".uniqid()."$newimagextention";

                // move_uploaded_file($img["tmp_name"],$filename);
                $imgName = $t . "." . $newimagextention;



                if ($n1 < 1) {
                    $path = "..//resourse//feedback//" . $imgName;
                    // move_uploaded_file($img["tmp_name"], $path);
                    file_put_contents($path, file_get_contents($_POST["img"]));

                    Database::iud("INSERT INTO `feedback` (`email`,`feed`,`image`,`clinetName`) VALUES ('" . $email . "','" . str_replace("'", "\'", $feed) . "','" . $imgName . "','" . $name . "')");
                    echo "done";
                } else {
                    $path = "..//resourse//feedback//" . $imgName;
                    // rename($img["tmp_name"], $path);
                    $i = $rs1->fetch_assoc();
                    $deletepath = "..//resourse//feedback//" . $i["image"];
                    if (!unlink($deletepath)) {
                        // echo ("$previousFile cannot be deleted due to an error");
                    }
                    $path = "..//resourse//feedback//" . $imgName;
                    // move_uploaded_file($img["tmp_name"], $path);
                    file_put_contents($path, file_get_contents($_POST["img"]));

                    Database::iud("UPDATE `feedback` SET `feed`='" . str_replace("'", "\'", $feed) . "', `image`='" . $imgName . "',`clinetName`='" . $name . "' WHERE `email`='" . $email . "'");
                    echo "updated";
                }
            }
        } else {
            if ($n1 > 0) {

                Database::iud("UPDATE `feedback` SET `feed`='" . str_replace("'", "\'", $feed) . "',`clinetName`='" . $name . "' WHERE `email`='" . $email . "'");
                echo "updated2";
            } else {
                echo "Please Add Cilent image.";
            }
        }
    }
}

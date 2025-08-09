<?php
require "connection.php";
$sname = $_POST["s"];
$sid = $_POST["sid"];
// echo $sname;
// echo $img;
$Allow_image_type = array("image/jpeg", "image/jpg", "image/png", "image/svg+xml");
$rs = Database::search("SELECT * FROM `service` WHERE `ser_id`='" . $sid . "'");

if (empty($sname)) {
      echo "Please Enter Service Name";
} else if ($rs->num_rows != 1) {
      echo "Service Not Found";
} else {
      if (isset($_FILES["img"])) {
            $d = $rs->fetch_assoc();

            $imgType = $_FILES["img"]["type"];
            if (!in_array($imgType, $Allow_image_type)) {
                  echo "Please Select An SVG,JPEG,JPG or PNG Image";
            } else {

                  $t = microtime(true);
                  $extenstion;
                  if ($imgType == "image/jpeg") {
                        $extenstion = "jpeg";
                  } else if ($imgType == "image/jpg") {
                        $extenstion = "jpg";
                  } else if ($imgType == "image/png") {
                        $extenstion = "png";
                  } else if ($imgType == "image/svg+xml") {
                        $extenstion = "svg";
                  }
                  $imgName = $t . "." . $extenstion;
                  $path = "..//resourse//services//" . $imgName;

                  // delete previous image 
                  $previousFile = "..//resourse//services//" . $d["simg"];
                  if (!unlink($previousFile)) {
                        // echo ("$previousFile cannot be deleted due to an error");
                  }

                  move_uploaded_file($_FILES["img"]["tmp_name"], $path);

                  Database::iud("UPDATE `service` SET `ser_name`='" . $sname . "',`simg`='" . $imgName . "' WHERE `ser_id`='" . $sid . "'");

                  echo "success";
            }
      } else {
            Database::iud("UPDATE `service` SET `ser_name`='" . $sname . "' WHERE `ser_id`='" . $sid . "'");

            echo "success";
      }
}

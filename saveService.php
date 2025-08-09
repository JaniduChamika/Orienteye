<?php
require "connection.php";
$sname = $_POST["s"];

// echo $sname;
// echo $img;
$Allow_image_type = array("image/jpeg", "image/jpg", "image/png", "image/svg+xml");

if (empty($sname)) {
      echo "Please Enter Service Name";
} else if (!isset($_FILES["img"])) {
      echo "Plase Select An Image";
} else {
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
            $imgName = $t .".". $extenstion;

            $path = "resourse//services//" . $imgName;
            move_uploaded_file( $_FILES["img"]["tmp_name"],$path);

            Database::iud("INSERT INTO `service`(`ser_name`,`simg`,`ad_status`) VALUES ('".ucwords($sname)."','".$imgName."','1')");

            echo "success";
      }
}

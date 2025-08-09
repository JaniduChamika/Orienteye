<?php
require "connection.php";

$title = $_POST["t"];
$con = $_POST["c"];
$nid = $_POST["nid"];
// echo $sname;
// echo $img;
$Allow_image_type = array("image/jpeg", "image/jpg", "image/png", "image/svg+xml");
$rs = Database::search("SELECT * FROM `News` WHERE `nid`='" . $nid . "'");

if (empty($title)) {
      echo "Please Enter News Title";
} else if (strlen($title) >= 20) {
      echo "Title character length must be less than 20";
} else if (empty($con)) {
      echo "Please Enter News Description";
} else if ($rs->num_rows != 1) {
      echo "News Not Found";
} else {
      if (isset($_FILES["i"])) {
            $d = $rs->fetch_assoc();

            $imgType = $_FILES["i"]["type"];
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
                  $path = "..//resourse//news//" . $imgName;

                  // delete previous image 
                  $previousFile = "..//resourse//news//" . $d["img_path"];
                  if (!unlink($previousFile)) {
                        // echo ("$previousFile cannot be deleted due to an error");
                  }

                  move_uploaded_file($_FILES["i"]["tmp_name"], $path);

                  Database::iud("UPDATE `news` SET `topic`='" . $title . "',`img_path`='" . $imgName . "',`details`='" . str_replace("'", "\'", $con) . "' WHERE `nid`='" . $nid . "'");

                  echo "success";
            }
      } else {
            Database::iud("UPDATE `news` SET `topic`='" . $title . "',`details`='" . str_replace("'", "\'", $con) . "' WHERE `nid`='" . $nid . "'");

            echo "success";
      }
}

<?php
require "connection.php";
$id = $_POST["id"];

$projectName = $_POST["projectName"];
$link = $_POST["link"];
$proType = $_POST["proType"];
$srvice = $_POST["srvice"];
$t1 = $_POST["them1"];
$t2 = $_POST["them2"];
$t3 = $_POST["them3"];
if (empty($projectName)) {
      echo "Please enter project Name";
} else if ($proType == "0") {
      echo "Please select project type";
} else if ($srvice == "0") {
      echo "Please select service";
} else if (empty($link)) {
      echo "Please enter web site url";
} else {
      Database::iud("UPDATE project SET `project_name`='" . $projectName . "',`project_type`='" . $proType . "',`service_id`='" . $srvice . "',`link`='" . $link . "',`theam1`='".$t1."',`theam2`='".$t2."',`theam3`='".$t3."' WHERE `pro_id`='" . $id . "'");
      if (!empty($_POST["image"])) {
            $type1 = (explode(';', $_POST["image"], -1))[0];
            $imgType= (explode(':', $type1, 2))[1];
      
            // $imgType = $_FILES["image"]["type"];
            $Allow_image_type = array("image/jpeg", "image/jpg", "image/png", "image/svg+xml");

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
                  $rs = Database::search("SELECT * FROM `project` WHERE `pro_id`='" . $id . "'");
                  $d = $rs->fetch_assoc();

                  $path = "..//resourse//portfolio//" . $imgName;
                  // move_uploaded_file($_FILES["image"]["tmp_name"], $path);
                  file_put_contents($path, file_get_contents($_POST["image"]));

                  $previousFile = "..//resourse//portfolio//" . $d["p_image"];
                  if (!empty($d["p_image"])) {
                        if (!unlink($previousFile)) {
                              // echo ("$previousFile cannot be deleted due to an error");
                        }
                  }


                  Database::iud("UPDATE project SET `p_image`='" . $imgName . "'  WHERE `pro_id`='" . $id . "'");
            }
      }
      echo "success";
}

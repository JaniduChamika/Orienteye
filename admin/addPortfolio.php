<?php
require "connection.php";
$projectName = $_POST["projectName"];
$link = $_POST["link"];
$proType = $_POST["proType"];
$srvice = $_POST["srvice"];
$t1 = $_POST["them1"];
$t2 = $_POST["them2"];
$t3 = $_POST["them3"];
$Allow_image_type = array("image/jpeg", "image/jpg", "image/png", "image/svg+xml");

if (empty($_POST["image"])) {
      echo "Please select image";
} else if (empty($projectName)) {
      echo "Please enter project Name";
} else if ($proType == "0") {
      echo "Please select project type";
} else if ($srvice == "0") {
      echo "Please select service";
} else if (empty($link)) {
      echo "Please enter web site url";
} else if ($t1 == $t2 || $t1 == $t3 || $t2 == $t3) {
      echo "Please Select Different Colours";
} else {

      // $imgType = $_FILES["image"]["type"];

      $type1 = (explode(';', $_POST["image"], -1))[0];
      $imgType= (explode(':', $type1, 2))[1];


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

            $path = "..//resourse//portfolio//" . $imgName;
            // move_uploaded_file($_FILES["image"]["tmp_name"], $path);

            // $img="resourse//img.jpg";
            file_put_contents($path, file_get_contents($_POST["image"]));


            Database::iud("INSERT INTO `project` (`project_name`,`project_type`,`service_id`,`link`,`p_image`,`theam1`,`theam2`,`theam3`) VALUES ('" . $projectName . "','" . $proType . "','" . $srvice . "','" . $link . "','" . $imgName . "','" . $t1 . "','" . $t2 . "','" . $t3 . "')");
            echo "success";
      }
}

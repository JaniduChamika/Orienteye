<?php
require "connection.php";
$title=$_POST["t"];
// $img=$_POST["i"];
$con=$_POST["c"];


$Allow_image_type = array("image/jpeg", "image/jpg", "image/png", "image/svg+xml");

if (empty($title)) {
      echo "Please Enter News Title";
}else if(strlen($title)>=20){
      echo "Title character length must be less than 20";
}else if (empty($con)) {
      echo "Please Enter News Description";
}  else if (!isset($_FILES["i"])) {
      echo "Plase Select An Image";
} else {
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
            $imgName = $t .".". $extenstion;

            $path = "..//resourse//news//" . $imgName;
            move_uploaded_file( $_FILES["i"]["tmp_name"],$path);

            Database::iud("INSERT INTO `news`(`topic`,`img_path`,`details`) VALUES ('".ucwords($title)."','".$imgName."','".str_replace("'","\'",$con )."')");
            
            echo "success";
      }
}

<?php
require "connection.php";
$id = $_POST["id"];
$text = $_POST["text"];
if(empty($text)){
echo "Please Enter News Description";
}else{
      Database::iud("UPDATE `project_isuse` SET `description`='".str_replace("'","\'",$text )."' WHERE `i_id`='".$id."'");
      echo "done";
}

?>
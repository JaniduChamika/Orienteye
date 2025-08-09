<?php 

require "connection.php";
$id = $_POST["id"];
$textarea = $_POST["textarea"];

if(empty($textarea)){
   echo "Please enter your issue.";
}else{
    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");
    Database::iud("INSERT INTO `project_isuse`(`orders_oid`,`description`,`date`,`issuse_status`)VALUES('".$id."','". str_replace("'","\'",$textarea )."','".$date."','1')");
    echo "success";
   
}

?>
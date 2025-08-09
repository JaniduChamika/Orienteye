<?php
require "connection.php";
$id=$_POST["id"];

$news=Database::search("SELECT * FROM `news` WHERE `nid`='".$id."'");
if($news->num_rows==1){
      $d=$news->fetch_assoc();
 $array["id"]=$id;
 $array["topic"] =$d["topic"]  ;
 $array["img_path"]=$d["img_path"] ;
 $array["details"]=$d["details"];
 
 echo json_encode($array);
}

?>
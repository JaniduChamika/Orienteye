<?php 
require "connection.php";
$id = $_POST["id"];

 Database::iud("UPDATE `project_isuse` SET `issuse_status`='2' WHERE `i_id`='".$id."'");

?>
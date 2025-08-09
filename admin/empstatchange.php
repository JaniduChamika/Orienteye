<?php

require "connection.php";

$stsus = $_GET["s"];
$eid = $_GET["id"];

Database::iud("UPDATE `employee` SET `employe_type` = '".$stsus."' WHERE `eid` = '".$eid."';");
echo "done";


?>
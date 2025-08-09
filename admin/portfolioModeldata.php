<?php
require "connection.php";
$id = $_GET["id"];
$ar;
$prs = Database::search("SELECT * FROM `project`   WHERE project.`pro_id` = '" . $id . "';");
if ($prs->num_rows == 1) {
    $pdata = $prs->fetch_assoc();




    $ar["proName"] = $pdata["project_name"];
    $ar["link"] = $pdata["link"];
    $ar["proType"] = $pdata["project_type"];
    $ar["service"] = $pdata["service_id"];
    $ar["theam1"] = $pdata["theam1"];
    $ar["theam2"] = $pdata["theam2"];
    $ar["theam3"] = $pdata["theam3"];


    if (empty($pdata["p_image"])) {
        $ar["img"] = "1";
    } else {
        $ar["img"] = $pdata["p_image"];
    }

    echo json_encode($ar);
} else {
    echo "Not Found";
}

<?php
require "connection.php";
$id = $_GET["id"];
$ar;
$prs = Database::search("SELECT * FROM `orders` INNER JOIN `user` ON orders.`user_uid` = user.`uid`  WHERE orders.`project_id` = '" . $id . "';");
if ($prs->num_rows == 1) {
    $pdata = $prs->fetch_assoc();
    $crs = Database::search("SELECT * FROM `service` WHERE `ser_id` = '" . $pdata["service_id"] . "';");
    $cdata = $crs->fetch_assoc();
    $plrs = Database::search("SELECT * FROM `plan_type` WHERE `pid` = '" . $pdata["plan_type"] . "';");
    $pldata = $plrs->fetch_assoc();
    $issrs = Database::search("SELECT * FROM `project_isuse` WHERE `orders_oid` = '" . $id . "' AND `issuse_status` = '1' ORDER BY `date` ASC LIMIT 1;");
    $isnr = $issrs->num_rows;
    $issue = "";
    if ($isnr > 0) {

        $isdata = $issrs->fetch_assoc();
        $issue = $isdata["description"];
    } else {
        $issue = "No issues";
    }


    $ar["category"] = $cdata["ser_name"];
    $ar["price_plan"] = $pldata["ptype"];
    $ar["given_date"] = $pdata["added_date"];
    $ar["est_date"] = $pdata["complete_date"];
    $ar["name"] = $pdata["fname"] . " " . $pdata["lname"];
    $ar["contact"] = $pdata["mobile"];
    $ar["email"] = $pdata["email"];
    $ar["issues"] = $issue;
    $ar["price"] = $pdata["price"];
    $ar["pid"] = $pdata["plan_type"];
    $ar["sid"] = $pdata["service_id"];

    echo json_encode($ar);
} else {
    echo "1";
}

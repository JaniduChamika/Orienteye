<?php

require "connection.php";

$wh = $_POST["wh"];
$cp = $_POST["cp"];
$hc = $_POST["hc"];
$hw = $_POST["hw"];

if (empty($wh) || $wh < 0) {
    $wh = 0;
}

if (empty($cp) || $cp < 0) {
    $cp = 0;
}
if (empty($hc) || $hc < 0) {
    $hc = 0;
}
if (empty($hw) || $hw < 0) {
    $hw = 0;
}

Database::iud("UPDATE `counter` SET workingHours = '" . $wh . "',`completedProject` = '" . $cp . "',`happyClient` = '" . $hc . "',`hardWork` = '" . $hw . "' WHERE `cid` = '1';");

$cou = Database::search("SELECT * FROM `counter`;");
if ($cou->num_rows == 1) {
    $cou_dat = $cou->fetch_assoc();
}




?>

<div class="row">
    <div class="col-md-6">
        <label for="inputwh" class="form-label">Work Hours</label>
        <input type="number" class="form-control" id="inputwh" value="<?php echo $cou_dat["workingHours"]; ?>">
    </div>
    <div class="col-md-6">
        <label for="inputcp" class="form-label">Completed Projects</label>
        <input type="number" class="form-control" id="inputcp" value="<?php echo $cou_dat["completedProject"]; ?>">
    </div>
    <div class="col-md-6">
        <label for="inputhc" class="form-label">Happy Clients</label>
        <input type="number" class="form-control" id="inputhc" value="<?php echo $cou_dat["happyClient"]; ?>">
    </div>
    <div class="col-md-6">
        <label for="inputhw" class="form-label">Hard Workers</label>
        <input type="number" class="form-control" id="inputhw" value="<?php echo $cou_dat["hardWork"]; ?>">
    </div>
</div>
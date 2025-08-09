<?php
require "connection.php";

$sid = 0;
$plan = 0;
$content = "";
$price = "";
if (isset($_POST["s"])) {
      $sid = $_POST["s"];
      $plan = $_POST["p"];
      $rs = Database::search("SELECT * FROM `plan_details` WHERE `service_id`='" . $sid . "' AND `plan_type`='" . $plan . "'");

      if ($rs->num_rows == 1) {
            $d = $rs->fetch_assoc();
            $content = $d["content"];
            $price = $d["price"];
      }
}



// $rs = Database::search("SELECT * FROM `plan_type` WHERE `pid`='" . $plan . "'");


?>
<div class="col-12 ">
      <h3>Plan Details</h3>
      <hr />

</div>
<div class="col-12">
      <label>Select Service</label>
      <select class="form-select" id="sSelector" onchange="getPlanDetails();">
            <option value="0">Select Service</option>

            <?php
            $rs = Database::search("SELECT * FROM `service`");
            $srow = $rs->num_rows;
            for ($i = 0; $i < $srow; $i++) {
                  $drow = $rs->fetch_assoc();
                  if ($sid == $drow["ser_id"]) {
            ?>
                        <option value="<?php echo $drow["ser_id"] ?>" selected><?php echo $drow["ser_name"] ?></option>

                  <?php
                  } else {
                  ?>
                        <option value="<?php echo $drow["ser_id"] ?>"><?php echo $drow["ser_name"] ?></option>

                  <?php
                  }
                  ?>

            <?php
            }
            ?>
      </select>
</div>
<div class="col-12">
      <label>Select Plan</label>
      <select class="form-select" id="planSelector" onchange="getPlanDetails();">
            <option value="0">Select Plan</option>
            <?php
            $rs = Database::search("SELECT * FROM `plan_type`");
            $srow = $rs->num_rows;
            for ($i = 0; $i < $srow; $i++) {
                  $drow = $rs->fetch_assoc();
                  if ($plan == $drow["pid"]) {
            ?>
                        <option value="<?php echo $drow["pid"] ?>" selected><?php echo $drow["ptype"] ?></option>

                  <?php
                  } else {
                  ?>
                        <option value="<?php echo $drow["pid"] ?>"><?php echo $drow["ptype"] ?></option>

                  <?php
                  }
                  ?>

            <?php
            }
            ?>
      </select>
</div>
<div class="col-12">
      <label>Plan Price</label>
      <input type="number" min="0" class="form-control"  onchange="clearerroserviPrice();" value="<?php echo $price ?>" id="planPriceID" placeholder="Enter Price For Plan" />
</div>
<div class="col-12">
      <label>Plan Description</label>
      <textarea class="form-control"  onchange="clearerroserviDescrip();" placeholder="Type Here Plan Description. Use Comma ( , ) to sparate sentence" id="planDesID" style="height: 281px;"><?php echo $content ?></textarea>
</div>
<?php
if ($sid != 0 && $plan != 0) {
      if ((empty($content) && empty($price))) {
?>
            <div class="col-12 pt-2 pt-lg-3  text-end">
                  <button class="btn bdbtn h-100 w-100 px-5" onclick="addPlanDetails();">Add</button>
            </div>

      <?php

      } else {
      ?>
            <div class="col-12 pt-2 pt-lg-3  text-end">
                  <button class="btn bdbtn h-100 w-100 px-5" onclick="updatePlanDetails();">Update</button>
            </div>
<?php
      }
}
?>
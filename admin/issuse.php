<?php

require "connection.php";

$projectid = $_POST["projectid"];
if (empty($projectid)) {
  echo "Please enter your project id.";
} else {
  $rs = Database::search("SELECT * FROM `orders` WHERE `project_id` = '" . $projectid . "'");
  if ($rs->num_rows > 0) {
    $d = $rs->fetch_assoc();
    $rs1 = Database::search("SELECT * FROM `project_isuse` WHERE `orders_oid`='" . $d["project_id"] . "'");
    if ($rs1->num_rows > 0) {
      $d1 = $rs1->fetch_assoc();
      $is = $d1["i_id"];
    }
    $rs2 = Database::search("SELECT * FROM `service` WHERE `ser_id`='" . $d["service_id"] . "'");
    $d2 = $rs2->fetch_assoc();
    $rs3 = Database::search("SELECT * FROM `plan_type` WHERE `pid`='" . $d["plan_type"] . "'");
    $d3 = $rs3->fetch_assoc();
    $rs4 = Database::search("SELECT * FROM `user` WHERE `uid`='" . $d["user_uid"] . "'");
    $d4 = $rs4->fetch_assoc();
?>
    <div class="row p-2 p-md-3">
      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-md-8 col-xl-5 col-xxl-4 mx-auto">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Project Id</span>
                  <input type="text" class="form-control" id="projectid" value="<?php echo $projectid; ?>" onclick="removeissuseborder();" placeholder="Project Id">
                  <button class="btn bdbtn px-4" type="button" onclick="issuse();">Search</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <h2>Project Info</h2>
              <hr />
            </div>
            <div class="col-12 col-md-6 col-xxl-3 text-xl-center">
              <div class="input-group mb-3">
                <span class="input-group-text">Client</span>
                <input type="text" class="form-control readonlycss" id="name" value="<?php echo $d4["fname"]; ?>" placeholder="Name" readonly>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-3 text-xl-center">
              <div class="input-group mb-3">
                <span class="input-group-text">Contact No</span>
                <input type="text" class="form-control readonlycss" id="mobile" value="<?php echo $d4["mobile"]; ?>" placeholder="Mobile No" readonly>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-3 text-xl-center">
              <div class="input-group mb-3">
                <span class="input-group-text">Category</span>
                <input type="text" class="form-control readonlycss" id="category" value="<?php echo $d2["ser_name"]; ?>" placeholder="Service Name" readonly>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-3 text-xl-center">
              <div class="input-group mb-3">
                <span class="input-group-text">Project Plan</span>
                <input type="text" class="form-control readonlycss" id="projectplan" value="<?php echo $d3["ptype"]; ?>" placeholder="Pricing Plan" readonly>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <h2>Issues Info</h2>
        <hr />
      </div>
      <div class="col-12 col-md-6">
        <div class="row pe-xl-3">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <span class="fs-6">Issues Details</span>
              </div>
              <div class="col-12 ">
                <textarea name="" class="form-control" id="textarea" placeholder="Type Here About Issues Of Project" cols="30" rows="15"></textarea>
              </div>
              <div class="col-12 mt-3">
                <div class="row">
                  <div class="col-6">
                    <span class="btn bdbtngreen d-grid disabled" id="solvedbtn">solved</span>
                  </div>
                  <div class="col-6" id="btn">
                    <span class="btn bdbtn d-grid" id="issuseAddbtn" onclick="addisuse('<?php echo $projectid; ?>');">Add</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="row gy-3 ps-xl-3 py-3 pt-md-0 overflow-auto" style="max-height: 520px;">
          <?php
          $rs1 = Database::search("SELECT * FROM `project_isuse` WHERE `orders_oid`='" . $projectid . "'");
          $n = $rs1->num_rows;

          for ($i = 0; $i < $n; $i++) {

            $d1 = $rs1->fetch_assoc();

            $isuse = $d1["description"];

          ?>
            <?php
            if ($d1['issuse_status'] == 2) {
            ?>
              <div class="col-12 newsboxissus d-flex position-relative solvedbox py-2" onclick="loadisuse('<?php echo $isuse; ?>','<?php echo  $d1['i_id']; ?>',<?php echo $d1['issuse_status']; ?>);">
           
                <p class="my-auto"><?php echo $isuse; ?></p>
              </div>
            <?php
            } else {
            ?>
              <div class="col-12 newsboxissus d-flex position-relative py-2" onclick="loadisuse('<?php echo $isuse; ?>','<?php echo  $d1['i_id']; ?>',<?php echo $d1['issuse_status']; ?>);">
         
                <p class="my-auto"><?php echo $isuse; ?></p>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
<?php
  } else {
    echo "This project has no issues yet.";
  }
}

?>
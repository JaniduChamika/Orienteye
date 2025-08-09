<?php
session_start();
require "connection.php";

$uid = $_SESSION["u"]["uid"];
$rs = Database::search("SELECT * FROM `chat` WHERE `from`='" . $uid . "' OR `to`='" . $uid . "'");

if ($rs->num_rows > 0) {
      for ($i = 0; $i < $rs->num_rows; $i++) {
            $d = $rs->fetch_assoc();
            if ($d["from"] == $uid) {
?>
                  <div class=" text-end ms-auto me-0"style="max-width: 80%;">

                        <div class="py-1 ps-4 pe-2 ms-auto mb-1 d-flex text-start" style="border-radius: 20px 2px 20px 20px;background-color: #2C3E50 ; width: fit-content;">

                              <div class="d-inline-block">
                                    <span class=" text-white " style="font-size: 19px;"><?php echo wordwrap($d["msg"], 35, "<br>\n", TRUE) ?></span>

                              </div>
                              <div class="d-inline-block ps-2  align-items-end d-flex">
                                    <span class="text-white" style="font-size: 9px;">
                                          <?php
                                          $t = $d["msg_date"];
                                          $time = explode(" ", $t);
                                          echo $time[1];
                                          ?>
                                    </span>
                              </div>

                        </div>

                  </div>
            <?php

            } else if ($d["to"] == $uid) {
            ?>
                  <div class=" text-start" style="max-width: 80%;">
                        <div class=" py-1 ps-3 pe-2 ms-0 mb-1 d-flex" style="border-radius:2px 20px 20px 20px;background-color: #2C3E50 ; width: fit-content;">

                              <div class="d-inline-block">

                                    <span class=" text-white" style="font-size: 19px;"><?php echo wordwrap($d["msg"], 35, "<br>\n", TRUE) ?></span>
                              </div>
                              <div class="d-inline-block ps-2  align-items-end d-flex">

                                    <span class="text-white " style="font-size: 9px;">
                                          <?php
                                          $t = $d["msg_date"];
                                          $time = explode(" ", $t);
                                          echo $time[1];
                                          ?>
                                    </span>&nbsp;
                              </div>
                        </div>
                  </div>
      <?php
            }
      }
} else {
      ?>
      <div class="nomsgbox m-auto mt-5">

      </div>
      <div class="mx-auto text-center">
            <span>No Massage</span>
      </div>
<?php
}
?>
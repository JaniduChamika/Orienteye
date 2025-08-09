<?php
require "connection.php";
$uid = $_GET["id"];
$rs = Database::search("SELECT * FROM `chat` WHERE `from`='" . $uid . "' OR `to`='" . $uid . "'");

?>



<div class="col-12">
      <!-- massage box -->

      <div class="row message-box bg-white rounded" id="chatrow">
            <div class="col-12">
                  <?php
                  if ($rs->num_rows > 0) {
                        for ($i = 0; $i < $rs->num_rows; $i++) {
                              $d = $rs->fetch_assoc();
                              if ($d["to"] == $uid) {
                  ?>
                                    <div class="row">
                                          <div class="col-10 offset-2 text-end">
                                                <div class="py-1 ps-4 pe-2 ms-auto mb-1 text-start d-flex" style="border-radius: 20px 2px 20px 20px;background-color: #2C3E50 ; width: fit-content;">
                                                      <div class="d-inline-block">

                                                            <span class=" text-white " style="font-size: 19px;"><?php echo wordwrap($d["msg"], 45, "<br>\n", TRUE) ?></span> &nbsp;
                                                      </div>
                                                      <div class="d-inline-block  align-items-end d-flex">

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
                                    </div>
                              <?php

                              } else if ($d["from"] == $uid) {
                              ?>
                                    <div class="row">
                                          <div class="col-8 col-md-7 col-lg-6">
                                                <div class=" py-1 ps-3 pe-3 ms-0 mb-1 d-flex" style="border-radius:2px 20px 20px 20px;background-color: #2C3E50 ; width: fit-content;">

                                                      <div class="d-inline-block">

                                                            <span class=" text-white" style="font-size: 19px;"><?php echo wordwrap($d["msg"], 45, "<br>\n", TRUE) ?></span>
                                                      </div>
                                                      <div class="d-inline-block ps-2 align-items-end d-flex">

                                                            <span class="text-white mt-auto mb-0" style="font-size: 9px;">
                                                                  <?php
                                                                  $t = $d["msg_date"];
                                                                  $time = explode(" ", $t);
                                                                  echo $time[1];
                                                                  ?>
                                                            </span>&nbsp;
                                                      </div>
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




            </div>
      </div>
</div>
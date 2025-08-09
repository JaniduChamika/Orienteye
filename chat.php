<div class="chatopnbtn position-fixed d-none d-lg-block text-center pt-2 ">
      <span>
            <?php
            if (isset($_SESSION["u"])) {

            ?>
                  <i class="icofont-speech-comments fontchatbtn" id="chatbtn" onclick="openChat();refreshChat();"></i>
            <?php
            } else {
            ?>
                  <i class="icofont-speech-comments fontchatbtn" id="chatbtn" onclick="openChat();"></i>

            <?php
            }

            ?>
      </span>
</div>
<div class="chatopnbtn position-fixed d-lg-none text-center">
      <span>
            <?php
            if (isset($_SESSION["u"])) {

            ?>
                  <i class="icofont-speech-comments fontchatbtn" id="chatbtn2" onclick="openChatSmaller();refreshChat();"></i>
            <?php
            } else {
            ?>
                  <i class="icofont-speech-comments fontchatbtn" id="chatbtn2" onclick="openChatSmaller();"></i>

            <?php
            }
            ?>
      </span>
</div>
<div class="col-12 col-lg-6 col-xl-5 col-xxl-4 d-none  position-fixed chatboxclient" id="chatboxclient">

      <div class="chathide d-flex  w-100 p-2">

            <div class="chatlogo d-inline-block">

            </div>


            <div class="ps-2 comName d-inline-block align-items-center pt-1 pt-lg-0">
                  <span class="fw-bold fs-5">Orianteye Solutions</span>

            </div>
            <div class="hidebtn d-inline-block ms-auto me-2 p-0">
                  <span class="btn d-none d-lg-block" onclick="hidechat();clearintChat();"><i class="icofont-rounded-down fs-4"></i></span>
                  <span class="btn d-lg-none" onclick="hidesmall();clearintChat();"><i class="icofont-close fs-4"></i></span>

            </div>

      </div>
      <?php
      if (isset($_SESSION["u"])) {
            $uid = $_SESSION["u"]["uid"];
            $rs = Database::search("SELECT * FROM `chat` WHERE `from`='" . $uid . "' OR `to`='" . $uid . "'");

      ?>
            <div class="msgcontentBox w-100 p-1 px-2 overflow-auto" id="msgcontentID">

                  <?php
                  if ($rs->num_rows > 0) {
                        for ($i = 0; $i < $rs->num_rows; $i++) {
                              $d = $rs->fetch_assoc();
                              if ($d["from"] == $uid) {
                  ?>
                                    <div class="w-75 text-end">
                                          <div class="py-1 ps-4 pe-2 ms-auto mb-1" style="border-radius: 20px 2px 20px 20px;background-color: #2C3E50 ; width: fit-content;">
                                                <span class=" text-white " style="font-size: 19px;"><?php echo $d["msg"] ?></span> &nbsp;
                                                <span class="text-white" style="font-size: 9px;">
                                                      <?php
                                                      $t = $d["msg_date"];
                                                      $time = explode(" ", $t);
                                                      echo $time[1];
                                                      ?>
                                                </span>
                                          </div>

                                    </div>
                              <?php

                              } else if ($d["to"] == $uid) {
                              ?>
                                    <div class="w-75 text-start">
                                          <div class=" py-1 ps-2 pe-4 ms-0 mb-1" style="border-radius:2px 20px 20px 20px;background-color: #2C3E50 ; width: fit-content;">

                                                <span class="text-white " style="font-size: 9px;">
                                                      <?php
                                                      $t = $d["msg_date"];
                                                      $time = explode(" ", $t);
                                                      echo $time[1];
                                                      ?>
                                                </span>&nbsp;

                                                <span class=" text-white" style="font-size: 19px;"><?php echo $d["msg"] ?></span>
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
            <div class="chatmsgbox w-100 p-1 border border-1">
                  <div class="input-group h-100">
                        <textarea type="text" class="form-control chatfiled" style="max-height: 40px;" id="msgclient" placeholder="Type Here"></textarea>
                        <button class="btn lbluebtn px-4" style="border-radius: 30px;" type="button" id="button-addon2" onclick="sendmsgcilent();"><i class="icofont-location-arrow "></i></button>
                  </div>
            </div>
      <?php
      } else {
      ?>
            <div class="w-100 text-center h-100 pt-5">
                  <p class="fs-5 mt-5">Please Login To Chat With Us</p>
                  <a class="btn lbluebtn" href="signinup.php">Login</a>
            </div>

      <?php
      }

      ?>
</div>
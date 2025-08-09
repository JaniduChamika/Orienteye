<?php
session_start();

require "connection.php";

if (!empty($_GET["id"])) {
      $ser = $_GET["id"];

?>
      <!DOCTYPE html>
      <html>

      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <title>Pricing Plan</title>
            <link rel="icon" href="resourse//logo//logo2.png" />

            <link rel="stylesheet" href="icofont.css" />

            <link rel="stylesheet" href="css/bootstrap.css" />

            <!-- footer  -->
            <link rel="stylesheet" href="css/footer.css" />
            <!-- heder  -->
            <link rel="stylesheet" href="css/header.css" />

            <link rel="stylesheet" href="css/pricingplan.css" />

            <link rel="stylesheet" href="css/comman.css" />
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


      </head>

      <body>
            <div class="loadingScreen" style="z-index: 999; background-color: white;" id="loadingscreen">


            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_f1bzzk5c.json"  background="transparent"  speed="0.8"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>


            </div>
            <div class="container-fluid p-0">

                  <div class="row">
                        <?php
                        require "component//header.php";
                        ?>
                  </div>
                  <!-- </nav> -->
                  <div class="row">
                        <div class="col-12 wrapper bgtheme">
                              <!-- <nav class="sticky-top"> -->
                              <div class="row wrap ">


                                    <div class="col-12 con bactheame pb-2">

                                          <div class="row position-relative pb-5">
                                                <div class="col-12 p-0" style="height: 500px;">

                                                      <div class="w-100 topimgBox position-fixed " style="height:500px;background-image: url('resourse//appimg//price.jpg');background-position: center;z-index: -1;">

                                                      </div>
                                                      <?php

                                                      $serrs = Database::search("SELECT * FROM `service` WHERE `ser_id` = '" . $ser . "';");
                                                      $serd = $serrs->fetch_assoc();

                                                      ?>

                                                      <div class="row  transbox " style="height: 500px;background-color: #000000bd;">
                                                            <span class=" text-white text-center my-auto fw-bold fs-teko" style="font-size: 5vmax;"><?php echo strtoupper($serd["ser_name"]) ?> PRICING PLANS</span>

                                                      </div>
                                                </div>
                                                <div class="col-12 con">

                                                      <!-- meke athulata danna content   -->
                                                      <?php

                                                      $planrs = Database::search("SELECT * FROM `plan_details` WHERE `service_id` = '" . $ser . "';");
                                                      if ($planrs->num_rows == 3) {

                                                      ?>

                                                            <div class="row mb-5">
                                                                  <div class="col-12 text-center my-5 textcol">
                                                                        <span class="fs-3 ">Get Started with EnjoyHQ for FREE!</span>
                                                                        <br />
                                                                        <span class="fs-6 ">No credit cart required Get Started.</span>
                                                                  </div>
                                                                  <div class="col-12 col-xxl-10 offset-xxl-1 mt-5">
                                                                        <div class="row gy-3">
                                                                              <!-- card  -->
                                                                              <div class="col-12 col-md-6 col-lg-4  order-2 order-lg-1 " style="z-index: 2;">
                                                                                    <div class="row h-100 pe-md-2 py-lg-4 ps-xl-4  ps-xxl-0 " data-aos="flip-right" data-aos-duration="1000">
                                                                                          <div class="col-12 col-lg-11 bg-white  mx-auto Pplanbox">
                                                                                                <?php
                                                                                                $ptyrs1 = Database::search("SELECT * FROM `plan_type` WHERE `pid` = 1");
                                                                                                $ptd1 = $ptyrs1->fetch_assoc();
                                                                                                $pdatrs1 = Database::search("SELECT * FROM `plan_details` WHERE `service_id` = '" . $ser . "' AND `plan_type` = 1;");
                                                                                                $pdatd1 = $pdatrs1->fetch_assoc();
                                                                                                ?>
                                                                                                <div class="row text-center mt-5">
                                                                                                      <div class="col-12 mb-3 ">
                                                                                                            <img class="img-fluid" src="resourse//priceplan//shield.png" style="height: 100px;" />
                                                                                                      </div>
                                                                                                      <span class="fs-5 fw-bold"><?php echo $ptd1["ptype"] ?></span>
                                                                                                      <br />
                                                                                                      <span class="fs-3 py-1">
                                                                                                            <span class="fw-bold">Rs.<?php echo $pdatd1["price"] ?>.00</span>
                                                                                                            <br>
                                                                                                            <span class="fs-6 fw-bold">Everything in Start</span>
                                                                                                      </span>
                                                                                                      <hr class="w-75 m-auto">
                                                                                                </div>

                                                                                                <div class="row pricingTable pt-3 px-5">
                                                                                                      <table class="w-100 ">
                                                                                                            <?php
                                                                                                            $content1 = explode(";", $pdatd1["content"]);

                                                                                                            for ($x = 0; $x < count($content1); $x++) {
                                                                                                            ?>
                                                                                                                  <tr>
                                                                                                                        <td style="width: 40px;"> <i class="icofont-tick-mark f-green"></i></td>
                                                                                                                        <td> <?php echo $content1[$x] ?></td>

                                                                                                                  </tr>
                                                                                                            <?php
                                                                                                            }

                                                                                                            ?>

                                                                                                      </table>
                                                                                                </div>


                                                                                          </div>

                                                                                          <div class="col-12 col-lg-11 bg-white mx-auto Pplanbox2">
                                                                                                <div class="row h-100">
                                                                                                      <div class=" col-10 offset-1 mt-auto mb-4">
                                                                                                            <?php

                                                                                                            if (isset($_SESSION["u"])) {
                                                                                                                  $uname = $_SESSION["u"]["fname"] . " " . $_SESSION["u"]["lname"];
                                                                                                                  $mobil = $_SESSION["u"]["mobile"];

                                                                                                            ?>
                                                                                                                  <a class="btn btn-success rounded-1 text-white fs-6 fw-bold d-grid" href="mailto:you email ?&subject=[<?php echo $serd["ser_name"] ?>] [basic plan] &body=Hi,I'm <?php echo $uname ?>. I select the basic plan of <?php echo $serd["ser_name"] ?>.%0D%0A %0D%0AContact me on <?php echo $mobil ?>%0D%0A %0D%0A ">
                                                                                                                        Contact Us
                                                                                                                  </a>
                                                                                                            <?php
                                                                                                            } else {
                                                                                                            ?>
                                                                                                                  <a class="btn btn-success rounded-1 text-white fs-6 fw-bold d-grid" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#priceplanMod">
                                                                                                                        Contact Us
                                                                                                                  </a>

                                                                                                            <?php
                                                                                                            }
                                                                                                            ?>



                                                                                                      </div>
                                                                                                </div>

                                                                                          </div>

                                                                                    </div>
                                                                                    <!-- </div> -->
                                                                              </div>
                                                                              <div class="col-12 col-md-6 offset-md-3 offset-lg-0 col-lg-4  order-1 order-lg-2  ">
                                                                                    <div class="row h-100 " data-aos="flip-right" data-aos-duration="1000" data-aos-delay="500">
                                                                                          <div class="col-12  col-lg-12 col-xl-11 bg-white mx-auto Pplanbox">
                                                                                                <?php
                                                                                                $ptyrs2 = Database::search("SELECT * FROM `plan_type` WHERE `pid` = 2");
                                                                                                $ptd2 = $ptyrs2->fetch_assoc();
                                                                                                $pdatrs2 = Database::search("SELECT * FROM `plan_details` WHERE `service_id` = '" . $ser . "' AND `plan_type` = 2;");
                                                                                                $pdatd2 = $pdatrs2->fetch_assoc();
                                                                                                ?>
                                                                                                <div class="row text-center mt-5">
                                                                                                      <div class="col-12 mb-3">
                                                                                                            <img class="img-fluid" src="resourse//priceplan//middel.png" />
                                                                                                      </div>
                                                                                                      <span class="fs-5 fw-bold"><?php echo $ptd2["ptype"] ?></span>
                                                                                                      <br />
                                                                                                      <span class="fs-3 py-1">
                                                                                                            <span class="fw-bold">Rs.<?php echo $pdatd2["price"] ?>.00 +</span>
                                                                                                            <br />
                                                                                                            <span class="fs-6 fw-bold">Everything in Grow</span>
                                                                                                      </span>
                                                                                                      <hr class="w-75 m-auto">
                                                                                                </div>

                                                                                                <div class="row pricingTable pt-3 px-5">

                                                                                                      <table class="w-100 ">
                                                                                                            <?php
                                                                                                            $content2 = explode(";", $pdatd2["content"]);

                                                                                                            for ($x = 0; $x < count($content2); $x++) {
                                                                                                            ?>
                                                                                                                  <tr>
                                                                                                                        <td style="width: 40px;"> <i class="icofont-tick-mark f-green"></i></td>
                                                                                                                        <td> <?php echo $content2[$x] ?></td>

                                                                                                                  </tr>
                                                                                                            <?php
                                                                                                            }

                                                                                                            ?>


                                                                                                      </table>

                                                                                                </div>

                                                                                                <!-- <div class="row mt-5 mb-5">
                                                                                                <div class="col-10 offset-1">
                                                                                                      <div class="row">
                                                                                                            <div class="col-12"> -->
                                                                                                <!-- <span class="btn btn-primary rounded-1 text-white fs-6 fw-bold d-grid">
                                                                                                Contact Us
                                                                                          </span> -->
                                                                                                <!-- </div>
                                                                                                      </div>

                                                                                                </div>
                                                                                          </div> -->
                                                                                          </div>
                                                                                          <div class="col-12 col-lg-12 col-xl-11 bg-white mx-auto Pplanbox2">
                                                                                                <div class="row h-100">
                                                                                                      <div class="col-10 offset-1 mt-auto mb-4">

                                                                                                            <?php

                                                                                                            if (isset($_SESSION["u"])) {
                                                                                                            ?>
                                                                                                                  <a class="btn btn-primary rounded-1 text-white fs-6 fw-bold d-grid" href="mailto:you email ?&subject=[<?php echo $serd["ser_name"] ?>] [Standard plan] &body=Hi,I'm <?php echo $uname ?>. I  select the Standard plan of <?php echo $serd["ser_name"] ?>.%0D%0A %0D%0AContact me on <?php echo $mobil ?>%0D%0A %0D%0A">
                                                                                                                        Contact Us
                                                                                                                  </a>
                                                                                                            <?php
                                                                                                            } else {
                                                                                                            ?>
                                                                                                                  <a class="btn btn-primary rounded-1 text-white fs-6 fw-bold d-grid" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#priceplanMod">
                                                                                                                        Contact Us
                                                                                                                  </a>

                                                                                                            <?php
                                                                                                            }
                                                                                                            ?>

                                                                                                      </div>
                                                                                                </div>

                                                                                          </div>
                                                                                    </div>
                                                                                    <!-- </div> -->
                                                                              </div>

                                                                              <div class="col-12 col-md-6 col-lg-4 order-3 ">
                                                                                    <div class="row h-100 ps-md-2 py-lg-4 pe-xl-4 pe-xxl-0 " data-aos="flip-right" data-aos-duration="1000" data-aos-delay="1000">
                                                                                          <div class="col-12 col-lg-11 bg-white mx-auto Pplanbox" style="z-index: 1000;">
                                                                                                <?php
                                                                                                $ptyrs3 = Database::search("SELECT * FROM `plan_type` WHERE `pid` = 3");
                                                                                                $ptd3 = $ptyrs3->fetch_assoc();
                                                                                                $pdatrs3 = Database::search("SELECT * FROM `plan_details` WHERE `service_id` = '" . $ser . "' AND `plan_type` = 3;");
                                                                                                $pdatd3 = $pdatrs3->fetch_assoc();
                                                                                                ?>
                                                                                                <div class="row text-center mt-5">
                                                                                                      <div class="col-12 mb-3">
                                                                                                            <img class="img-fluid" src="resourse//priceplan//primium.png" />
                                                                                                      </div>
                                                                                                      <span class="fs-5 fw-bold"><?php echo $ptd3["ptype"] ?></span>
                                                                                                      <br />
                                                                                                      <span class="fs-3 py-1">
                                                                                                            <span class="fw-bold">Rs.<?php echo $pdatd3["price"] ?>.00 +</span>
                                                                                                            <br />
                                                                                                            <span class="fs-6 fw-bold">Everything in Improved</span>
                                                                                                      </span>
                                                                                                      <hr class="w-75 m-auto">
                                                                                                </div>
                                                                                                <div class="row pricingTable pt-3 px-5">
                                                                                                      <table class="w-100">
                                                                                                            <?php
                                                                                                            $content3 = explode(";", $pdatd3["content"]);

                                                                                                            for ($x = 0; $x < count($content3); $x++) {
                                                                                                            ?>
                                                                                                                  <tr>
                                                                                                                        <td style="width: 40px;"> <i class="icofont-tick-mark f-green"></i></td>
                                                                                                                        <td> <?php echo $content3[$x] ?></td>

                                                                                                                  </tr>
                                                                                                            <?php
                                                                                                            }

                                                                                                            ?>
                                                                                                      </table>
                                                                                                </div>
                                                                                                <!-- <div class="row mt-5 mb-5">
                                                                                                <div class="col-10 offset-1">
                                                                                                      <div class="row">
                                                                                                            <div class="col-12"> -->
                                                                                                <!-- <span class="btn btn-secondary rounded-1 text-white fs-6 fw-bold d-grid">
                                                                                                Contact Us
                                                                                          </span> -->
                                                                                                <!-- </div>
                                                                                                      </div>

                                                                                                </div> -->
                                                                                                <!-- </div> -->
                                                                                          </div>
                                                                                          <div class="col-12 col-lg-11 bg-white mx-auto Pplanbox2" style="z-index: 1002;">
                                                                                                <div class="row h-100">
                                                                                                      <div class="col-10 offset-1 mt-auto mb-4">

                                                                                                            <?php

                                                                                                            if (isset($_SESSION["u"])) {
                                                                                                            ?>
                                                                                                                  <a class="btn btn-secondary rounded-1 text-white fs-6 fw-bold d-grid" href="mailto:you email ?&subject=[<?php echo $serd["ser_name"] ?>] [Premium plan] &body=Hi,I'm <?php echo $uname ?>. I select the Premium plan of <?php echo $serd["ser_name"] ?>.%0D%0A %0D%0AContact me on <?php echo $mobil ?>%0D%0A %0D%0A">
                                                                                                                        Contact Us
                                                                                                                  </a>
                                                                                                            <?php
                                                                                                            } else {
                                                                                                            ?>
                                                                                                                  <a class="btn btn-secondary rounded-1 text-white fs-6 fw-bold d-grid" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#priceplanMod">
                                                                                                                        Contact Us
                                                                                                                  </a>

                                                                                                            <?php
                                                                                                            }
                                                                                                            ?>
                                                                                                      </div>
                                                                                                </div>

                                                                                          </div>
                                                                                    </div>
                                                                              </div>

                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      <?php
                                                      }
                                                      ?>
                                                      <div class="row text-center textcol">
                                                            <span class="fs-4 mt-5 mb-5 py-5">A Comprehensive Platform for Modern Product
                                                                  <br />and UX Teams
                                                            </span>
                                                      </div>
                                                </div>

                                          </div>
                                    </div>
                              </div>



                        </div>
                        <div class="modal fade" id="priceplanMod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content">
                                          <div class="modal-header py-2">
                                                <h5 class="modal-title">Notice</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                                <p>Dear Customer,</p>
                                                <span>If you want to contact us, please sign in first.</span>
                                          </div>
                                          <div class="modal-footer py-2">
                                                <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                                                <a type="button" class="btn btn-primary" href="signinup.php">Got it</a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="fixtheamBtn">
                        <div class="form-check form-switch myswich">
                              <?php
                              require "darkmodebtn.php";
                              ?>
                        </div>
                  </div>
                  <!-- footer  -->
                  <?php
                  require "component//footer.php";
                  ?>

            </div>


            <script src="bootstrap.js"></script>
            <script src="js//home.js"></script>

            <!-- footer hader -->
            <script src="jquery//jquery.min.js"></script>

            <!-- footer  -->
            <script src="js//footer.js"></script>
            <script src="js//commen.js"></script>
            <!-- heder  -->

            <script src="jquery//heder//bootstrap.min.js"></script>
            <script src="js//header.js"></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

            <?php
            if (isset($_GET["thw"])) {
            ?>
                  <script>
                        themeChanger();
                  </script>

            <?php
            }
            ?>
            <script>
                  AOS.init();

                  const checkbox = document.getElementById('themechangerID');

                  checkbox.addEventListener('change', () => {
                        document.body.classList.toggle('dark');
                  })
            </script>
      </body>

      </html>
<?php

} else {
?>



      <script>
            window.location = "index.php";
      </script>
<?php
}
?>
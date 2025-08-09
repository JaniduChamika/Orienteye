<?php
session_start();

require "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Portfolio</title>
      <link rel="icon" href="resourse//logo//logo2.png" />

      <link rel="stylesheet" href="icofont.css" />

      <link rel="stylesheet" href="css/bootstrap.css" />
      <!-- footer  -->
      <link rel="stylesheet" href="css/footer.css" />
      <!-- heder  -->
      <link rel="stylesheet" href="css/header.css" />

      <link rel="stylesheet" href="css/contact.css" />

      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="stylesheet" href="css/all.min.css" />
      <!-- portfolio -->
      <link rel="stylesheet" href="css/portfolio.css" />
      <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" /> -->

      <link rel="stylesheet" href="css/comman.css" />

</head>

<body>
      <div class="loadingScreen" style="z-index: 999; background-color: white;" id="loadingscreen">


            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_f1bzzk5c.json" background="transparent" speed="0.8" style="width: 300px; height: 300px;" loop autoplay></lottie-player>


      </div>
      <div class="container-fluid p-0">

            <div class="row">
                  <?php
                  require "component//header.php";
                  ?>
            </div>
            <!-- </nav> -->
            <div class="row">
                  <div class="col-12 wrapper p-0">
                        <!-- <nav class="sticky-top"> -->
                        <div class="row wrap">


                              <div class="col-12 con bactheame pb-2">

                                    <div class="row position-relative pb-5 ">
                                          <div class="col-12">
                                                <div class="row" style="height: 500px;">

                                                      <div class="col-12 topimgBox position-fixed" style="height: 500px;background-image: url('resourse//appimg//portfolio1.jpg'); z-index: -1; left: 0px;">

                                                      </div>

                                                      <div class="col-12 transbox d-flex justify-content-center" style="height: 500px;">
                                                            <span class=" text-white text-center my-auto fw-bold fs-teko" style="font-size: 5vmax;">Portfolio</span>

                                                      </div>
                                                </div>

                                          </div>



                                          <div class="col-12  con">
                                                <div class="row pt-3">
                                                      <?php
                                                      $ser = Database::search("SELECT * FROM `service`;");

                                                      for ($x = 0; $x < $ser->num_rows; $x++) {
                                                            $ser_dat = $ser->fetch_assoc();
                                                            $pf = Database::search("SELECT * FROM `project` INNER JOIN `project_type` ON `project_type`.pt_id = `project`.project_type WHERE `service_id` = '" . $ser_dat["ser_id"] . "' ORDER BY `pro_id` DESC ");
                                                            if ($pf->num_rows > 0) {
                                                      ?>
                                                                  <div class="col-12" data-aos="fade-up" data-aos-duration="500">
                                                                        <div class="row pb-1">
                                                                              <p class="text-center h2 latestTitel fw-bold mt-3"><?php echo strtoupper($ser_dat["ser_name"]) ?></p>

                                                                        </div>
                                                                        <div class="row  d-flex justify-content-center ">
                                                                              <?php

                                                                              for ($i = 0; $i < $pf->num_rows; $i++) {
                                                                                    $pf_d = $pf->fetch_assoc();
                                                                              ?>
                                                                                    <div class="entry position-relative" data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="<?php echo 50 + ($i * 50) ?>">
                                                                                          <div class="position-absolute w-100 h-100 tracsdark">


                                                                                                <a>
                                                                                                      <div class="title">
                                                                                                            <strong><?php echo $pf_d["project_name"] ?></strong>
                                                                                                            <br />
                                                                                                            <span><?php echo $pf_d["pt_name"] ?></span>
                                                                                                      </div>
                                                                                                      <img src="resourse/portfolio/<?php echo $pf_d["p_image"] ?>" />

                                                                                                      <a href="<?php echo $pf_d["link"] ?>"> <i class="icofont-link"></i></a>
                                                                                                </a>
                                                                                          </div>
                                                                                          <ul style="white-space: nowrap;" class="d-flex">
                                                                                                <li style="background-color:<?php echo $pf_d["theam1"] ?>"></li>
                                                                                                <li style="background-color:<?php echo $pf_d["theam2"] ?>"></li>
                                                                                                <li style="background-color:<?php echo $pf_d["theam3"] ?>"></li>


                                                                                          </ul>
                                                                                    </div>
                                                                              <?php
                                                                              }
                                                                              ?>





                                                                        </div>
                                                                  </div>
                                                      <?php
                                                            }
                                                      }


                                                      ?>


                                                </div>
                                          </div>
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
      <!-- footer hader -->
      <script src="jquery//jquery.min.js"></script>
      <!-- footer  -->
      <script src="js//footer.js"></script>

      <!-- heder  -->
      <!-- <script src="jquery//heder//bootstrap.min.js"></script> -->
      <script src="js//header.js"></script>
      <script src="js//commen.js"></script>
      <script src="js//home.js"></script>
      <script src="js//lottie-player.js"></script>
      <!-- card dive  -->

      <?php
      if (isset($_GET["thw"])) {
      ?>
            <script>
                  themeChanger();
            </script>

      <?php
      }
      ?>

      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
            AOS.init();

            const checkbox = document.getElementById('themechangerID');

            checkbox.addEventListener('change', () => {
                  document.body.classList.toggle('dark');
            })
      </script>
      <!--Typekit-->
      <script type="text/javascript" src="//use.typekit.net/wyr7rug.js"></script>
      <script type="text/javascript">
            try {
                  Typekit.load();
            } catch (e) {}
      </script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script> -->
      <script src="js//portfolio.js"></script>
</body>

</html>
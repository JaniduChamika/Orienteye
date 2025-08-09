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

      <title>Our Services</title>
      <link rel="icon" href="resourse//logo//logo2.png" />

      <link rel="stylesheet" href="icofont.css" />

      <link rel="stylesheet" href="css/bootstrap.css" />

      <!-- footer  -->
      <link rel="stylesheet" href="css/footer.css" />
      <!-- heder  -->
      <link rel="stylesheet" href="css/header.css" />

      <link rel="stylesheet" href="css/ourService.css" />

      <link rel="stylesheet" href="css/comman.css" />

      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="stylesheet" href="css/all.min.css" />

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
                  <div class="col-12 wrapper p-0">
                        <!-- <nav class="sticky-top"> -->
                        <div class="row wrap">


                              <div class="col-12 con bactheame pb-2">
                                    <div class="row position-relative pb-5">

                                          <div class="col-12 " style="height: 500px;">

                                                <div class="col-12 topimgBox position-fixed" style="height: 500px;background-image: url('resourse//appimg//service.jpg'); background-position: center;z-index: -1;background-repeat: no-repeat;background-size: cover;">

                                                </div>

                                                <div class="row transbox" style="height: 500px;">
                                                      <span class=" text-white text-center my-auto fw-bold fs-teko" style="font-size: 5vmax;">OUR SERVICES</span>

                                                </div>
                                          </div>
                                          <div class="col-12 con">

                                                <!-- meke athulata danna content   -->
                                                <div class="row p-4 p-lg-5 ">
                                                      <div class="col-12">
                                                            <div class="row">

                                                                  <?php
                                                                  $rs = Database::search("SELECT * FROM `service`");
                                                                  $srow = $rs->num_rows;
                                                                  for ($i = 0; $i < $srow; $i++) {
                                                                        $drow = $rs->fetch_assoc();
                                                                  ?>
                                                                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                                                                              <div class="row p-2">
                                                                                    <div class="col-12 servicebox" style="background-image: url('resourse//services//<?php echo $drow["simg"] ?>');">
                                                                                          <div class="row  h-100 ">
                                                                                                <div class="col-12 transdiv1 d-flex px-5">
                                                                                                      <h1 class="mt-auto mb-5 text-light fw-bold"><?php echo  $drow["ser_name"] ?></h1>

                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  <?php

                                                                  }
                                                                  ?>
                                                                  <!-- <div class="col-4 ">
                                                                        <div class="row p-2">
                                                                              <div class="col-12 servicebox" style="background-image: url('resourse//appimg//webd1.jpg');">
                                                                                    <div class="row  h-100 ">
                                                                                          <div class="col-12 transdiv1 d-flex px-5">
                                                                                                <h1 class="mt-auto mb-5 text-light fw-bold">Web Design</h1>

                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-4 ">
                                                                        <div class="row p-2">
                                                                              <div class="col-12 servicebox" style="background-image: url('resourse//appimg//webd2.jpg');">
                                                                                    <div class="row  h-100 ">
                                                                                          <div class="col-12 transdiv1 d-flex px-5">
                                                                                                <h1 class="mt-auto mb-5 text-light fw-bold">Web Developing</h1>

                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>

                                                                  <div class="col-4 ">
                                                                        <div class="row p-2">
                                                                              <div class="col-12 servicebox" style="background-image: url('resourse//appimg//webd3.jpg');">
                                                                                    <div class="row  h-100 ">
                                                                                          <div class="col-12 transdiv1 d-flex px-5">
                                                                                                <h1 class="mt-auto mb-5 text-light fw-bold">Logo Design</h1>

                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div> -->
                                                            </div>
                                                      </div>
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
      <script src="jquery//heder//bootstrap.min.js"></script>
      <script src="js//header.js"></script>
      <script src="js//commen.js"></script>
      <script src="aos.js"></script>
      <script src="js//lottie-player.js"></script>

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
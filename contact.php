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

      <title>Contact Us</title>
      <link rel="icon" href="resourse//logo//logo2.png" />

      <link rel="stylesheet" href="icofont.css" />

      <link rel="stylesheet" href="css/bootstrap.css" />
      <!-- footer  -->
      <link rel="stylesheet" href="css/footer.css" />
      <!-- heder  -->
      <link rel="stylesheet" href="css/header.css" />

      <link rel="stylesheet" href="css/contact.css" />

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

                                    <div class="row position-relative pb-5 ">
                                          <div class="col-12 " style="height: 500px;">

                                                <div class="col-12 topimgBox position-fixed" style="height: 500px;background-image: url('resourse//contactus//contactus.png'); z-index: -1;">

                                                </div>

                                                <div class="row transbox" style="height: 500px;">
                                                      <span class=" text-white text-center my-auto fw-bold fs-teko" style="font-size: 5vmax;">BE IN TOUCH WITH US</span>

                                                </div>
                                          </div>



                                          <div class="col-12  con">
                                                <div class="row">


                                                      <div class="col-12 col-lg-7 col-xl-6 " data-aos="fade-right" data-aos-duration="1000">
                                                            <div class="row px-3 px-md-0">
                                                                  <div class="col-12 col-md-10 col-lg-11 col-xxl-10 m-auto contentTop ">
                                                                        <div class="row pt-4">
                                                                              <h2>Send us your inconvenience</h2>
                                                                        </div>
                                                                        <div class="row gy-2 py-3 px-2">
                                                                              <div class="col-6">
                                                                                    <label for="fnameID">First Name</label>
                                                                                    <input type="text" id="fnameID" class="form-control w-100 inputfeilds" placeholder="First Name" />
                                                                                    <span class="text-danger text-start error_css mt-0" style="font-size: 16px;" id="error1"></span>
                                                                              </div>
                                                                              <div class="col-6">
                                                                                    <label for="lnameID">Last Name</label>

                                                                                    <input type="text" id="lnameID" class="form-control w-100 inputfeilds" placeholder="Last Name" />
                                                                                    <span class="text-danger text-start error_css mt-0" style="font-size: 16px;" id="error2"></span>
                                                                              </div>
                                                                              <div class="col-12">
                                                                                    <label for="mobileID">Contact Number</label>

                                                                                    <input type="text" id="mobileID" class="form-control w-100 inputfeilds" placeholder="Contact Number" />
                                                                                    <span class="text-danger text-start error_css mt-0" style="font-size: 16px;" id="error3"></span>

                                                                              </div>
                                                                              <div class="col-12">
                                                                                    <label for="msgID">Massage</label>

                                                                                    <textarea id="msgID" class="form-control inputfeilds" style="height: 200px;" placeholder="Write your massage here"></textarea>
                                                                                    <span class="text-danger text-start error_css mt-0" style="font-size: 16px;" id="error4"></span>
                                                                              </div>
                                                                              <div class="col-12 text-end">
                                                                                    <a class="btn px-5 darkbtn" href="#" id="sendmailbtnID" onclick="sendmail();">Send</a>
                                                                              </div>


                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="col-12 col-md-10 col-lg-5 col-xl-6 mx-auto" data-aos="fade-left" data-aos-duration="1000">
                                                            <div class="row px-2 px-md-0">
                                                                  <div class="col-12 contentTop">
                                                                        <div class="row pt-4">
                                                                              <h2>Contact Info</h2>
                                                                        </div>
                                                                        <div class="row py-3 px-4">
                                                                              <div class="col-12 col-xl-7 col-xxl-6">
                                                                                    <div class="row  gy-4">
                                                                                          <div class="col-12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50">
                                                                                                <label class="fw-bold fs-5 ">Call Us</label>
                                                                                                <br />
                                                                                                <span class="tb-50 fs-5"> <i class="icofont-phone"></i> +94782392745</span>
                                                                                                <br />
                                                                                                <span class="tb-50 fs-5"><i class="icofont-phone"></i> +94778482017</span>
                                                                                                <br />

                                                                                                <span class="tb-50 fs-5"><i class="icofont-phone"></i> +94758171458</span>

                                                                                          </div>
                                                                                          <div class="col-12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="250">
                                                                                                <label class="fw-bold fs-5">Mail Us</label>
                                                                                                <br />

                                                                                                <span class="tb-50 fs-5"><i class="icofont-email"></i> uzebdevelopers@gmail.com</span>
                                                                                          </div>
                                                                                          <div class="col-12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="450">
                                                                                                <label class="fw-bold fs-5">Our Address</label>
                                                                                                <br />

                                                                                                <span class="tb-50 fs-5"><i class="icofont-location-pin"></i> 29/2,Temple Rd, Ganemulla</span>
                                                                                          </div>
                                                                                          <div class="col-12 d-xl-none" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="650">
                                                                                                <label class="fw-bold fs-5">Keep in touch</label>
                                                                                                <br />
                                                                                                <span class="social"><a href="https://www.facebook.com/uzeb.developers" class="text-decoration-none text-dark"><i class="icofont-facebook fs-4"></i></a></span>
                                                                                                <a href="https://wa.me/+94754096233" class="text-decoration-none text-dark"><span class="social"><i class="icofont-whatsapp fs-4"></i></span></a>
                                                                                                <span class="social"><a href="#" class="text-decoration-none text-dark"><i class="icofont-instagram fs-4"></i></a></span>
                                                                                                <span class="social"><a href="https://www.linkedin.com/company/74903672" class="text-decoration-none text-dark"><i class="icofont-linkedin fs-4"></i></a></span>



                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-12 col-xl-5 col-xxl-6 text-center d-none d-xl-block">
                                                                                    <label class="fw-bold fs-5">Keep in touch</label>
                                                                                    <br />
                                                                                    <span class="social"><a href="https://www.facebook.com/uzeb.developers" class="text-decoration-none text-dark"><i class="icofont-facebook fs-3"></i></a></span>
                                                                                    <br />
                                                                                    <span class="social"><a href="https://wa.me/+94754096233" class="text-decoration-none text-dark"><i class="icofont-whatsapp fs-3"></i></a></span>
                                                                                    <br />

                                                                                    <span class="social"><a href="#" class="text-decoration-none text-dark"><i class="icofont-instagram fs-3"></i></a></span>
                                                                                    <br />

                                                                                    <span class="social"><a href="https://www.linkedin.com/company/74903672" class="text-decoration-none text-dark"><i class="icofont-linkedin fs-3"></i></a></span>
                                                                              </div>

                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="col-10 col-md-12 col-xxl-8 mx-auto">
                                                            <div class="row d-flex align-top">

                                                                  <div class="col-12 col-lg-11  col-xxl-4 " data-aos="fade-up" data-aos-duration="1000">
                                                                        <div class="row py-2">
                                                                              <div class="col-12 col-md-9 offset-md-1 col-lg-9   offset-lg-1 col-xxl-12 offset-xxl-0 admininfo ">
                                                                                    <div class="row ">
                                                                                          <div class="col-8 offset-2 col-md-4 offset-md-0  col-xxl-8 offset-xxl-2 adminimgbox-right pt-0 pe-0 pt-md-3 pe-md-3 ps-0 pb-0 pt-xxl-0 pe-xxl-0">
                                                                                                <img src="resourse//contactus//images.jpg" class="adminImg-right w-100">
                                                                                          </div>
                                                                                          <div class="col-10 offset-1  col-md-8 offset-md-0 col-xxl-12 my-md-auto  adminindetails">
                                                                                                <div class="row p-5 text-center text-md-start text-xxl-center">
                                                                                                      <div class="col-12">
                                                                                                            <h3 style="margin-bottom: -5px;">Nidula Gunawardana</h3>
                                                                                                            <span class="tb-50" style="margin-top: 0px;">Developer</span>

                                                                                                      </div>

                                                                                                      <div class="col-12 pt-1">
                                                                                                            <!-- &nbsp;&nbsp;
                                                                                    <a href="https://wa.me/+94778482017" class="text-decoration-none textcol ">
                                                                                          <span class="fs-2"><i class="icofont-whatsapp"></i></span>
                                                                                    </a>
                                                                                    &nbsp;&nbsp;

                                                                                    <a href="https://www.linkedin.com/in/nidula-gunawardana-22819a1b3" class="text-decoration-none textcol ">
                                                                                          <span class="fs-2"><i class="icofont-linkedin"></i></span>
                                                                                    </a>
                                                                                    &nbsp;&nbsp;
                                                                                    <a href="mailto:nidulam@outlook.com" class="text-decoration-none textcol mx-auto">
                                                                                          <span class="fs-2"><i class="icofont-email"></i></span>
                                                                                    </a> -->

                                                                                                            <ul class="social-icons pt-3">
                                                                                                                  <li><a class="facebook fs-3 text-decoration-none text-black-50" href="https://www.linkedin.com/in/nidula-gunawardana-22819a1b3"><i class="icofont-linkedin fs-4"></i></a></li>
                                                                                                                  <li><a class="whatsapp fs-3 text-decoration-none text-black-50" href="https://wa.me/+94778482017"><i class="icofont-whatsapp fs-4"></i></a></li>
                                                                                                                  <li><a class="dribbble fs-3 text-decoration-none text-black-50" href="mailto:nidulam@outlook.com"><i class="icofont-email fs-4"></i></a></li>

                                                                                                            </ul>

                                                                                                      </div>
                                                                                                </div>

                                                                                          </div>
                                                                                    </div>

                                                                              </div>
                                                                        </div>
                                                                  </div>

                                                                  <div class="col-12  col-lg-11 col-xxl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                                                        <div class="row py-2">
                                                                              <div class="col-12 col-md-9 offset-md-2 col-lg-9  offset-lg-2 col-xxl-12 offset-xxl-0 admininfo ">
                                                                                    <div class="row text-xxl-center">
                                                                                          <div class="col-8 offset-2 col-md-4 offset-md-0  col-xxl-8 offset-xxl-2  order-md-last order-xxl-first  adminimgbox-left pt-0 ps-0 pt-md-3 pe-0 ps-md-3 pb-0 pt-xxl-0 ps-xxl-0">
                                                                                                <img src="resourse//contactus//images.jpg" class="adminImg-left w-100">
                                                                                          </div>
                                                                                          <div class="col-10 offset-1  col-md-7 offset-md-0 col-xxl-12 my-md-auto  adminindetails">
                                                                                                <div class="row p-5 p-md-5 text-center text-md-start  text-xxl-center">
                                                                                                      <div class="col-12">
                                                                                                            <h3 style="margin-bottom: -5px;">Janidu Chamika</h3>
                                                                                                            <span class="tb-50" style="margin-top: 0px;">Developer</span>

                                                                                                      </div>

                                                                                                      <div class="col-12 pt-1">
                                                                                                            <!-- &nbsp;&nbsp;
                                                                                    <a href="https://wa.me/+94782392745" class="text-decoration-none textcol">
                                                                                          <span class="fs-2"><i class="icofont-whatsapp"></i></span>
                                                                                    </a>
                                                                                    &nbsp;&nbsp;
                                                                                    <a href="https://www.linkedin.com/in/janidu-chamika" class="text-decoration-none textcol">
                                                                                          <span class="fs-2"><i class="icofont-linkedin"></i></span>
                                                                                    </a>
                                                                                    &nbsp;&nbsp;
                                                                                    <a href="mailto:janchamika1@gmail.com" class="text-decoration-none textcol mx-auto">
                                                                                          <span class="fs-2"><i class="icofont-email"></i></span>
                                                                                    </a> -->

                                                                                                            <ul class="social-icons pt-3">
                                                                                                                  <li><a class="facebook fs-3 text-decoration-none text-black-50" href="https://www.linkedin.com/in/janidu-chamika"><i class="icofont-linkedin fs-4"></i></a></li>
                                                                                                                  <li><a class="whatsapp fs-3 text-decoration-none text-black-50" href="https://wa.me/+94782392745"><i class="icofont-whatsapp fs-4"></i></a></li>
                                                                                                                  <li><a class="dribbble fs-3 text-decoration-none text-black-50" href="mailto:janchamika1@gmail.com"><i class="icofont-email fs-4"></i></a></li>

                                                                                                            </ul>
                                                                                                      </div>
                                                                                                </div>

                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-12  col-lg-11 col-xxl-4 " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                                                        <div class="row py-2">
                                                                              <div class="col-12 col-md-9  offset-md-1 col-lg-9  offset-lg-1 col-xxl-12 offset-xxl-0 admininfo ">
                                                                                    <div class="row">
                                                                                          <div class="col-8 offset-2 col-md-4 offset-md-0  col-xxl-8 offset-xxl-2 adminimgbox-right pt-0 pe-0 pt-md-3 pe-md-3 ps-0 pb-0 pt-xxl-0 pe-xxl-0">
                                                                                                <img src="resourse//contactus//images.jpg" class="adminImg-right w-100">
                                                                                          </div>
                                                                                          <div class="col-10 offset-1  col-md-7 offset-md-0 col-xxl-12 my-md-auto adminindetails">
                                                                                                <div class="row p-5 text-center text-md-start  text-xxl-center">
                                                                                                      <div class="col-12">
                                                                                                            <h3 style="margin-bottom: -5px;">Ashan Kavindu</h3>
                                                                                                            <span class="tb-50" style="margin-top: 0px;">Developer</span>

                                                                                                      </div>

                                                                                                      <div class="col-12 pt-1">
                                                                                                            <!-- &nbsp;&nbsp;
                                                                                    <a href="https://wa.me/+94758171458" class="text-decoration-none textcol mx-auto">
                                                                                          <span class="fs-2"><i class="icofont-whatsapp"></i></span>
                                                                                    </a>
                                                                                    &nbsp;&nbsp;
                                                                                    <a href="https://www.facebook.com/Ashankavindu.2021" class="text-decoration-none textcol mx-auto">
                                                                                          <span class="fs-2"><i class="icofont-facebook"></i></span>
                                                                                    </a>
                                                                                    &nbsp;&nbsp;
                                                                                    <a href="mailto:Ashankavindu2020@gmail.com" class="text-decoration-none textcol mx-auto">
                                                                                          <span class="fs-2"><i class="icofont-email"></i></span>
                                                                                    </a> -->

                                                                                                            <ul class="social-icons pt-3">
                                                                                                                  <li><a class="facebook fs-3 text-decoration-none text-black-50" href="https://www.facebook.com/Ashankavindu.2021"><i class="icofont-facebook fs-4"></i></a></li>
                                                                                                                  <li><a class="whatsapp fs-3 text-decoration-none text-black-50" href="https://wa.me/+94758171458"><i class="icofont-whatsapp fs-4"></i></a></li>
                                                                                                                  <li><a class="dribbble fs-3 text-decoration-none text-black-50" href="mailto:Ashankavindu2020@gmail.com"><i class="icofont-email fs-4"></i></a></li>

                                                                                                            </ul>
                                                                                                      </div>
                                                                                                </div>

                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>

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
      <script src="js//home.js"></script>
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

      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
            AOS.init();

            const checkbox = document.getElementById('themechangerID');

            checkbox.addEventListener('change', () => {
                  document.body.classList.toggle('dark');
            })
      </script>
</body>

</html>
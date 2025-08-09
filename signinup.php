<?php
session_start();
if (isset($_SESSION["u"])) {
?>
      <script>
            window.location = "index.php";
      </script>
<?php
} else {
?>
      <!DOCTYPE html>
      <html>

      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">


            <title>Sign In/Up</title>
            <link rel="icon" href="resourse//logo//logo2.png" />

            <link rel="stylesheet" href="css/bootstrap.css" />
            <link rel="stylesheet" href="css/signinup.css" />
            <link rel="stylesheet" href="css/comman.css" />
            <link rel="stylesheet" href="icofont.css" />
            <link rel="icon" href="" />




      </head>

      <body>
            <div class="loadingScreen" style="z-index: 999; background-color: white;" id="loadingscreen">


            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_f1bzzk5c.json"  background="transparent"  speed="0.8"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>


            </div>
            <div class="container-fluid vh-100">
                  <div class="row  h-100">
                        <div class="col-11 col-md-8 col-lg-12 col-xl-11 col-xxl-9 m-auto trans">
                              <div class="row p-lg-5 ">
                                    <div class="col-12 boxmain">
                                          <div class="row h-100 position-relative">

                                                <div class="col-12  col-lg-6 signupbox d-none d-lg-block" id="signupboxID">
                                                      <div class="row  h-100 py-4 px-4 p-md-5 text-center">
                                                            <div class="col-12  m-auto">
                                                                  <div class="row">
                                                                        <h2 class="styletest">Sign Up</h2>
                                                                  </div>
                                                            </div>
                                                            <div class="col-12 detailboxinup">

                                                                  <div class="row">
                                                                        <div class="col-6">
                                                                              <div class="row ps-1">
                                                                                    First Name
                                                                              </div>
                                                                              <div class="row pe-1">
                                                                                    <input type="text" class="form-control my-0" placeholder="First Name" onclick="errorRemove('f');" id="fn" />
                                                                                    <span class="text-danger text-start error_css" id="fn_er"></span>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                              <div class="row ps-1">
                                                                                    Last Name
                                                                              </div>
                                                                              <div class="row ps-1">
                                                                                    <input type="text" class="form-control" placeholder="Last Name" onclick="errorRemove('l');" id="ln" />
                                                                                    <span class="text-danger text-start error_css" id="ln_er"></span>

                                                                              </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                              <div class="row ps-1">
                                                                                    Email Address
                                                                              </div>
                                                                              <div class="row">
                                                                                    <input type="text" class="form-control" placeholder="Email Address" onclick="errorRemove('e');" id="e" />
                                                                                    <span class="text-danger text-start error_css" id="e_er"></span>

                                                                              </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                              <div class="row ps-1 text-nowrap">
                                                                                    Mobile Number
                                                                              </div>
                                                                              <div class="row pe-1">
                                                                                    <input type="text" class="form-control" placeholder="Mobile Number" onclick="errorRemove('m');" id="m" />
                                                                                    <span class="text-danger text-start error_css" id="m_er"></span>

                                                                              </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                              <div class="row ps-1">
                                                                                    Gender
                                                                              </div>
                                                                              <div class="row ps-1">
                                                                                    <select class="form-select" id="g">
                                                                                          <option value="1"> Male </option>
                                                                                          <option value="2"> Female </option>

                                                                                    </select>
                                                                              </div>
                                                                        </div>

                                                                        <div class="col-6">
                                                                              <div class="row ps-1">
                                                                                    Password
                                                                              </div>
                                                                              <div class="row pe-1">
                                                                                    <input type="password" class="form-control" placeholder="Password" onclick="errorRemove('p');" id="pa" />
                                                                                    <span class="text-danger text-start error_css" id="pa_er"></span>

                                                                              </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                              <div class="row ps-1 text-nowrap">
                                                                                    Re-Type Password
                                                                              </div>
                                                                              <div class="row ps-1">
                                                                                    <input type="password" class="form-control" placeholder="Re-Type Password" onclick="errorRemove('rp');" id="repa" />
                                                                                    <span class="text-danger text-start error_css" id="repa_er"></span>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-12 pt-4">

                                                                              <button class="btn lblue-outline fw-bold px-4 py-2 " id="signupbtn" onclick="signup();"><i class="icofont-key-hole"></i>&nbsp; Sign Up</button>

                                                                        </div>
                                                                        <div class="col-12  d-lg-none pt-2">
                                                                              <!-- <div class="row"> -->

                                                                              <span>Are you already have account?</span> <a href="#" class="fw-bold" onclick="viewsignin();changetosignin();">Sign In here</a>
                                                                              <!-- </div> -->
                                                                        </div>
                                                                  </div>
                                                            </div>


                                                      </div>
                                                </div>
                                                <div class="col-12  col-lg-6 signinbox d-lg-block h-100" id="signinboxID">
                                                      <div class="row  h-100  py-4 px-4 p-md-5 text-center  ">

                                                            <div class="col-12  m-auto ">
                                                                  <div class="row pt-lg-5">
                                                                        <h2 class="styletest">Sign In</h2>
                                                                  </div>
                                                            </div>
                                                            <div class="col-12 m-auto detailboxinup">

                                                                  <div class="row  ">
                                                                        <div class="col-12">
                                                                              <div class="row ps-1">
                                                                                    Email Address
                                                                              </div>
                                                                              <div class="row">
                                                                                    <?php

                                                                                    $e = "";
                                                                                    $p = "";
                                                                                    if (isset($_COOKIE["e"])) {
                                                                                          $e = $_COOKIE["e"];
                                                                                    }

                                                                                    if (isset($_COOKIE["p"])) {
                                                                                          $p = $_COOKIE["p"];
                                                                                    }
                                                                                    ?>
                                                                                    <input type="text" class="form-control" placeholder="Email Address" value="<?php echo $e; ?>" onclick="error_remove('e');" id="email" />
                                                                                    <span class="text-danger text-start error_css" id="error1"></span>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                              <div class="row ps-1">
                                                                                    Password
                                                                              </div>
                                                                              <div class="row ">
                                                                                    <input type="password" class="form-control" placeholder="Password" value="<?php echo $p; ?>" onclick="error_remove('p');" id="pass" />
                                                                                    <span class="text-danger text-start error_css" id="error2"></span>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-12 px-1">
                                                                              <div class="form-check text-start">
                                                                                    <input class="form-check-input" type="checkbox" id="r" value="1" <?php
                                                                                                                                                      if (isset($_COOKIE["e"])) {
                                                                                                                                                      ?> checked <?php
                                                                                                                                                            }
                                                                                                                                                                  ?>>
                                                                                    <label class="form-check-label " for="r">
                                                                                          Remember Me
                                                                                    </label>
                                                                              </div>
                                                                        </div>

                                                                        <div class="col-12 pt-3">
                                                                              <!-- <div class="row"> -->
                                                                              <button class="btn dsilever-outline fw-bold px-4 py-2" id="signinbtn" onclick="signin();"><i class="icofont-key"></i>&nbsp; Sign In</button>

                                                                              <!-- </div> -->
                                                                        </div>
                                                                        <div class="col-12">
                                                                              <div class="row py-2">
                                                                                    <span> Are You <a href="#" onclick="goForgotPassword();">Forgot Your Password?</a></span>
                                                                              </div>
                                                                        </div>
                                                                        <hr class="d-lg-none" />
                                                                        <div class="col-12 d-lg-none text-center">
                                                                              <!-- <div class="row"> -->

                                                                              <span>Are you haven't account?</span> <a href="#" class=" fw-bold" onclick="viewsignup();changetosignup()">Sign up here</a>
                                                                              <!-- </div> -->
                                                                        </div>
                                                                  </div>

                                                            </div>


                                                      </div>
                                                </div>
                                                <div class="col-12 col-lg-6 upcontent bac1 position-absolute d-none d-lg-block" id="hidebox">
                                                      <div class="row h-100">
                                                            <div class="col-12 m-auto">
                                                                  <div class="row text-center my-auto">
                                                                        <div class="col-10 offset-1">
                                                                              <p class="tit" id="titlebox1">Sign In</p>
                                                                              <p id="descri" class="dec">Create an account to take the advantage</p>
                                                                        </div>
                                                                  </div>
                                                                  <div class="row text-center">
                                                                        <button class="btn lbluebtn m-auto inupbtn fw-bold shadow-lbten" style="width: fit-content;" onclick="changetosignup();viewsignup();" id="gosignupbtn">Go To Sign Up</button>

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




            <script src="js//signinup.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="js//commen.js"></script>
            <script src="js//lottie-player.js"></script>
            <?php
            if (isset($_GET["up"])) {
            ?>
                  <script>
                        changetosignup();
                        viewsignup();
                  </script>
            <?php
            }
            ?>
      </body>

      </html>
<?php
}
?>
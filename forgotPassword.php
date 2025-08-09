<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <title>Forgot Password</title>
      <link rel="icon" href="resourse//logo//logo2.png" />

      <link rel="stylesheet" href="css/bootstrap.css" />

      <link rel="stylesheet" href="icofont.css" />
      <link rel="stylesheet" href="css/comman.css" />
      <link rel="stylesheet" href="css/forgotPassword.css" />

</head>

<body>
      <div class="container-fluid vh-100 ">
            <div class="row  h-100 bg-color rounded">
                  <div class="m-auto  fpBox ">
                        <div class="row p-3 py-4 pb-1 ">

                              <div class="col-12">
                                    <div class="row ">

                                          <div class="col-2 col-md-2 d-inline-block text-end offset-2 offset-md-0">
                                                <img src="resourse//logo//logo2.png" style="height: 35px;" class="mt-1" />
                                             

                                          </div>

                                          <div class="col-8 col-md-9 text-start  d-inline-block ps-0 pe-3 pt-1 p-lg-0">
                                                <h2 class="my-auto">Orianteye Solutions</h2>
                                          </div>
                                    </div>

                              </div>
                              <div class="col-12">
                                    <div class="row pb-2" id="row">
                                          <div class="col-12 pt-3">
                                                <span class="fs-5">Your Email Address</span> <i class="icofont-arrow-right fs-4"></i>
                                          </div>
                                          <div class="col-12 pt-2" style="height: 70px;">
                                                <?php
                                                $email = "";
                                                if (isset($_GET["e"])) {
                                                      $email = $_GET["e"];
                                                }
                                                ?>
                                                <input type="email" class="form-control inpfiled" onclick="erroclear()" value="<?php echo $email ?>" id="email" placeholder="Email Address" />
                                                <span class="text-danger text-start error_css mt-0" style="font-size: 16px;" id="error"></span>
                                          </div>
                                          <div class="col-12 ">
                                                <span class="fs-6">No Account? <a href="signinup.php?up=" class="text-decoration-none">Create One</a></span>
                                          </div>

                                          <div class="col-6 pt-4">
                                                <a class="btn dsilverbtn text-white d-grid" href="signinup.php">Cancel</a>
                                          </div>
                                          <div class="col-6 pt-4">
                                                <span class="btn lbluebtn text-white d-grid" onclick="forgotpass();">Next</span>
                                          </div>
                                    </div>

                              </div>
                              <div class="col-12 px-0 position-relative " style="height: 25px;">
                                    <div class=" lodingimg h-100 d-none" id="lodingbox"  style=" background-image: url('resourse//appimg//lodingimage.svg'); ">

                                    </div>
                              </div>
                        </div>

                  </div>
            </div>

      </div>

      <script src="js//signinup.js"></script>
</body>

</html>
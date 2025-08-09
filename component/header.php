<div class="col-12 col-md-12 offset-md-0 mt-lg-0 mt-0 mb-0  header_line my-auto">
      <div class="navigation-wrap start-header start-style">
            <div class="col-12">
                  <div class="row">
                        <div class="col-12">
                              <nav class="navbar navbar-expand-lg">

                                    <a class="navbar-brand ms-auto me-0 ms-lg-5 " href="index.php" target="_blank"><img class="logoimag" src="resourse//logo//logo2.png" id="logoimageID" alt="" /></a>
                                    <a href="index.php" class="me-auto text-decoration-none"> <span class="companyName  ms-5 ms-lg-4 me-auto "><span class="f-name fw-bold"></span> Orianteye Solutions</span>
                                    </a>
                                    <button class="navbar-toggler closebtn me-3" style="z-index: 999999999;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                          <span class="navbar-toggler-icon "></span>
                                    </button>

                                    <div class="collapse navbar-collapse text-center col-xl-8" id="navbarSupportedContent">
                                          <ul class="navbar-nav ml-auto py-lg-4 py-md-0 list-unstyled  mx-auto listheder  ">
                                                <li class="nav-item ps-0 ps-md-0  mx-auto">
                                                      <a class="nav-link textz " href="index.php" id="homeID">Home</a>
                                                </li>
                                                <li class="nav-item ps-0 ps-md-0  mx-auto ">
                                                      <a class="nav-link textz " href="ourService.php" id="ourservicetag">Our Service</a>

                                                </li>
                                                <li class="nav-item ps-0 ps-md-0  mx-auto " id="webdId">
                                                      <a class="nav-link dropdown-toggle textz  text-decoration-none" onmouseover="showdrop('webdId');" onmouseout="hidedrop('webdId');" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pricing Plans</a>
                                                      <div class="dropdown-menu " onmouseout="hidedrop('webdId');">
                                                            <?php

                                                            $rs = Database::search("SELECT * FROM `service`");
                                                            $n = $rs->num_rows;

                                                            for ($i = 0; $i < $n; $i++) {
                                                                  $d = $rs->fetch_assoc();
                                                                  $planrs = Database::search("SELECT * FROM `plan_details` WHERE `service_id` = '" . $d["ser_id"] . "';");
                                                                  if ($planrs->num_rows == 3) {
                                                            ?>
                                                                        <a class="dropdown-item " href="#" id="pricetag<?php echo $d["ser_id"]; ?>" onclick="gopriceplan(<?php echo $d['ser_id']; ?>)"><?php echo $d["ser_name"]; ?></a>
                                                            <?php
                                                                  }
                                                            }
                                                            ?>

                                                      </div>
                                                </li>

                                                <li class="nav-item ps-0 ps-md-0  mx-auto" id="webpId">
                                                      <a class="nav-link textz " href="portfolio.php" id="portfolio">Portfolio</a>

                                                      <!-- <a class="nav-link dropdown-toggle textz " data-toggle="dropdown" href="portfolio.php" role="button" aria-haspopup="true" onmouseover="showdrop('webpId');" onmouseout="hidedrop('webpId');" aria-expanded="false">Portfolio</a> -->
                                                      <!-- <div class="dropdown-menu " onmouseout="hidedrop('webpId');">
                                                            <a class="dropdown-item" href="#">Web Deisgn</a>
                                                            <a class="dropdown-item" href="#">Web Programming</a>
                                                            <a class="dropdown-item" href="#">Graphic Design</a>

                                                      </div> -->
                                                </li>

                                                <li class="nav-item ps-0 ps-md-0  mx-auto">
                                                      <a class="nav-link textz " href="contact.php" id="contacttag">Contact Us</a>
                                                </li>


                                                <?php
                                                if (isset($_SESSION["u"])) {
                                                ?>
                                                      <li class="nav-item ps-0 ps-md-0 mx-auto ms-lg-5  ">
                                                            <a class="nav-link textz" href="#" onclick="signout();">Sign Out</a>
                                                      </li>
                                                <?php
                                                } else {
                                                ?>
                                                      <li class="nav-item ps-0 ps-md-0 mx-auto ms-lg-5  ">
                                                            <a class="nav-link textz" href="signinup.php">Sign In/Up</a>
                                                      </li>
                                                <?php
                                                }
                                                ?>

                                                <!-- <li class="nav-item ps-5 ps-md-0 mx-auto ms-lg-5  ">
                                                      <a class="nav-link textz" href="signinup.php">Sign In/Up</a>
                                                </li> -->
                                          </ul>
                                    </div>

                              </nav>
                        </div>
                  </div>
            </div>
      </div>


</div>
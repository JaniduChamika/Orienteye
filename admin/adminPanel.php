<?php

require "connection.php";
session_start();
if (isset($_SESSION["a"])) {


?>

      <!DOCTYPE html>
      <html>

      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <title>Admin Panal</title>
            <link rel="icon" href="..//resourse//logo//logo2.png" />

            <link rel="stylesheet" href="..//icofont.css" />

            <link rel="stylesheet" href="bootstrap.css" />


            <link rel="stylesheet" href="..//comman.css" />

            <link rel="stylesheet" href="adminPanel.css" />

            <link rel="stylesheet" href="jquery.imageResizer.css" type="text/css">

      </head>

      <body>

            <div class="container-fluid">
                  <div class="row">


                        <!-- side bar  -->
                        <div class="d-flex flex-column flex-shrink-0 p-0 p-lg-3  h-100  sidebar ">
                              <a class="d-flex align-items-center mb-3 mb-md-0 mt-3 link-dark text-decoration-none" target="_blank" href="index.php">
                                    <img src="..//resourse//logo//logo2.png" class="bi logoimg " width="40" height="40" />
                                    <span class="fs-4 text-light ms-1 fw-bold d-none d-lg-block">
                                          Orianteye Solutions
                                    </span>
                              </a>
                              <hr>
                              <ul class="nav nav-pills flex-column mb-auto sidemenu " id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <li>
                                          <a href="#" class="nav-link link-light active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="false">

                                                <i class="icofont-dashboard fs-4"></i><span class="fs-5"> Dashboard</span>
                                          </a>
                                    </li>
                                    <li class="position-relative">
                                          <a href="#" class="nav-link link-light position-relative" onclick="changeProject(1,0);" id="v-pills-Projects-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Projects" type="button" role="tab" aria-controls="v-pills-Projects" aria-selected="false">

                                                <i class="icofont-library fs-4"></i> <span class="fs-5"> Projects</span>
                                          </a>


                                    </li>
                                    <li>
                                          <a href="#" class="nav-link link-light " id="v-pills-Services-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Services" type="button" role="tab" aria-controls="v-pills-Services" aria-selected="false">

                                                <i class="icofont-page fs-4"></i><span class="fs-5"> Services</span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#" onclick="loademployee(0);" class="nav-link link-light " id="v-pills-Employee-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Employee" type="button" role="tab" aria-controls="v-pills-Employee" aria-selected="false">

                                                <i class="icofont-user-suited  fs-4"></i> <span class="fs-5"> Employee</span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#" onclick="loadusers(0);" class="nav-link link-light " id="v-pills-Users-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Users" type="button" role="tab" aria-controls="v-pills-Users" aria-selected="false">

                                                <i class="icofont-users fs-4"></i> <span class="fs-5"> Users</span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="#" class="nav-link link-light " id="v-pills-News-tab" data-bs-toggle="pill" data-bs-target="#v-pills-News" type="button" role="tab" aria-controls="v-pills-News" aria-selected="false">
                                                <i class="icofont-newspaper fs-4"></i> <span class="fs-5"> News</span>
                                          </a>
                                    </li>
                                    <li class=" position-relative">
                                          <a href="#" class="nav-link link-light" aria-current="page" id="v-pills-Issuse-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Issuse" type="button" role="tab" aria-controls="v-pills-Issuse" aria-selected="true">

                                                <i class="icofont-warning fs-4"></i> <span class="fs-5"> Issuse</span>

                                          </a>

                                    </li>
                                    <li class=" position-relative">
                                          <a href="#" class="nav-link link-light" aria-current="page" id="v-pills-Portfolio-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Portfolio" type="button" role="tab" aria-controls="v-pills-Portfolio" aria-selected="true">

                                                <i class="icofont-briefcase fs-4"></i> <span class="fs-5"> Portfolio</span>

                                          </a>

                                    </li>
                                    <li class=" position-relative">
                                          <a href="#" class="nav-link link-light" aria-current="page" id="v-pills-Other-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Other" type="button" role="tab" aria-controls="v-pills-Other" aria-selected="true">

                                                <i class="icofont-settings-alt fs-4"></i></i> <span class="fs-5"> Other</span>

                                          </a>

                                    </li>
                              </ul>
                              <hr>
                              <!-- Default dropup button -->
                              <nav class=" ">
                                    <div class="btn-group dropup navbar navbar-expand-lg pb-3 pb-lg-1">
                                          <button type="button" class="  dropdown-toggle accoubtn" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-user-alt-5 fs-4"></i> &nbsp; <span class="fs-5">Account</span>
                                          </button>
                                          <ul class="dropdown-menu">
                                                <!-- <li><a class="dropdown-item" href="#">Setting</a></li> -->
                                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                                <li><a class="dropdown-item" href="adminregistration.php">Register Employee</a></li>


                                                <li>
                                                      <hr>
                                                </li>

                                                <!-- <li ><a class="dropdown-item">Log Out</a></li> -->
                                                <?php
                                                if (isset($_SESSION["a"])) {
                                                ?>
                                                      <li><a class="dropdown-item" style="cursor: pointer;" onclick="adminlogout();">Log Out</a></li>
                                                <?php
                                                }
                                                ?>


                                          </ul>
                                    </div>

                              </nav>
                        </div>

                        <div class="col-12">


                              <div class="row tab-content aftersidebar" id="v-pills-tabContent">
                                    <!-- dashboard  -->
                                    <div class="tab-pane fade  col-12  show active " id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                                          <div class="row p-1">
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4 h-100">
                                                      <div class="row  p-1 h-100">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <div class="col-12 m-auto">
                                                                              <?php
                                                                              $tpro = Database::search("SELECT * FROM `orders`;");
                                                                              $nr = $tpro->num_rows;
                                                                              ?>
                                                                              <h3>Total Projects</h3>
                                                                              <h3><?php echo $nr; ?></h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4">
                                                      <div class="row  p-1">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <div class="col-12 m-auto">
                                                                              <?php
                                                                              $penP = Database::search("SELECT * FROM `orders` WHERE `status_sid` = 1 OR `status_sid` = 2;");
                                                                              $pnr = $penP->num_rows;

                                                                              ?>
                                                                              <h3>Pending Projects</h3>
                                                                              <h3><?php echo $pnr; ?></h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4">
                                                      <div class="row  p-1">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <?php
                                                                        $comP = Database::search("SELECT * FROM `orders` WHERE `status_sid` = 3;");
                                                                        $cnr = $comP->num_rows;

                                                                        ?>
                                                                        <div class="col-12 m-auto">
                                                                              <h3>Compleated Projects</h3>
                                                                              <h3><?php echo $cnr; ?></h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4">
                                                      <div class="row  p-1">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <div class="col-12 m-auto">
                                                                              <?php

                                                                              $today = date("Y-m-d");
                                                                              $thismonth = date("m");
                                                                              $thisyear = date("Y");
                                                                              $a = "0";
                                                                              $b = "0";
                                                                              $a1 = "0";
                                                                              $b1 = "0";
                                                                              $f = "0";

                                                                              $ir1 = Database::search("SELECT * FROM `orders`;");
                                                                              $in = $ir1->num_rows;

                                                                              for ($x = 0; $x < $in; $x++) {


                                                                                    $ir = $ir1->fetch_assoc();
                                                                                    if ($ir["status_sid"] == 3) {
                                                                                          $f = $f + $ir["price"];
                                                                                    }

                                                                                    $d = $ir["complete_date"];
                                                                                    $splitdate = explode(" ", $d);
                                                                                    $pdate = $splitdate[0];

                                                                                    if ($ir["status_sid"] == 1 || $ir["status_sid"] == 2) {
                                                                                          $a = $a + $ir["price"];
                                                                                    }
                                                                                    $splitmonth = explode("-", $pdate);
                                                                                    $pmonth = $splitmonth[1];
                                                                                    if ($pmonth == $thismonth && $splitmonth[0] == $thisyear && $ir["status_sid"] == 3) {
                                                                                          $b = $b + $ir["price"];
                                                                                    }
                                                                              }

                                                                              ?>
                                                                              <h3>Monthly Earnings</h3>
                                                                              <h3>Rs. <?php echo $b ?>.00</h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4">
                                                      <div class="row  p-1">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <div class="col-12 m-auto">
                                                                              <h3>Pending Earnings</h3>
                                                                              <h3>Rs. <?php echo $a ?>.00</h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4">
                                                      <div class="row  p-1">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <div class="col-12 m-auto">
                                                                              <h3>Total Earnings</h3>
                                                                              <h3>Rs.<?php echo $f ?>.00</h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4">
                                                      <div class="row  p-1">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <div class="col-12 m-auto">
                                                                              <?php
                                                                              $rcrs = Database::search("SELECT * FROM `user` WHERE `uid`!='0'");
                                                                              $nuc = $rcrs->num_rows;

                                                                              ?>
                                                                              <h3>Registered Client</h3>
                                                                              <h3><?php echo $nuc ?></h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4">
                                                      <div class="row  p-1">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <?php
                                                                        $rers = Database::search("SELECT * FROM `employee` WHERE `employe_type` IN(3,2,1);");
                                                                        $nue = $rers->num_rows;

                                                                        ?>
                                                                        <div class="col-12 m-auto">
                                                                              <h3>Registered Employees</h3>
                                                                              <h3><?php echo $nue ?></h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4">
                                                      <div class="row  p-1">
                                                            <div class="col-12  text-center  h-100 t1 rounded">
                                                                  <div class="row h-100 py-3">
                                                                        <div class="col-12 m-auto">
                                                                              <?php
                                                                              $pis = Database::search("SELECT * FROM `project_isuse`WHERE `issuse_status` = '1';
                                                                              ;");
                                                                              $pin = $pis->num_rows;

                                                                              ?>
                                                                              <h3>Client Issues</h3>
                                                                              <h3><?php echo $pin ?></h3>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                          </div>

                                    </div>
                                    <!-- projects  -->
                                    <div class="tab-pane fade  col-12" id="v-pills-Projects" role="tabpanel" aria-labelledby="v-pills-Projects-tab">
                                          <div class="row">
                                                <div class="col-12">
                                                      <div class="row gy-2 pt-2 pt-md-0">
                                                            <div class="col-12 col-md-6 p-md-3 d-grid">
                                                                  <button class="btn btn1 active_new" onclick="changeProject(1,0)" id="pp">Pending Projects</button>
                                                            </div>
                                                            <div class="col-12 col-md-6 p-md-3 d-grid">
                                                                  <button class="btn btn1" onclick="changeProject(2,0)" id="cp">Compleated Projects</button>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>

                                          <div class="row mt-3">
                                                <div class="col-12 col-lg-4">
                                                      <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">ID</span>
                                                            <input type="text" class="form-control" placeholder="Project Id" aria-label="Username" aria-describedby="basic-addon1" id="id_s" onkeyup="projectSearch(0)">
                                                      </div>

                                                </div>
                                                <div class="col-12 col-lg-4">
                                                      <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon2">USER</span>
                                                            <input type="text" class="form-control" placeholder="User Email" aria-label="Username" aria-describedby="basic-addon2" id="user_s" onkeyup="projectSearch(0)">
                                                      </div>

                                                </div>
                                                <div class="col-12 col-lg-4">
                                                      <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">Category</span>
                                                            <select class="form-select" placeholder="Category" aria-label="Username" aria-describedby="basic-addon3" id="cat_s" onchange="projectSearch(0)">
                                                                  <option value="0">Select Category</option>
                                                                  <?php

                                                                  $catrs = Database::search("SELECT * FROM `service` ;");
                                                                  for ($x = 0; $x < $catrs->num_rows; $x++) {
                                                                        $catd = $catrs->fetch_assoc();
                                                                  ?>
                                                                        <option value="<?php echo $catd["ser_id"] ?>"><?php echo $catd["ser_name"] ?></option>
                                                                  <?php
                                                                  }

                                                                  ?>

                                                            </select>
                                                      </div>
                                                </div>
                                          </div>


                                          <div class="row  p-0 p-md-3  pt-md-0 p-xxl-5 pb-xxl-3 pt-xxl-0">
                                                <div class="col-12 col-md-12 textalin tblboxpro mt-3 pb-2   scroll1" onmouseover="doo(1);" style="min-height: 575px;" id="tabloader">

                                                      <!-- pendi ngcompletepro.php -->
                                                </div>
                                          </div>

                                          <div class="row">
                                                <div class="col-12 text-center">
                                                      <button class="btn bdbtn px-4" onclick="projectModal2();">Add Projects</button>
                                                </div>
                                          </div>
                                          <!--model for adding project -->

                                          <div class="modal fade" id="projectModa2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog modal-lg modal-fullscreen-sm-down">
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                                  <h5 class="modal-title" id="staticBackdropLabel">Add Project</h5>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeAddUpModelPro();"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                  <div class="col-12  m-auto px-3">
                                                                        <div class="row">

                                                                              <div class="col-12 col-md-6">
                                                                                    <div class="row px-2">

                                                                                          <label for="fn" class="form-label mb-0">User Email</label>
                                                                                          <input type="email" class="form-control my-0 " id="ue" placeholder="User Email" onclick="addpclear()">
                                                                                          <span class="text-danger text-start error_css" id="ue_er"></span>
                                                                                    </div>

                                                                              </div>
                                                                              <div class="col-12 col-md-6">
                                                                                    <div class="row px-2">

                                                                                          <label for="ln" class="form-label mb-0">Service</label>
                                                                                          <select type="text" class="form-select my-0" id="s" onclick="addpclear()">
                                                                                                <option value="0">Select Service</option>
                                                                                                <?php
                                                                                                $serrs = Database::search("SELECT * FROM `service` ;");
                                                                                                for ($x = 0; $x < $serrs->num_rows; $x++) {
                                                                                                      $serd = $serrs->fetch_assoc();
                                                                                                ?>
                                                                                                      <option value="<?php echo $serd["ser_id"] ?>"><?php echo $serd["ser_name"] ?></option>
                                                                                                <?php
                                                                                                }


                                                                                                ?>

                                                                                          </select>
                                                                                          <span class="text-danger text-start error_css" id="s_er"></span>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-12 col-md-6">
                                                                                    <div class="row px-2">


                                                                                          <label for="e" class="form-label mb-0">Plan type</label>
                                                                                          <select type="text" class="form-select my-0" id="pt" onclick="addpclear()">
                                                                                                <option value="0">Select Plan</option>
                                                                                                <?php
                                                                                                $planrs = Database::search("SELECT * FROM `plan_type` ;");
                                                                                                for ($x = 0; $x < $planrs->num_rows; $x++) {
                                                                                                      $pland = $planrs->fetch_assoc();
                                                                                                ?>
                                                                                                      <option value="<?php echo $pland["pid"] ?>"><?php echo $pland["ptype"] ?></option>
                                                                                                <?php
                                                                                                }


                                                                                                ?>
                                                                                          </select>
                                                                                          <span class="text-danger text-start error_css" id="pt_er"></span>
                                                                                    </div>
                                                                              </div>

                                                                              <div class="col-12 col-md-6">
                                                                                    <div class="row px-2">

                                                                                          <label for="p" class="form-label mb-0">Price</label>
                                                                                          <input type="number" class="form-control my-0" id="price" placeholder="Price" onclick="addpclear()">
                                                                                          <span class="text-danger text-start error_css" id="price_er"></span>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-12 col-md-6">
                                                                                    <div class="row px-2">

                                                                                          <label for="cp" class="form-label mb-0">Est Date</label>
                                                                                          <input type="date" class="form-control my-0" placeholder="Select Date" id="cd" onclick="addpclear()">
                                                                                          <span class="text-danger text-start error_css" id="cd_er"></span>
                                                                                    </div>
                                                                              </div>

                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="modal-footer">

                                                                  <button type="submit" class="btn bdbtn py-2 px-4 fs-6" id="projectaddupbtn" onclick="addproject();">Add</button>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>

                                          <!-- Modal -->
                                          <div class="modal fade" id="projectModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog modal-lg modal-fullscreen-md-down">
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                                  <h5 class="modal-title" id="staticBackdropLabel">Project Details</h5>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                  <div class="row gy-1">
                                                                        <div class="col-12 col-md-6 col-lg-4">
                                                                              <span class="fw-bold">Category : </span>
                                                                              <span id="m_cat"></span>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-lg-4">
                                                                              <span class="fw-bold">Price Plan : </span>
                                                                              <span id="m_pplan"></span>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-lg-4">
                                                                              <span class="fw-bold">Price : </span>
                                                                              <span id="m_price"></span>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-lg-4">
                                                                              <span class="fw-bold">Given Date : </span>
                                                                              <span id="m_gdate"></span>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-lg-4">
                                                                              <span class="fw-bold">Est Date : </span>
                                                                              <span id="m_estdate"></span>
                                                                        </div>

                                                                        <div class="colp-12 ">
                                                                              <hr class="mb-2" />
                                                                              <h5>Client Details</h5>
                                                                              <hr class="mt-1" />
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-lg-4">
                                                                              <span class="fw-bold">Name : </span>
                                                                              <span id="m_name"></span>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-lg-4">
                                                                              <span class="fw-bold">Contact : </span>
                                                                              <span id="m_contact"></span>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-lg-4">
                                                                              <span class="fw-bold">Email : </span>
                                                                              <span id="m_email"></span>
                                                                        </div>
                                                                        <div class="colp-12 ">
                                                                              <hr class="mb-2" />
                                                                              <h5>Issuse</h5>
                                                                              <hr class="mt-1" />
                                                                        </div>
                                                                        <div class="col-12">
                                                                              <span id="m_issue"> </span>

                                                                        </div>
                                                                  </div>

                                                            </div>
                                                            <div class="modal-footer">

                                                                  <button type="button" class="btn dsilverbtn text-white" data-bs-dismiss="modal" id="pDModclose">Close</button>
                                                                  <button type="button" class="btn bdbtn px-4" id="proeditbtn" onclick="openeditModal();">Edit</button>

                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <!-- service  -->
                                    <div class="tab-pane fade  col-12 " id="v-pills-Services" role="tabpanel" aria-labelledby="v-pills-Services-tab">

                                          <div class="row p-3">
                                                <div class="col-12 col-md-6">

                                                      <div class="row px-1 px-lg-2 px-xl-3">
                                                            <div class="col-12">
                                                                  <h3>Add Service</h3>
                                                                  <hr />
                                                            </div>
                                                            <div class="col-12 tablebox my-3 mb-4 px-0 ">

                                                                  <table class="servicetble  w-100" id="servicetable">
                                                                        <tr>
                                                                              <th>Service</th>
                                                                        </tr>
                                                                        <?php
                                                                        $service = Database::search("SELECT * FROM `service`");
                                                                        $srow = $service->num_rows;
                                                                        for ($i = 0; $i < $srow; $i++) {
                                                                              $drow = $service->fetch_assoc();
                                                                        ?>
                                                                              <tr>
                                                                                    <td class="<?php if ($drow["ad_status"] == "2") {
                                                                                                      echo "text-danger";
                                                                                                }  ?>" onclick="fillServiceForUpdate(<?php echo $drow['ser_id'] ?>,'<?php echo $drow['simg'] ?>','<?php echo $drow['ser_name'] ?>',<?php echo $drow['ad_status'] ?>);erroclearservice1();errorclearimgService();"><?php echo $drow["ser_name"] ?></td>

                                                                              </tr>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                  </table>
                                                            </div>
                                                            <div class="col-12 text-center text-md-start px-1">
                                                                  <label for="selectImage1" onclick="setImage(1);errorclearimgService();">
                                                                        <div class="serviceImageBox" id="viewImage1" style="background-image: url('..//resourse//appimg//default2.jpg');">
                                                                              <input type="file" class="d-none" accept="image/*" id="selectImage1">
                                                                        </div>
                                                                  </label>
                                                                  <!-- <spann class="d-block text-danger" style="font-size: 16px;">*We recommend 1:1 Image </span> -->
                                                            </div>

                                                            <div class="col-12 pt-2">
                                                                  <span>Service Name</span>
                                                            </div>
                                                            <div class="col-12 col-lg-9 px-1">

                                                                  <input type="text" class="form-control" onchange="erroclearservice1();" id="sname" placeholder="Enter Service Name" />
                                                            </div>
                                                            <div class="col-12 col-lg-3 pt-2 pt-lg-0 px-1">
                                                                  <button class="btn bdbtn  w-100 h-100" onclick="saveService();" id="servicebtn">Add</button>
                                                            </div>
                                                            <div class="col-12 col-lg-6 pt-2  px-1">
                                                                  <button class="btn orangedbtn  w-100 h-100  d-none" onclick="clearService();" id="clearServicebtn">Clear</button>
                                                            </div>
                                                            <div class="col-12 col-lg-6 pt-2  px-1 ">
                                                                  <button class="btn   w-100 h-100  d-none" id="actDactID">Deactivate</button>
                                                            </div>
                                                            <!-- <div class="col-12 col-lg-6 pt-2  px-1 d-none" id="actDactID">
                                                            <button class="btn bdbtngreen  w-100 h-100" onclick="">Activate</button>

                                                      </div> -->
                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6">

                                                      <div class="row px-1  px-lg-2 px-xl-3 gy-2 pt-3 pt-md-0" id="plandetailboxID">
                                                            <div class="col-12 ">
                                                                  <h3>Plan Details</h3>
                                                                  <hr />

                                                            </div>
                                                            <div class="col-12">
                                                                  <label>Select Service</label>
                                                                  <select class="form-select" id="sSelector" onchange="getPlanDetails();">
                                                                        <option value="0">Select Service</option>

                                                                        <?php
                                                                        $rs = Database::search("SELECT * FROM `service`");
                                                                        $srow = $rs->num_rows;
                                                                        for ($i = 0; $i < $srow; $i++) {
                                                                              $drow = $rs->fetch_assoc();
                                                                        ?>
                                                                              <option value="<?php echo $drow["ser_id"] ?>"><?php echo $drow["ser_name"] ?></option>

                                                                        <?php
                                                                        }
                                                                        ?>
                                                                  </select>
                                                            </div>
                                                            <div class="col-12">
                                                                  <label>Select Plan</label>
                                                                  <select class="form-select" id="planSelector" onchange="getPlanDetails();">
                                                                        <option value="0">Select Plan</option>
                                                                        <?php
                                                                        $rs = Database::search("SELECT * FROM `plan_type`");
                                                                        $srow = $rs->num_rows;
                                                                        for ($i = 0; $i < $srow; $i++) {
                                                                              $drow = $rs->fetch_assoc();
                                                                        ?>
                                                                              <option value="<?php echo $drow["pid"] ?>"><?php echo $drow["ptype"] ?></option>

                                                                        <?php
                                                                        }
                                                                        ?>
                                                                  </select>
                                                            </div>
                                                            <div class="col-12">
                                                                  <label>Plan Price</label>
                                                                  <input type="number" min="0" class="form-control" onchange="clearerroserviPrice();" placeholder="Enter Price For Plan" />
                                                            </div>
                                                            <div class="col-12">
                                                                  <label>Plan Description</label>
                                                                  <textarea class="form-control" placeholder="Type Here Plan Description. Use Semicolon ( ; ) to sparate sentence" onchange="clearerroserviDescrip();" style="height: 281px;"></textarea>
                                                            </div>
                                                            <!-- <div class="col-12 pt-2 pt-lg-3  text-end">
                                                            <button class="btn bdbtn h-100 w-100 px-5">Add</button>
                                                      </div> -->
                                                      </div>
                                                </div>
                                          </div>


                                    </div>
                                    <!-- Employee  -->
                                    <div class="tab-pane fade  col-12" id="v-pills-Employee" role="tabpanel" aria-labelledby="v-pills-Employee-tab">
                                          <div class="row mt-3">

                                                <div class="col-12 offset-lg-4 col-lg-4">
                                                      <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon2">Employee</span>
                                                            <input type="text" class="form-control" placeholder="Employee Name, Email & Mobile" id="emps" onkeyup="loademployee(0)">
                                                      </div>

                                                </div>

                                          </div>


                                          <div class="row p-0 p-md-3 pt-md-0 p-xxl-5 pt-xxl-0">
                                                <div class="col-12 col-md-12 textalin tblboxpro mt-3 pb-2  scroll2" onmouseover="doo(2);" style="min-height: 550px;" id="emptable">


                                                      <!-- loademployee.php -->




                                                </div>
                                          </div>
                                    </div>
                                    <!-- users  -->
                                    <div class="tab-pane fade  col-12" id="v-pills-Users" role="tabpanel" aria-labelledby="v-pills-Users-tab">
                                          <div class="row mt-3">

                                                <div class="col-12 offset-lg-4 col-lg-4">
                                                      <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon2">USER</span>
                                                            <input type="text" class="form-control" placeholder="User Name, Email & Mobile" id="user_search" onkeyup="loadusers(0);">
                                                      </div>

                                                </div>

                                          </div>


                                          <div class="row p-0 p-md-3 pt-md-0 p-xxl-5 pt-xxl-0">
                                                <div class="col-12 col-md-12 textalin tblboxpro mt-3 pb-2 scroll3" onmouseover="doo(3);" style="min-height: 550px;" id="userstab">
                                                      <!-- loadusers.php  -->

                                                </div>
                                          </div>
                                    </div>
                                    <!-- Modal -->

                                    <div class="modal fade " id="msgmodal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                                          <div class="modal-dialog modal-lg modal-fullscreen-lg-down ">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Messages</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="stoprefrsh();" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body pb-0" style="height:400px;overflow-y: scroll;" id="chatboxuser">
                                                            <div class="col-12">

                                                                  <div class="row message-box bg-light rounded" id="chatrow">
                                                                        <div class="col-12">
                                                                              <div class="row">
                                                                                    <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5 col-8 offset-4 text-end">
                                                                                          <span class="fs-5 py-1 ps-4 pe-3 text-white" style="border-radius: 20px 2px 20px 20px;background-color: #2C3E50 ;">Hello</span><br>
                                                                                          <span class="pe-2" style="font-size: 14px;">18:20</span>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="row">
                                                                                    <div class="col-8 col-md-7 col-lg-6">
                                                                                          <span class="fs-5 py-1 pe-4 ps-3 text-white" style="border-radius:2px 20px 20px 20px;background-color: #2C3E50;">Hi</span><br>
                                                                                          <span class="ps-2" style="font-size: 14px;">10:20</span>
                                                                                    </div>
                                                                              </div>


                                                                        </div>
                                                                  </div>



                                                            </div>
                                                      </div>
                                                      <div class="modal-footer pt-1 pb-1">
                                                            <!-- text -->
                                                            <div class="col-12">
                                                                  <div class="row">
                                                                        <div class="input-group">
                                                                              <input type="text" id="msgtxt" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded border-1 bg-white">
                                                                              <div class="input-group-append">
                                                                                    <button id="sendmsgbtn" class="btn bdbtn px-4 h-100" onclick="sendMsg(<?php echo $uid ?>);"><i class="icofont-location-arrow"></i></button>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <!-- text -->
                                                      </div>
                                                </div>
                                          </div>
                                    </div>


                                    <!-- news  -->
                                    <div class="tab-pane fade  col-12 " id="v-pills-News" role="tabpanel" aria-labelledby="v-pills-News-tab">
                                          <div class="row p-3 pb-5">
                                                <div class="col-12 col-md-6">
                                                      <div class="row px-md-2 gy-2 pe-xl-3">
                                                            <div class="col-12 px-0">
                                                                  <h2>Add News</h2>
                                                                  <hr />
                                                            </div>
                                                            <div class="col-12 pt-2">
                                                                  <label for="selectImage2" onclick="setImage(2);clearerroNewsimg();">
                                                                        <div class="serviceImageBox" id="viewImage2" style="background-image: url('..//resourse//appimg//default2.jpg');">
                                                                              <input type="file" class="d-none" accept="image/*" id="selectImage2" />

                                                                        </div>
                                                                  </label>

                                                            </div>
                                                            <div class="col-12 ">
                                                                  <label>News Title</label>

                                                                  <input type="text" class="form-control" id="newstitle" onchange="clearerroNewstitle();" placeholder="Enter the News Title" />
                                                            </div>
                                                            <div class="col-12">
                                                                  <label>News Details</label>
                                                                  <textarea class="form-control" id="newscon" onchange="clearerroNewsDes();" placeholder="Type Here About News" style="height: 281px;"></textarea>
                                                            </div>
                                                            <div class="col-12 col-xl-6 pt-2 pt-lg-3  text-end">
                                                                  <?php

                                                                  $newscount = Database::search("SELECT COUNT(`nid`) AS `count` FROM `news`");
                                                                  $nd = $newscount->fetch_assoc();


                                                                  ?>
                                                                  <button class="btn orangedbtn h-100 w-100 px-5" onclick="clearNews(<?php echo $nd['count'] ?>);" id="newsclearbtn">Clear</button>
                                                            </div>
                                                            <div class="col-12 col-xl-6 pt-2 pt-lg-3  text-end">
                                                                  <button class="btn bdbtn h-100 w-100 px-5 <?php
                                                                                                            $newscount = Database::search("SELECT COUNT(`nid`) AS `count` FROM `news`");
                                                                                                            $nd = $newscount->fetch_assoc();
                                                                                                            if (!$nd["count"] < 3) {
                                                                                                                  echo "disabled";
                                                                                                            }
                                                                                                            ?>" id="adupnewsBtn" <?php
                                                                                                                                    $newscount = Database::search("SELECT COUNT(`nid`) AS `count` FROM `news`");
                                                                                                                                    $nd = $newscount->fetch_assoc();
                                                                                                                                    if ($nd["count"] < 3) {
                                                                                                                                          echo " onclick='addNews();'";
                                                                                                                                    }
                                                                                                                                    ?>>Add</button>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                      <div id="newscontentBox" class="row gy-3 px-md-2 ps-xl-3 pt-4 pt-md-0 ">
                                                            <div class="col-12 px-0">
                                                                  <h2>Veiw News</h2>
                                                                  <hr />

                                                            </div>

                                                            <?php
                                                            $news = Database::search("SELECT * FROM `news`");
                                                            if ($news->num_rows == 0) {
                                                            ?>
                                                                  <div class="col-12 text-center d-flex justify-content-center" style="min-height: 400px;">
                                                                        <p class="m-auto">News Not Availeble</p>
                                                                  </div>
                                                            <?php
                                                            }
                                                            for ($i = 0; $i < $news->num_rows; $i++) {
                                                                  $d = $news->fetch_assoc();

                                                            ?>
                                                                  <div class="col-12  newsbox d-flex justify-content-center bacimgnews position-relative" style="background-image: url('..//resourse//news//<?php echo $d["img_path"] ?>');" onclick="getNews(<?php echo  $d['nid'] ?>);clearerroNewsimg();clearerroNewstitle();clearerroNewsDes();">
                                                                        <div class="darkbox position-absolute"></div>
                                                                        <h2 class="m-auto text-light fw-bold" style="z-index: 2;"><?php echo $d["topic"] ?></h2>
                                                                  </div>

                                                            <?php
                                                            }
                                                            ?>


                                                      </div>
                                                </div>
                                          </div>

                                    </div>
                                    <!-- issuse  -->
                                    <div class="tab-pane fade  col-12 " id="v-pills-Issuse" role="tabpanel" aria-labelledby="v-pills-Issuse-tab">
                                          <div class="row p-2 p-md-3">
                                                <div class="col-12">
                                                      <div class="row">
                                                            <div class="col-12">
                                                                  <div class="row">
                                                                        <!-- <div class="col-8 col-md-6 col-xl-4 offset-md-2 offset-xl-3 mt-3">
                                                                        <input type="text" class="form-control" placeholder="Project Id">
                                                                  </div>
                                                                  <div class="col-4 col-md-2 mt-3">
                                                                        <span class="btn btn-primary d-grid">Search</span>
                                                                  </div> -->
                                                                        <div class="col-12 col-md-8 col-xl-5 col-xxl-4 mx-auto">
                                                                              <div class="input-group mb-3">
                                                                                    <span class="input-group-text" id="basic-addon1">Project Id</span>
                                                                                    <input type="text" class="form-control" id="projectid" onclick="removeissuseborder();" placeholder="Project Id">
                                                                                    <button class="btn bdbtn px-4" type="button" onclick="issuse();">Search</button>
                                                                              </div>
                                                                        </div>

                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="row ">
                                                      <div class="col-12">
                                                            <div class="row">
                                                                  <div class="col-12">
                                                                        <h2>Project Info</h2>
                                                                        <hr />
                                                                  </div>
                                                                  <div class="col-12 col-md-6 col-xxl-3 text-xl-center">
                                                                        <div class="input-group mb-3">
                                                                              <span class="input-group-text">Client</span>
                                                                              <input type="text" class="form-control readonlycss" id="name" placeholder="Name" readonly>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-12 col-md-6 col-xxl-3 text-xl-center">
                                                                        <div class="input-group mb-3">
                                                                              <span class="input-group-text">Contact No</span>
                                                                              <input type="text" class="form-control readonlycss" id="mobile" placeholder="Mobile No" readonly>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-12 col-md-6 col-xxl-3 text-xl-center">
                                                                        <div class="input-group mb-3">
                                                                              <span class="input-group-text">Category</span>
                                                                              <input type="text" class="form-control readonlycss" id="category" placeholder="Service Name" readonly>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-12 col-md-6 col-xxl-3 text-xl-center">
                                                                        <div class="input-group mb-3">
                                                                              <span class="input-group-text">Project Plan</span>
                                                                              <input type="text" class="form-control readonlycss" id="projectplan" placeholder="Pricing Plan" readonly>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-12">
                                                      <h2>Issues Info</h2>
                                                      <hr />
                                                </div>
                                                <div class="col-12 col-md-6">
                                                      <div class="row pe-xl-3">
                                                            <div class="col-12">
                                                                  <div class="row">
                                                                        <div class="col-12">
                                                                              <span class="fs-6">Issues Details</span>
                                                                        </div>
                                                                        <div class="col-12 ">
                                                                              <textarea name="" class="form-control" id="" placeholder="Type Here About Issues Of Project" cols="30" rows="15"></textarea>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                      <div class="row gy-3 ps-xl-3 py-3 pt-md-0 text-center " style="min-height: 400px;">

                                                            <p class="my-auto">Project Not Selected </p>

                                                            <!-- <div class="col-12 newsbox d-flex position-relative justify-content-center">
                                                            <div class="offset-9 col-3 bg-success text-center position-absolute d-none" style="right: 0; top:0;">
                                                                  <span class="fs-6 text-white">Solved</span>
                                                            </div>
                                                            <h2 class="m-auto">Isuse</h2>
                                                      </div> -->







                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <!-- Portfolio -->
                                    <div class="tab-pane fade  col-12 " id="v-pills-Portfolio" role="tabpanel" aria-labelledby="v-pills-Portfolio-tab">
                                          <div class="row">
                                                <div class="col-12">
                                                      <div class="row mt-3">
                                                            <div class="col-12 col-lg-6 col-xl-4 offset-xl-2">
                                                                  <div class="input-group mb-3">
                                                                        <span class="input-group-text">Project Name</span>
                                                                        <input type="text" class="form-control" placeholder="Project Name" id="pronameserch" onkeyup="portfolisearch(0)">
                                                                  </div>

                                                            </div>

                                                            <div class="col-12 col-lg-6 col-xl-4 ">
                                                                  <div class="input-group mb-3">
                                                                        <span class="input-group-text">Category</span>
                                                                        <select class="form-select" placeholder="Category" id="caterport" onchange="portfolisearch(0)">
                                                                              <option value="0">Select Category</option>
                                                                              <?php

                                                                              $catrs = Database::search("SELECT * FROM `service` ;");
                                                                              for ($x = 0; $x < $catrs->num_rows; $x++) {
                                                                                    $catd = $catrs->fetch_assoc();
                                                                              ?>
                                                                                    <option value="<?php echo $catd["ser_id"] ?>"><?php echo $catd["ser_name"] ?></option>
                                                                              <?php
                                                                              }

                                                                              ?>

                                                                        </select>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="row  p-0 p-md-3  pt-md-0 p-xxl-5 pb-xxl-3 pt-xxl-0">
                                                            <div class="col-12 col-md-12 textalin tblboxpro mt-3 pb-2   scroll5" onmouseover="doo(5);" style="min-height: 575px;" id="portfoliotab">

                                                                  <div class="row" style="height: 575px;">
                                                                        <table class="w-100 tablpro text-light text-center" id="veiwtableport" style="min-width: 660px;">

                                                                              <tr>
                                                                                    <th class="th1">#</th>
                                                                                    <th class="th3">Project Name</th>
                                                                                    <th class="th4">Category</th>
                                                                                    <th class="th5">Project Type</th>
                                                                                    <th class="th6">Link</th>
                                                                                    <!-- <th class="th6">Status</th> -->


                                                                              </tr>
                                                                              <?php
                                                                              $pending = Database::search("SELECT * FROM `project`");

                                                                              $d = $pending->num_rows;

                                                                              $results_per_page = 10;

                                                                              $number_of_pages = ceil($d / $results_per_page);

                                                                              if (!isset($_POST["page"])) {
                                                                                    $pageno = 0;
                                                                              } else {
                                                                                    $pageno = $_POST["page"];
                                                                              }

                                                                              $page_first_result = $pageno * $results_per_page;

                                                                              $selectedrs =  Database::search("SELECT * FROM `project`   LIMIT " . $results_per_page . " OFFSET " . $page_first_result . ";");
                                                                              $srn = $selectedrs->num_rows;

                                                                              for ($i = 0; $i < $srn; $i++) {
                                                                                    $srow = $selectedrs->fetch_assoc();
                                                                              ?>
                                                                                    <tr>
                                                                                          <td class="td" onclick="loadPortfoliomodela(<?php echo $srow['pro_id'] ?>,<?php echo $pageno ?>);"><?php echo $i + 1 + $page_first_result ?></td>
                                                                                          <td class="td" onclick="loadPortfoliomodela(<?php echo $srow['pro_id'] ?>,<?php echo $pageno ?>);"><?php echo $srow["project_name"] ?></td>
                                                                                          <?php
                                                                                          $sde = Database::search("SELECT * FROM `service` WHERE `ser_id` = '" . $srow["service_id"] . "'; ");
                                                                                          $sdetails = $sde->fetch_assoc();
                                                                                          ?>
                                                                                          <td class="td" onclick="loadPortfoliomodela(<?php echo $srow['pro_id'] ?>,<?php echo $pageno ?>);"><?php echo $sdetails["ser_name"] ?></td>
                                                                                          <?php
                                                                                          $sde = Database::search("SELECT * FROM `project_type` WHERE `pt_id` = '" . $srow["project_type"] . "'; ");
                                                                                          $protyped = $sde->fetch_assoc();
                                                                                          ?>
                                                                                          <td class="td" onclick="loadPortfoliomodela(<?php echo $srow['pro_id'] ?>,<?php echo $pageno ?>);"><?php echo $protyped["pt_name"]  ?></td>

                                                                                          <td class="td" onclick="">
                                                                                                <a class="btn bdbtn py-0" href="#"><i class="icofont-link"></i></a>
                                                                                          </td>


                                                                                    </tr>
                                                                              <?php
                                                                              }
                                                                              ?>
                                                                        </table>
                                                                  </div>


                                                                  <div class="text-center">
                                                                        <div class="pagination">
                                                                              <a href="#" onclick="portfolisearch(<?php
                                                                                                                  if ($pageno <= 0) {
                                                                                                                        echo '0';
                                                                                                                  } else {
                                                                                                                        echo ($pageno - 1);
                                                                                                                  }

                                                                                                                  ?>)">&laquo;</a>

                                                                              <?php

                                                                              for ($page = 1; $page <= $number_of_pages; $page++) {

                                                                                    if ($pageno == $page - 1) {
                                                                              ?>

                                                                                          <a href="#" onclick="portfolisearch(<?php echo $page - 1 ?>)" class="active"><?php echo $page ?></a>

                                                                                    <?php
                                                                                    } else {
                                                                                    ?>

                                                                                          <a href="#" onclick="portfolisearch(<?php echo $page - 1 ?>)" class=""><?php echo $page ?></a>

                                                                              <?php
                                                                                    }
                                                                              }

                                                                              ?>


                                                                              <a href="#" onclick="portfolisearch(<?php

                                                                                                                  if ($pageno >= $number_of_pages - 1) {
                                                                                                                        echo $pageno;
                                                                                                                  } else {
                                                                                                                        echo ($pageno + 1);
                                                                                                                  }

                                                                                                                  ?>)">&raquo;</a>
                                                                        </div>
                                                                  </div>

                                                            </div>
                                                      </div>

                                                      <div class="row">
                                                            <div class="col-12 text-center">
                                                                  <button class="btn bdbtn px-4" onclick="portfolioModal1();">Add Portfolio</button>
                                                            </div>
                                                      </div>
                                                      <!--model for adding portfolio -->

                                                      <div class="modal fade" id="portfoliomod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog modal-lg modal-fullscreen-sm-down">
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <h5 class="modal-title" id="addportfolioh4">Add Portfolio</h5>
                                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeAddUpModelportfolio();"></button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                              <div class="col-12  m-auto px-3">
                                                                                    <div class="row">
                                                                                          <!-- <div class="col-12 text-center pb-3"> -->
                                                                                          <div class="col-12 text-center " id="imageviewbox">
                                                                                                <label for="selectImage3" onclick="done();">
                                                                                                      <div class="serviceImageBox mb-2" id="viewImage3" style="background-image: url('..//resourse//appimg//default2.jpg');">
                                                                                                            <input type="file" class="d-none" accept="image/*" id="selectImage3" />

                                                                                                      </div>
                                                                                                </label>


                                                                                          </div>
                                                                                          <div class="col-12  d-none mb-2" id="cropbox">
                                                                                                <div class="position-relative mx-auto mb-2" id="fullimagebox" style="height: 330px; width: 415px;">
                                                                                                      <div id="contain" style="position:absolute; width:100%;height:100%;">

                                                                                                      </div>

                                                                                                </div>
                                                                                                <div class="w-100 text-center">

                                                                                                      <button class="resize-done btn bdbtn py-2 px-4 fs-6">Done</button>

                                                                                                </div>
                                                                                          </div>

                                                                                          <div class="col-12 col-md-6">
                                                                                                <div class="row px-2">

                                                                                                      <label for="pronameid" class="form-label mb-0">Project Name</label>
                                                                                                      <input type="text" class="form-control my-0 " id="pronameid" placeholder="Project Name" onclick="">
                                                                                                      <span class="text-danger text-start error_css" id=""></span>
                                                                                                </div>

                                                                                          </div>
                                                                                          <div class="col-12 col-md-6">
                                                                                                <div class="row px-2">

                                                                                                      <label for="seviceid" class="form-label mb-0">Project Service</label>
                                                                                                      <select type="text" class="form-select my-0" id="seviceid" onclick="">
                                                                                                            <option value="0">Select Service</option>
                                                                                                            <?php
                                                                                                            $serrs = Database::search("SELECT * FROM `service` ;");
                                                                                                            for ($x = 0; $x < $serrs->num_rows; $x++) {
                                                                                                                  $serd = $serrs->fetch_assoc();
                                                                                                            ?>
                                                                                                                  <option value="<?php echo $serd["ser_id"] ?>"><?php echo $serd["ser_name"] ?></option>
                                                                                                            <?php
                                                                                                            }


                                                                                                            ?>

                                                                                                      </select>
                                                                                                      <span class="text-danger text-start error_css" id=""></span>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="col-12 col-md-6">
                                                                                                <div class="row px-2">


                                                                                                      <label for="protypeid" class="form-label mb-0">Project Type</label>
                                                                                                      <select type="text" class="form-select my-0" id="protypeid" onclick="">
                                                                                                            <option value="0">Select Type</option>
                                                                                                            <?php
                                                                                                            $planrs = Database::search("SELECT * FROM `project_type` ;");
                                                                                                            for ($x = 0; $x < $planrs->num_rows; $x++) {
                                                                                                                  $pland = $planrs->fetch_assoc();
                                                                                                            ?>
                                                                                                                  <option value="<?php echo $pland["pt_id"] ?>"><?php echo $pland["pt_name"] ?></option>
                                                                                                            <?php
                                                                                                            }


                                                                                                            ?>
                                                                                                      </select>
                                                                                                      <span class="text-danger text-start error_css" id=""></span>
                                                                                                </div>
                                                                                          </div>

                                                                                          <div class="col-12 col-md-6">
                                                                                                <div class="row px-2">

                                                                                                      <label for="linkid" class="form-label mb-0">Link (URL)</label>
                                                                                                      <input type="text" class="form-control my-0" id="linkid" placeholder="Web site url" onclick="">
                                                                                                      <span class="text-danger text-start error_css" id=""></span>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="col-12">
                                                                                                <div class="row px-2">

                                                                                                      <label for="pronameid" class="form-label mb-0">Theme Color</label>
                                                                                                      <div class="col-4">
                                                                                                            <input type="color" class="form-control my-0 " id="them1">

                                                                                                      </div>
                                                                                                      <div class="col-4">
                                                                                                            <input type="color" class="form-control my-0 " id="them2">

                                                                                                      </div>
                                                                                                      <div class="col-4">
                                                                                                            <input type="color" class="form-control my-0 " id="them3">

                                                                                                      </div>

                                                                                                </div>

                                                                                          </div>


                                                                                          <!-- </div> -->
                                                                                    </div>
                                                                              </div>
                                                                              <div class="modal-footer">

                                                                                    <button type="submit" class="btn bdbtn py-2 px-4 fs-6" id="portfolioaddBtn" onclick="addportfolio();">Add</button>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>

                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <!-- other  -->
                                    <div class="tab-pane fade  col-12 " id="v-pills-Other" role="tabpanel" aria-labelledby="v-pills-Other-tab">
                                          <div class="row">
                                                <!-- feedback  -->
                                                <div class="col-12" id="row1">
                                                      <div class="row mt-3 px-2 px-md-5 px-lg-2 px-xl-5 py-2">
                                                            <div class="col-12">
                                                                  <h3>Feed Back</h3>
                                                                  <hr />

                                                            </div>

                                                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3">
                                                                  <div class="row ">
                                                                        <!-- <div class="col-12 text-center " id="imageviewbox">
                                                                              <label for="selectImage3" onclick="done();">
                                                                                    <div class="serviceImageBox mb-2" id="viewImage3" style="background-image: url('..//resourse//appimg//default2.jpg');">
                                                                                          <input type="file" class="d-none" accept="image/*" id="selectImage3" />

                                                                                    </div>
                                                                              </label>


                                                                        </div> -->

                                                                        <div class="col-12 col-md-6 col-lg-12 mx-auto text-center" id="imageviewbox2">
                                                                              <input type="file" accept="img/*" id="imguploader" multiple class="d-none" />
                                                                              <label for="imguploader" onclick="changeImg();done2();"><img class="img-fluid mt-3" src="..//resourse/appimg/default2.jpg" alt="" id="img1" /></label>
                                                                        </div>


                                                                  </div>
                                                            </div>
                                                            <div class="col-12 col-lg-8 col-xxl-9 mt-3 mt-xl-0">
                                                                  <div class="row">
                                                                        <div class="col-12 col-xxl-6">
                                                                              <div class="row ">
                                                                                    <div class="col-12 ">
                                                                                          <span class="fs-5">Client Email</span>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="row">
                                                                                    <div class="col-12 ">
                                                                                          <input type="text" class="form-control" id="email" onchange="getinfor();" />
                                                                                    </div>
                                                                              </div>
                                                                        </div>

                                                                        <div class="col-12 col-xxl-6">

                                                                              <div class="row">
                                                                                    <div class="col-12">
                                                                                          <span class="fs-5">Client name</span>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="row">
                                                                                    <div class="col-12 ">
                                                                                          <input type="text" class="form-control" id="fn" />
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="row mt-3">
                                                                        <div class="col-12 ">
                                                                              <span class="fs-5">Feedback</span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="row">
                                                                        <div class="col-12 ">
                                                                              <textarea class="form-control fs-6" cols="30" rows="10" id="feed"></textarea>
                                                                        </div>
                                                                  </div>
                                                                  <div class="row  py-2">
                                                                        <div class="col-12 justify-content-end d-flex">
                                                                              <button class="btn redbtn px-5 me-2 d-none" onclick="deleteinfor();" id="delbtn">Delete</button>
                                                                              <button class="btn bdbtn  px-5" onclick="feedadd();">Add</button>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <!-- counter  -->
                                                <div class="col-12">
                                                      <?php

                                                      $cou = Database::search("SELECT * FROM `counter`;");
                                                      if ($cou->num_rows == 1) {
                                                            $cou_dat = $cou->fetch_assoc();
                                                      }

                                                      ?>
                                                      <div class="row g-3 p-2 px-md-5 px-lg-2 px-xl-5">
                                                            <div class="col-12">
                                                                  <h3>Counter</h3>
                                                                  <hr />

                                                            </div>
                                                            <div id="cou_lo" class="col-12">
                                                                  <div class="row">
                                                                        <div class="col-md-6">
                                                                              <label for="inputwh" class="form-label">Work Hours</label>
                                                                              <input type="number" class="form-control" id="inputwh" value="<?php echo $cou_dat["workingHours"]; ?>">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                              <label for="inputcp" class="form-label">Completed Projects</label>
                                                                              <input type="number" class="form-control" id="inputcp" value="<?php echo $cou_dat["completedProject"]; ?>">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                              <label for="inputhc" class="form-label">Happy Clients</label>
                                                                              <input type="number" class="form-control" id="inputhc" value="<?php echo $cou_dat["happyClient"]; ?>">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                              <label for="inputhw" class="form-label">Hard Workers</label>
                                                                              <input type="number" class="form-control" id="inputhw" value="<?php echo $cou_dat["hardWork"]; ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="col-12 justify-content-end d-flex">
                                                                  <button class="btn bdbtn px-5" onclick="updateCounter();">Update</button>
                                                            </div>
                                                      </div>




                                                </div>
                                                <div class="col-12">
                                                      <div class="row p-2 px-md-5 px-lg-2 px-xl-5">
                                                            <div class="col-12">
                                                                  <h3>Project Type</h3>
                                                                  <hr />

                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                  <div class="col-12 tablebox my-3 mb-4 px-0 ">

                                                                        <table class="servicetble  w-100" id="countertable">
                                                                              <tr>
                                                                                    <th>Project Type</th>
                                                                              </tr>
                                                                              <?php
                                                                              $counter = Database::search("SELECT * FROM `project_type`");
                                                                              $crow1 = $counter->num_rows;
                                                                              for ($i = 0; $i < $crow1; $i++) {
                                                                                    $crow = $counter->fetch_assoc();
                                                                              ?>
                                                                                    <tr>
                                                                                          <td onclick="setforupdate('<?php echo $crow['pt_name'] ?>',<?php echo $crow['pt_id'] ?>)"><?php echo $crow["pt_name"] ?></td>

                                                                                    </tr>
                                                                              <?php
                                                                              }
                                                                              ?>
                                                                        </table>
                                                                  </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 g-3">
                                                                  <div class="col-12">
                                                                        <label for="inputpt" class="form-label">Project Type</label>
                                                                        <input type="text" class="form-control" id="inputpt" value="">
                                                                  </div>
                                                                  <div class="col-12 justify-content-end d-flex mt-3">
                                                                        <button class="btn bdbtn px-5" id="pt_ad_up" onclick="addpt();">Add</button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>

                                          </div>

                                    </div>

                              </div>





                        </div>
                        <div aria-live="polite" aria-atomic="true" class="position-relative bottom-0 end-0" style="z-index: 2000;">

                              <div class="toast-container position-fixed bottom-0 end-0 p-3" id="boxnoteID">



                              </div>
                        </div>
                        <div class="position-fixed d-none mb-2 w-100 h-100 blackBox" id="cropbox2" style="z-index: 1000;background-color: #000000b7;">
                              <div class="position-relative mx-auto mb-2 mt-5" id="fullimagebox2" style="height: 330px; width: 415px;">
                                    <div id="contain2" style="position:absolute; width:100%;height:100%;">

                                    </div>

                              </div>
                              <div class="w-100 text-center">

                                    <button class="resize-done2 btn bdbtn py-2 px-4 fs-6">Done</button>

                              </div>
                        </div>
                  </div>
            </div>

            <script src="bootstrap.js"></script>
            <script src="..//commen.js"></script>
            <script src="adminpanal.js"></script>
            <script type="text/javascript" src="jquery.min.js"></script>
            <script type="text/javascript" src="jquery.imageResizer.js"></script>
      </body>

      </html>
<?php

} else {
?>
      <script>
            window.location = "../signinup.php";
      </script>
<?php
}
?>
<!--  -->
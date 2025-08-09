<?php
session_start();
require "connection.php";
if (isset($_SESSION["a"])) {
    $u = $_SESSION["a"];

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="icon" href="..//resourse//logo//logo2.png" />
        <link rel="stylesheet" href="..//icofont.css" />

        <link rel="stylesheet" href="bootstrap.css" />

        <link rel="stylesheet" href="..//comman.css" />
        <link rel="stylesheet" href="profilecss.css" />
    </head>

    <body>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="row">
                        <div class=" col-12 col-md-4 col-xl-3 border-end">
                            <div class="row">
                                <div class="col-2 m-auto" style="height: 150px; width: 150px;">

                                    <label for="fileToUpload" onclick="changeImg();">
                                        <div class="profile-pic" id="view" <?php
                                                                            $rs = Database::search("SELECT * FROM `prifile_img` WHERE `employee_id`='" . $u["eid"] . "'");
                                                                            if ($rs->num_rows > 0) {
                                                                                $i = $rs->fetch_assoc();
                                                                                $img = $i["img_path"];
                                                                            ?> style="background-image: url('..//resourse//profile//<?php echo $img; ?>');" <?php
                                                                                                                                                    } else {
                                                                                                                                                        ?> style="background-image: url('..//resourse//profile//user.jpg')" <?php
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                        ?>>
                                            <span><i class="bi bi-camera"></i>&nbsp;&nbsp;Change Image</span>
                                        </div>
                                    </label>
                                    <input type="File" accept="img/*" id="fileToUpload" class="d-none" multiple>

                                </div>
                            </div>
                            <div class="row mt-4 ">
                                <div class="col-12 text-center">
                                    <span class="fs-5 fw-bold"><?php echo $u["fname"]; ?>&nbsp;&nbsp;<?php echo $u["lname"]; ?></span>
                                </div>
                                <div class="col-12 text-center">
                                    <span class="fs-6 "><?php echo $u["email"]; ?></span>
                                </div>
                            </div>
                            <hr class="d-md-none" />
                        </div>
                        <div class="col-12 col-md-8 col-xl-9">
                            <div class="row ps-3">
                                <span class="fs-5 fw-bold">Account Settings</span>
                            </div>
                            <div class="row">

                                <div class="col-10 col-lg-5 mx-auto">
                                    <div class="row">
                                        <span class="fs-6">First Name</span>
                                    </div>
                                    <div class="row">
                                        <input type="text" class="form-control text-black" placeholder="First Name" onclick="removeerror();" value="<?php echo $u["fname"]; ?>" id="fn" />
                                        <span class="text-danger text-start error_css" id="errorfname"></span>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-5 mx-auto">
                                    <div class="row">
                                        <span class="fs-6">Last Name</span>
                                    </div>
                                    <div class="row">
                                        <input type="text" class="form-control text-black" placeholder="Last Name" onclick="removeerror();" value="<?php echo $u["lname"]; ?>" id="ln" />
                                        <span class="text-danger text-start error_css" id="errorlname"></span>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-5 mx-auto" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <span class="fs-6">Email</span>
                                    </div>
                                    <div class="row">
                                        <input type="Email text-black" class="form-control" placeholder="Email Address" value="<?php echo $u["email"]; ?>" id="email" disabled />
                                    </div>
                                </div>
                                <div class="col-10 col-lg-5  mx-auto">
                                    <div class="row">
                                        <span class="fs-6">Mobile Number</span>
                                    </div>
                                    <div class="row">
                                        <input type="text" class="form-control text-black" placeholder="Contact Number" onclick="removeerror();" value="<?php echo $u["mobile"]; ?>" id="mobile" />
                                        <span class="text-danger text-start error_css" id="errormobile"></span>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-5 mx-auto" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <span class="fs-6">Password</span>
                                    </div>
                                    <div class="row">
                                        <div class="input-group p-0">
                                            <input type="password" class="form-control text-black" placeholder="Password" value="<?php echo $u["password"]; ?>" id="pass" disabled />
                                            <button class="btn btn-secondary" id="button" type="button" onclick="changepass();">Change Password &nbsp;<span class="spinner-grow spinner-grow-sm d-none" id="span" role="status" aria-hidden="true"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 col-lg-5  mx-auto" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <span class="fs-6">Designation</span>
                                    </div>
                                    <div class="row">
                                        <input type="text" class="form-control text-black" value="<?php
                                                                                                    $rs = Database::search("SELECT * FROM `employe_type` WHERE `emp_id` = '" . $u["employe_type"] . "'");
                                                                                                    $type = $rs->fetch_assoc();
                                                                                                    echo $type["emp_type"];
                                                                                                    ?>" id="des" disabled />
                                    </div>
                                </div>
                                <div class="col-10 col-lg-5  mx-auto" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <span class="fs-6">Gender</span>
                                    </div>
                                    <div class="row">
                                        <select class="form-select text-black" value="<?php
                                                                                        $rs = Database::search("SELECT * FROM `gender` WHERE `id`='" . $u["gender_id"] . "'");
                                                                                        $g = $rs->fetch_assoc();
                                                                                        echo $g;
                                                                                        ?>" id="gender" disabled>
                                            <option>Male</option>
                                        </select>
                                    </div>
                                </div>




                                <div class="col-10 col-lg-5 mx-auto" style="margin-bottom: 16px;">
                                    <div class="row">
                                        <span class="fs-6">Registration Date</span>
                                    </div>
                                    <div class="row">
                                        <input type="text" class="form-control text-black" value="<?php echo $u["reg_date"]; ?>" id="regdate" />
                                    </div>
                                </div>

                                <div class="col-12 my-3 my-lg-5 text-center">
                                    <button class="btn bdbtn px-4 py-2" onclick="update();">Update</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal-->
                <div class="modal fade" tabindex="-1" id="resetModelID" data-bs-backdrop="static" data-bs-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Reset Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 pb-0">
                                        <div class="row pb-1">
                                            <span>New Password</span>

                                            <div class="input-group mt-1">
                                                <input type="password" class="form-control" aria-describedby="basic-addon2" id="np" placeholder="Enter New Password">
                                                <button class="btn bdbtn" id="npb" onclick="showPassword1();"><i class="icofont-eye"></i></button>
                                            </div>
                                            <span class="text-danger text-start error_css ps-3" style="font-size: 14px;" id="errornp"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <span>Re-type Password</span>

                                            <div class="input-group mt-1">

                                                <input type="password" class="form-control" aria-describedby="basic-addon2" id="rnp" placeholder="Enter Re-Type Password">
                                                <button class="btn bdbtn" id="rnpb" onclick="showPassword2();"><i class="icofont-eye"></i></button>
                                            </div>
                                            <span class="text-danger text-start error_css ms-2" id="errorrnp"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row pb-1">
                                            <span>Verification Code</span>

                                            <div class="input-group mt-1">
                                                <input type="text" class="form-control" aria-describedby="basic-addon2" id="vc" placeholder="Enter Verification Code">

                                            </div>
                                            <span class="text-danger text-start error_css" id="errorvc"></span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bdbtn" onclick="resetPassword();">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div aria-live="polite" aria-atomic="true" class="position-relative bottom-0 end-0" style="z-index: 2000;">

                    <div class="toast-container position-fixed bottom-0 end-0 p-3" id="boxnoteID">



                    </div>
                </div>
            </div>
        </div>
        <script src="bootstrap.js"></script>

        <script src="profile.js"></script>
    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location = "signinup.php";
    </script>
<?php
}
?>
<?php
session_start();
require "connection.php";
if (isset($_SESSION["a"])) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link rel="icon" href="..//resourse//logo//logo2.png" />

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="../comman.css" />

  </head>

  <body>
    <div class="container-fluid">
      <div class="row g-3 vh-100">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 m-auto shadow p-5">
          <div class="row">
            <div class="col-12 mb-1 mb-md-2 mb-lg-3 mb-xl-4 mb-xxl-4">
              <h1>Employee Registration</h1>
            </div>
            <div class="col-12 col-md-6">
              <div class="row px-2">

                <label for="fn" class="form-label mb-0">First Name</label>
                <input type="text" class="form-control my-0" id="fn" placeholder="Enter your first name" onclick="errorRemove('f');">
                <span class="text-danger text-start error_css" id="fn_er"></span>
              </div>

            </div>
            <div class="col-12 col-md-6">
              <div class="row px-2">

                <label for="ln" class="form-label mb-0">Last Name</label>
                <input type="text" class="form-control my-0" id="ln" placeholder="Enter your last name" onclick="errorRemove('l');">
                <span class="text-danger text-start error_css" id="ln_er"></span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row px-2">


                <label for="e" class="form-label mb-0">Email</label>
                <input type="email" class="form-control my-0" id="e" placeholder="Enter Your emial address" onclick="errorRemove('e');">
                <span class="text-danger text-start error_css" id="e_er"></span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row px-2">


                <label for="g" class="form-label mb-0">Gender</label>
                <select type="text" class="form-select my-0" id="g" onclick="errorRemove('g');">
                  <option value="0">Select Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
                <span class="text-danger text-start error_css" id="g_er"></span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row px-2">

                <label for="p" class="form-label mb-0">Password</label>
                <input type="password" class="form-control my-0" id="p" placeholder="Password" onclick="errorRemove('p');">
                <span class="text-danger text-start error_css" id="p_er"></span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row px-2">

                <label for="cp" class="form-label mb-0">Re-Type Password</label>
                <input type="password" class="form-control my-0" placeholder="Re-Type Password" id="cp" onclick="errorRemove('cp');">
                <span class="text-danger text-start error_css" id="cp_er"></span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row px-2">

                <label for="m" class="form-label mb-0">Mobile Number</label>
                <input type="text" class="form-control my-0" id="m" placeholder="Enter your mobile number" onclick="errorRemove('m');">
                <span class="text-danger text-start error_css" id="m_er"></span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row px-2">

                <label for="po" class="form-label mb-0">Position</label>
                <select type="text" class="form-select my-0" id="po">
                  <?php
                  $posrs = Database::search("SELECT * FROM `employe_type`;");
                  for ($y = 0; $y < $posrs->num_rows; $y++) {
                    $pod = $posrs->fetch_assoc();
                    if ($pod["emp_id"] == 3) {
                  ?>
                      <option value="<?php echo $pod['emp_id'] ?>" selected><?php echo $pod["emp_type"] ?></option>
                    <?php

                    } else {
                    ?>
                      <option value="<?php echo $pod['emp_id'] ?>"><?php echo $pod["emp_type"] ?></option>
                  <?php
                    }
                  }
                  ?>


                </select>

              </div>
            </div>

            <div class="col-12 mt-3 text-center">
              <button type="submit" class="btn bdbtn py-2 px-4 fs-6" onclick="adminregister();">Register</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="adminpanal.js"></script>
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

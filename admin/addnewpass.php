<?php
require "connection.php";

$email = $_POST["e"];

?>

<div class="col-12 pt-3">
    <span class="fs-5">Enter your new password</span> <i class="icofont-arrow-right fs-4"></i>
</div>
<div class="col-12 pt-2" style="height: 70px;">

    <input type="password" class="form-control inpfiled" id="pass1" onclick="erroclear2();" placeholder="New Password" />
    <span class="text-danger text-start error_css ms-1" style="font-size: 16px;" id="error1"></span>
</div>
<div class="col-12 pb-2" style="height: 70px;">
    <input type="password" class="form-control inpfiled" id="pass2" onclick="erroclear3();" placeholder="Re-Type Password" />
    <span class="text-danger text-start error_css ms-1" style="font-size: 16px;" id="error2"></span>
</div>
<div class="col-6 ">
    <a class="btn dsilverbtn text-white d-grid" href="signinup.php">Cancel</a>
</div>
<div class="col-6">
    <span class="btn lbluebtn text-white d-grid" onclick="updatepass('<?php echo $email; ?>');">Update</span>
</div>
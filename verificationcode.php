<?php

$email = $_POST["e"];
?>


<div class="col-12 pt-3">
    <span class="fs-5">Verify your identity</span> <i class="icofont-arrow-right fs-4"></i>
    <br />
    <span class="fs-6">Check Your inbox For the verification code</span>
</div>
<div class="col-12 pt-2" style="height: 70px;">
    <input type="text" class="form-control inpfiled" id="code" onclick="erroclear1();" placeholder="Enter code" />
    <span class="text-danger text-start error_css ms-1" id="error1" style="font-size: 16px;"></span>
</div>
<!-- <div class="col-12 pt-2">
    <span class="fs-6">use a different verification option</span>
</div> -->
<div class="col-6 pt-3">
    <a class="btn dsilverbtn text-white d-grid" href="signinup.php">Cancel</a>
</div>
<div class="col-6 pt-3">
    <span class="btn lbluebtn text-white d-grid" onclick="getcode('<?php echo $email ?>');">Next</span>
</div>
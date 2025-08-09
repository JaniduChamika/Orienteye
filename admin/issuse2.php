<?php
$projectid = $_POST["projectid"];
?>
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
                            <input type="text" class="form-control" id="projectid" value="<?php echo $projectid; ?>" onclick="removeissuseborder();" placeholder="Project Id">
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

        </div>
    </div>
</div>
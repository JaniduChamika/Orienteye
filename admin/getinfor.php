<?php
require "connection.php";
session_start();
if (isset($_SESSION["a"])) {
    $email = $_POST["email"];
    $rs1 = Database::search("SELECT * FROM `feedback` WHERE `email`='" . $email . "'");
    if ($rs1->num_rows > 0) {
        $feed = $rs1->fetch_assoc();
?>
        <div class="row mt-3 px-2 px-md-5 px-lg-2 px-xl-5 py-2">
            <div class="col-12">
                <h3>Feed Back</h3>
                <hr />
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12 mx-auto text-center"  id="imageviewbox2">
                        <input type="file" accept="img/*" id="imguploader" multiple class="d-none" />
                        <label for="imguploader" onclick="changeImg();done2();"><img class="img-fluid mt-3" src="../resourse/feedback/<?php echo $feed["image"]; ?>" alt="" id="img1" /></label>
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
                            <div class="col-12">
                                <input type="text" class="form-control" id="email" value="<?php echo $feed["email"];; ?>" onchange="getinfor();" />
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
                            <div class="col-12">
                                <input type="text" class="form-control" value="<?php echo $feed["clinetName"]; ?>" id="fn" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <span class="fs-5">Feedback</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <textarea class="form-control fs-6" cols="30" rows="10" id="feed"><?php echo $feed["feed"]; ?></textarea>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 justify-content-end d-flex">
                    <button class="btn yellobtn px-5 me-2" onclick="clearfeed();" id="clerbtn">Clear</button>

                        <button class="btn redbtn px-5 me-2" onclick="deleteinfor();" id="delbtn">Delete</button>
                        <button class="btn bdbtn  px-5" onclick="feedadd();" id="btn">update</button>
                    </div>
                </div>
            </div>
        </div>
<?php
    } else {
        echo ("no feed");
    }
}
?>
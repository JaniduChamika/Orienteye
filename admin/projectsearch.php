<?php
require "connection.php";
$i = $_POST["i"];
$u = $_POST["u"];
$c = $_POST["c"];


$type = $_POST["type"];

if ($type == 1) {
    $q = "SELECT * FROM `orders` WHERE `status_sid` IN (1,2) ";
    if (!empty($i)) {
        $q .= "AND `project_id` = '" . $i . "' ";
    }
    if (!empty($u)) {
        $q .= "AND `user_uid` IN (SELECT `uid` FROM `user` WHERE `email` LIKE '" . $u . "%') ";
    }
    if ($c != 0) {
        $q .= "AND `service_id` = '" . $c . "' ";
    }

?>

    <div class="row" style="height: 575px;">
        <table class="w-100 tablpro text-light text-center" id="veiwtable" style="min-width: 660px;">

            <tr>
                <th class="th1">#</th>
                <th class="th2">Id</th>
                <th class="th3">User</th>
                <th class="th4">Category</th>
                <th class="th5">Order Date</th>
                <th class="th6">Status</th>


            </tr>
            <?php
            $pending = Database::search($q . ";");

            $d = $pending->num_rows;

            $results_per_page = 10;

            $number_of_pages = ceil($d / $results_per_page);

            if (!isset($_POST["page"])) {
                $pageno = 0;
            } else {
                $pageno = $_POST["page"];
            }

            $page_first_result = $pageno * $results_per_page;

            $selectedrs =  Database::search($q . " ORDER BY `added_date` ASC  LIMIT " . $results_per_page . " OFFSET " . $page_first_result . ";");
            $srn = $selectedrs->num_rows;

            for ($i = 0; $i < $srn; $i++) {
                $srow = $selectedrs->fetch_assoc();
            ?>
                <tr>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $i + 1 ?></td>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $srow["project_id"] ?></td>

                    <?php
                    $ude = Database::search("SELECT * FROM `user` WHERE `uid` = '" . $srow["user_uid"] . "'; ");
                    $udetails = $ude->fetch_assoc();
                    ?>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $udetails["email"]  ?></td>
                    <?php
                    $sde = Database::search("SELECT * FROM `service` WHERE `ser_id` = '" . $srow["service_id"] . "'; ");
                    $sdetails = $sde->fetch_assoc();
                    ?>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $sdetails["ser_name"] ?></td>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $srow["added_date"] ?></td>
                    <td class="td detd"><select class="form-select positionselecct mx-auto py-0" id="statusselector<?php echo $srow['project_id'] ?>" onchange="statuschange('<?php echo $srow['project_id'] ?>',<?php echo $pageno ?>)">
                            <?php
                            $statusdata = Database::search("SELECT * FROM `order_status` WHERE `sid` = '" . $srow["status_sid"] . "';");
                            $sd = $statusdata->fetch_assoc();

                            if ($sd['sid'] == '1') {

                            ?>
                                <option value="a1">Pending</option>
                                <option value="a2">Developing</option>
                            <?php
                            } else if ($sd['sid'] == '2') {

                            ?>
                                <option value="a2">Developing</option>
                                <option value="a3">Compleated</option>
                            <?php
                            }
                            ?>



                        </select>
                    </td>

                </tr>
            <?php
            }
            ?>
        </table>
    </div>


    <div class="text-center">
        <div class="pagination">
            <a href="#" onclick="projectSearch(<?php
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

                    <a href="#" onclick="projectSearch(<?php echo $page - 1 ?>)" class="active"><?php echo $page ?></a>

                <?php
                } else {
                ?>

                    <a href="#" onclick="projectSearch(<?php echo $page - 1 ?>)" class=""><?php echo $page ?></a>

            <?php
                }
            }

            ?>


            <a href="#" onclick="projectSearch(<?php

                                                    if ($pageno >= $number_of_pages - 1) {
                                                        echo $pageno;
                                                    } else {
                                                        echo ($pageno + 1);
                                                    }

                                                    ?>)">&raquo;</a>
        </div>
    </div>
<?php
} else if ($type == 2) {

    $q1 = "SELECT * FROM `orders` WHERE `status_sid` = 3 ";
    if (!empty($i)) {
        $q1 .= "AND `project_id` = '" . $i . "' ";
    }
    if (!empty($u)) {
        $q1 .= "AND `user_uid` IN (SELECT `uid` FROM `user` WHERE `email` LIKE '" . $u . "%') ";
    }
    if ($c != 0) {
        $q1 .= "AND `service_id` = '" . $c . "' ";
    }

?>
    <div class="row" style="height: 575px;">
        <table class="w-100 tablpro text-light text-center" id="veiwtable" style="min-width: 600px;">

            <tr>
                <th class="th1">#</th>
                <th class="th2">Id</th>
                <th class="th3">User</th>
                <th class="th4">Category</th>
                <th class="th5">Order Date</th>
                <th class="th6">Link</th>


            </tr>
            <?php
            $pending = Database::search($q1 . ";");

            $d = $pending->num_rows;

            $results_per_page = 10;

            $number_of_pages = ceil($d / $results_per_page);

            if (!isset($_POST["page"])) {
                $pageno = 0;
            } else {
                $pageno = $_POST["page"];
            }

            $page_first_result = $pageno * $results_per_page;

            $selectedrs =  Database::search($q1 . "ORDER BY `added_date` ASC  LIMIT " . $results_per_page . " OFFSET " . $page_first_result . ";");
            $srn = $selectedrs->num_rows;

            for ($i = 0; $i < $srn; $i++) {
                $srow = $selectedrs->fetch_assoc();
            ?>

                <tr>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $i + 1 ?></td>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $srow["project_id"] ?></td>
                    <?php
                    $ude = Database::search("SELECT * FROM `user` WHERE `uid` = '" . $srow["user_uid"] . "'; ");
                    $udetails = $ude->fetch_assoc();
                    ?>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $udetails["email"]  ?></td>
                    <?php
                    $sde = Database::search("SELECT * FROM `service` WHERE `ser_id` = '" . $srow["service_id"] . "'; ");
                    $sdetails = $sde->fetch_assoc();
                    ?>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $sdetails["ser_name"] ?></td>
                    <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadprojectmodeldata('<?php echo $srow['project_id'] ?>');"><?php echo $srow["complete_date"]?></td>
                    <td class="td detd"><a href="<?php $srow["link"] ?>"><button class="btn bdbtn py-0"><i class="icofont-link"></i></button></a></td>

                </tr>
            <?php
            }
            ?>


        </table>
    </div>
    <div class="text-center">
        <div class="pagination">
            <a href="#" onclick="projectSearch(<?php
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

                    <a href="#" onclick="projectSearch(<?php echo $page - 1 ?>)" class="active"><?php echo $page ?></a>

                <?php
                } else {
                ?>

                    <a href="#" onclick="projectSearch(<?php echo $page - 1 ?>)" class=""><?php echo $page ?></a>

            <?php
                }
            }

            ?>


            <a href="#" onclick="projectSearch(<?php

                                                    if ($pageno >= $number_of_pages - 1) {
                                                        echo $pageno;
                                                    } else {
                                                        echo ($pageno + 1);
                                                    }

                                                    ?>)">&raquo;</a>
        </div>
    </div>
<?php

}


?>
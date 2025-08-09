<?php
require "connection.php";

$s = $_GET["s"];

if (empty($s)) {
}

?>

<div class="row" style="height: 575px;">
    <table class="w-100 tablpro text-light text-center" id="veiwtable" style="min-width: 1000px;">


        <tr>
            <th class="th1">#</th>
            <th class="th2">Email</th>
            <th class="th3">Name</th>
            <th class="th4">Contact</th>
            <th class="th5">Register Date</th>
            <th class="th6">Position</th>



        </tr>
        <?php
        $pending = Database::search("SELECT * FROM `employee` WHERE `email` LIKE '%" . $s . "%' OR `fname` LIKE '%" . $s . "%' OR `lname` LIKE '%" . $s . "%' OR `mobile` LIKE '%" . $s . "%';");

        $d = $pending->num_rows;

        $results_per_page = 10;

        $number_of_pages = ceil($d / $results_per_page);

        if (!isset($_GET["page"])) {
            $pageno = 0;
        } else {
            $pageno = $_GET["page"];
        }

        $page_first_result = $pageno * $results_per_page;

        $selectedrs =  Database::search("SELECT * FROM `employee` WHERE `email` LIKE '%" . $s . "%' OR `fname` LIKE '%" . $s . "%' OR `lname` LIKE '%" . $s . "%' OR `mobile` LIKE '%" . $s . "%' ORDER BY `reg_date` ASC  LIMIT " . $results_per_page . " OFFSET " . $page_first_result . ";");
        $srn = $selectedrs->num_rows;

        for ($i = 0; $i < $srn; $i++) {
            $srow = $selectedrs->fetch_assoc();
        ?>
            <tr>
                <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $i + 1 + $page_first_result ?></td>
                <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $srow["email"] ?></td>

                <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $srow["fname"] . " " . $srow["lname"]  ?></td>

                <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $srow["mobile"]  ?></td>
                <td class="td" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo explode(" ", $srow["reg_date"])[0] ?></td>
                <td class="td " data-bs-toggle="modal" data-bs-target="#exampleModal"><Select class="form-select positionselecct m-auto py-0" onchange="changeemployee(<?php echo $srow['eid'] ?>,<?php echo $pageno ?>)" id="emp_s<?php echo $srow["eid"] ?>">

                        <?php
                        $uty = Database::search("SELECT * FROM employe_type ");
                        $emp = $uty->num_rows;
                        for ($y = 0; $y < $emp; $y++) {
                            $empd = $uty->fetch_assoc();
                            if ($empd["emp_id"] == $srow["employe_type"]) {
                        ?>
                                <option value="<?php echo $empd["emp_id"] ?>" selected><?php echo $empd["emp_type"] ?></option>
                            <?php

                            } else {
                            ?>
                                <option value="<?php echo $empd["emp_id"] ?>"><?php echo $empd["emp_type"] ?></option>

                        <?php
                            }
                        }


                        ?>
                    </Select></td>


            </tr>
        <?php
        }
        ?>
    </table>
</div>


<div class="text-center">
    <div class="pagination">
        <a href="#" onclick="loademployee(<?php
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

                <a href="#" onclick="loademployee(<?php echo $page - 1 ?>)" class="active"><?php echo $page ?></a>

            <?php
            } else {
            ?>

                <a href="#" onclick="loademployee(<?php echo $page - 1 ?>)" class=""><?php echo $page ?></a>

        <?php
            }
        }

        ?>


        <a href="#" onclick="loademployee(<?php

                                            if ($pageno >= $number_of_pages - 1) {
                                                echo $pageno;
                                            } else {
                                                echo ($pageno + 1);
                                            }

                                            ?>)">&raquo;</a>
    </div>
</div>
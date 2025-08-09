<?php
require "connection.php";

$s = $_GET["s"];

if (empty($s)) {
}

?>

<div class="row" style="height: 575px;">
    <table class="w-100 tablpro text-light text-center" id="veiwtable" style="min-width: 800px;">


        <tr>
            <th class="th1">#</th>
            <th class="th2">Email</th>
            <th class="th3">Name</th>
            <th class="th4">Contact</th>
            <th class="th5">Register Date</th>
            <th class="th6">Status</th>


        </tr>
        <?php
        $pending = Database::search("SELECT * FROM `user` WHERE (`email` LIKE '" . $s . "%' OR `fname` LIKE '" . $s . "%' OR `lname` LIKE '%" . $s . "%' OR `mobile` LIKE '%" . $s . "%') AND `uid`!='0';");

        $d = $pending->num_rows;

        $results_per_page = 10;

        $number_of_pages = ceil($d / $results_per_page);

        if (!isset($_GET["page"])) {
            $pageno = 0;
        } else {
            $pageno = $_GET["page"];
        }

        $page_first_result = $pageno * $results_per_page;

        $selectedrs =  Database::search("SELECT * FROM `user` WHERE (`email` LIKE '" . $s . "%' OR `fname` LIKE '" . $s . "%' OR `lname` LIKE '%" . $s . "%' OR `mobile` LIKE '%" . $s . "%')AND `uid`!='0' ORDER BY `reg_date` ASC  LIMIT " . $results_per_page . " OFFSET " . $page_first_result . ";");
        $srn = $selectedrs->num_rows;

        for ($i = 0; $i < $srn; $i++) {
            $srow = $selectedrs->fetch_assoc();
        ?>
            <tr>
                <td class="td" data-bs-toggle="modal" onclick="refreshUserChat(<?php echo $srow['uid'] ?>);" data-bs-target="#exampleModal"><?php echo $i + 1+$results_per_page ?></td>
                <td class="td" style="cursor:text;" data-bs-toggle="modal" onclick="refreshUserChat(<?php echo $srow['uid'] ?>);" data-bs-target="#exampleModal"><?php echo $srow["email"] ?></td>

                <td class="td" data-bs-toggle="modal" onclick="refreshUserChat(<?php echo $srow['uid'] ?>);" data-bs-target="#exampleModal"><?php echo $srow["fname"] . " " . $srow["lname"]  ?></td>

                <td class="td" data-bs-toggle="modal" onclick="refreshUserChat(<?php echo $srow['uid'] ?>);" data-bs-target="#exampleModal"><?php echo $srow["mobile"]  ?></td>
                <td class="td" data-bs-toggle="modal" onclick="refreshUserChat(<?php echo $srow['uid'] ?>);" data-bs-target="#exampleModal"><?php echo explode(" ", $srow["reg_date"])[0] ?></td>
                <?php
                if ($srow["status"] == "2") {
                ?>
                    <td class="td detd"><button class="btn bdbtngreen py-1" onclick="cangestate(<?php echo $srow['uid'] ?>);" id="blockbtn<?php echo $srow['uid'] ?>"><i class="icofont-unlocked"></i></button></td>
                <?php
                } else if ($srow["status"] == "1") {
                ?>
                    <td class="td detd"><button class="btn redbtn py-1" onclick="cangestate(<?php echo $srow['uid'] ?>);" id="blockbtn<?php echo $srow['uid'] ?>"><i class="icofont-unlock"></i></button></td>
                <?php
                }
                ?>




            </tr>
        <?php
        }
        ?>
    </table>
</div>


<div class="text-center">
    <div class="pagination">
        <a href="#" onclick="loadusers(<?php
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

                <a href="#" onclick="loadusers(<?php echo $page - 1 ?>)" class="active"><?php echo $page ?></a>

            <?php
            } else {
            ?>

                <a href="#" onclick="loadusers(<?php echo $page - 1 ?>)" class=""><?php echo $page ?></a>

        <?php
            }
        }

        ?>


        <a href="#" onclick="loadusers(<?php

                                        if ($pageno >= $number_of_pages - 1) {
                                            echo $pageno;
                                        } else {
                                            echo ($pageno + 1);
                                        }

                                        ?>)">&raquo;</a>
    </div>
</div>
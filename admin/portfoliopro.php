<?php
require "connection.php";

?>
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
            $pending;
            if ($_POST["ser"] != "0" && !empty($_POST["proName"])) {
                  $pending = Database::search("SELECT * FROM `project` WHERE `project_name` LIKE '" . $_POST["proName"] . "%' AND `service_id`='" . $_POST["ser"] . "'");
            } else if ($_POST["ser"] != "0") {
                  $pending = Database::search("SELECT * FROM `project` WHERE  `service_id`='" . $_POST["ser"] . "'");
            } else if (!empty($_POST["proName"])) {
                  $pending = Database::search("SELECT * FROM `project` WHERE `project_name` LIKE '" . $_POST["proName"] . "%' ");
            } else {
                  $pending = Database::search("SELECT * FROM `project`");
            }

            $d = $pending->num_rows;

            $results_per_page = 10;

            $number_of_pages = ceil($d / $results_per_page);

            if (!isset($_POST["page"])) {
                  $pageno = 0;
            } else {
                  $pageno = $_POST["page"];
            }

            $page_first_result = (int)$pageno * $results_per_page;
            $selectedrs;
            if ($_POST["ser"] != "0" && !empty($_POST["proName"])) {
                  $selectedrs = Database::search("SELECT * FROM `project` WHERE `project_name` LIKE '" . $_POST["proName"] . "%' AND `service_id`='" . $_POST["ser"] . "'  LIMIT " . $results_per_page . " OFFSET " . $page_first_result . "");
            } else if ($_POST["ser"] != "0") {
                  $selectedrs = Database::search("SELECT * FROM `project` WHERE  `service_id`='" . $_POST["ser"] . "'  LIMIT " . $results_per_page . " OFFSET " . $page_first_result . "");
            } else if (!empty($_POST["proName"])) {
                  $selectedrs = Database::search("SELECT * FROM `project` WHERE `project_name` LIKE '" . $_POST["proName"] . "%'  LIMIT " . $results_per_page . " OFFSET " . $page_first_result . "");
            } else {
                  $selectedrs = Database::search("SELECT * FROM `project`  LIMIT " . $results_per_page . " OFFSET " . $page_first_result . "");
            }
            // $selectedrs =  Database::search("SELECT * FROM `project`   LIMIT " . $results_per_page . " OFFSET " . $page_first_result . ";");
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
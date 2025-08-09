<?php

require "connection.php";

$pt = $_GET["pt"];

if (empty($pt)) {
    echo "ept";
} else {
    if($_GET["t"] == 1){
        Database::iud("INSERT INTO `project_type`(`pt_name`) VALUES('" . $pt . "');");
    }else if($_GET["t"] == 2){
        Database::iud("UPDATE `project_type` SET `pt_name` = '".$pt."' WHERE `pt_id` = '".$_GET["pt_id"]."';");
    }
   
?>
    <tr>
        <th>Project Type</th>
    </tr>
    <?php
    $counter = Database::search("SELECT * FROM `project_type`");
    $crow1 = $counter->num_rows;
    for ($i = 0; $i < $crow1; $i++) {
        $crow = $counter->fetch_assoc();
    ?>
        <tr>
            <td onclick="setforupdate('<?php echo $crow['pt_name'] ?>',<?php echo $crow['pt_id'] ?>)"><?php echo $crow["pt_name"] ?></td>

        </tr>
    <?php
    }
    ?>
<?php
}


?>
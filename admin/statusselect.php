<?php
require "connection.php";
$sta = $_GET["s"];
$id = $_GET["id"];

if ($sta == 'a1') {
    Database::iud("UPDATE `orders` SET `status_sid` = '1' WHERE `project_id` = '" . $id . "';");
?>
    
        <option value="a1">Pending</option>
        <option value="a2">Developing</option>
        
    <?php
} else if ($sta == 'a2') {
    Database::iud("UPDATE `orders` SET `status_sid` = '2' WHERE `project_id` = '" . $id . "';");
    ?>
       
            <option value="a2">Developing</option>
            <option value="a3">Compleated</option>
           
    <?php
} else if ($sta == 'a3') {
    Database::iud("UPDATE `orders` SET `status_sid` = '3' WHERE `project_id` = '" . $id . "';");
    echo "done";
}
// echo $sta;
    ?>
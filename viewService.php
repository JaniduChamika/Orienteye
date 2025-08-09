<?php
require "connection.php";
?>
<tr>
      <th>Service</th>
</tr>
<?php
$service = Database::search("SELECT * FROM `service`");
$srow = $service->num_rows;
for ($i = 0; $i < $srow; $i++) {
      $drow = $service->fetch_assoc();
?>
      <tr>
      <td class="<?php if ($drow["ad_status"]=="2"){echo "text-danger";}  ?>" onclick="fillServiceForUpdate(<?php echo $drow['ser_id'] ?>,'<?php echo $drow['simg'] ?>','<?php echo $drow['ser_name'] ?>',<?php echo $drow['ad_status'] ?>);erroclearservice1();errorclearimgService();"><?php echo $drow["ser_name"] ?></td>

      </tr>
<?php
}

?>
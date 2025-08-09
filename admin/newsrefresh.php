<?php
require "connection.php";

?>
<div class="col-12 px-0">
      <h2>Veiw News</h2>
      <hr />

</div>

<?php
$news = Database::search("SELECT * FROM `news`");
for ($i = 0; $i < $news->num_rows; $i++) {
      $d = $news->fetch_assoc();

?>
      <div class="col-12  newsbox d-flex justify-content-center bacimgnews position-relative" style="background-image: url('..//resourse//news//<?php echo $d["img_path"] ?>');" onclick="getNews(<?php echo  $d['nid'] ?>,'<?php echo  $d['topic'] ?>','<?php echo $d['img_path'] ?>','<?php echo $d['details'] ?>')">
            <div class="darkbox position-absolute"></div>
            <h2 class="m-auto text-light fw-bold" style="z-index: 2;"><?php echo $d["topic"] ?></h2>
      </div>

<?php
}
?>
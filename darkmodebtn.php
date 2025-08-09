<?php
if (isset($_GET["thw"])) {
?>
      <input class="form-check-input themebtn d-none checkbox" onchange="themeChanger();" type="checkbox" id="themechangerID">
      <label for="themechangerID" class="labeltog">

            <i class="icofont-moon"></i>
            <i class="icofont-sun-alt"></i>

            <div class='ball'></div>
      </label>
<?php
} else {
?>
      <input class="form-check-input themebtn d-none checkbox" onchange="themeChanger();" type="checkbox" id="themechangerID" checked>
      <label for="themechangerID" class="labeltog">

            <i class="icofont-moon"></i>

            <i class="icofont-sun-alt"></i>

            <div class='ball'></div>
      </label>
<?php
}
?>
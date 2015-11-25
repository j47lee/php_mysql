<?php

  $page_title = "Data form";
  include("includes/header.html");

  function generate_month_option(){
    $month_array = array(1 => "January","February","March","April","May","June","July","August","September","October","November","December");
    foreach ($month_array as $key => $month) {
      echo '<option value="' . $key . '"';
      if ($_SERVER['REQUEST_METHOD']==='POST') {
        if (isset($_POST['fav_month']) && $_POST['fav_month']===$key) {
          echo 'selected="selected"';
        }
      }
      echo '>'. $month . '</option>';
    }
  }

 ?>
<!-- page content starts here -->
<form action="form_practice.php" method="post">
  <div>Name: <input type="text" name="name"></div>
  <div>Favorite month:
    <select name="fav_month">
      <?php
        generate_month_option();
      ?>
    </select>
  </div>
  <div></div>
  <div></div>
  <div></div>
  <button type="submit" name="button">Submit</button>
</form>


<!-- advertisement -->
<!-- footer -->
<?php

  include("includes/ad.html");
  include("includes/footer.html");

 ?>

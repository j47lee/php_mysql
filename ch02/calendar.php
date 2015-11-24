<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calendar</title>
  </head>
  <body>
    <form action="calendar.php" method="post">
      <?php
        $months = array(1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        $days = range(1, 31);
        $years = range(2015, 2025);

        echo "<select name=\"month\">";
          foreach($months as $k => $v){
            echo "<option value='$k'>$v</option>";
          }
        echo "</select>";

        echo "<select name='day'>";
          foreach($days as $v){
            echo "<option value='$v'>$v</option>";
          }
        echo "</select>";

        echo "<select name='year'>";
          foreach($years as $v){
            echo "<option value='$v'>$v</option>";
          }
        echo "</select>";

      if(is_array($days)){
        echo "<div>Is an array.</div>";
      } else {
        echo "<div>Is not an array.</div>";
      }

      ?>
    </form>
  </body>
</html>

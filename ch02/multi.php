<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Multi-dimensional arrays</title>
  </head>
  <body>
    <?php
      $mexico = array(
        'YU' => 'Yucatan',
        'BC' => 'Baja California',
        'OA' => 'Oaxaca'
      );
      $us = array (
        'MD' => 'Maryland',
        'IL' => 'Illinois',
        'PA' => 'Pennsylvania',
        'IA' => 'Iowa'
      );
        $canada = array (
        'QC' => 'Quebec',
        'AB' => 'Alberta',
        'NT' => 'Northwest Territories',
        'YT' => 'Yukon',
        'PE' => 'Prince Edward Island'
      );

      $n_america = array("Mexico"=>$mexico, "US"=>$us, "Canada"=>$canada);

      foreach($n_america as $country => $cities){
        echo "<h3>$country</h3>";
        echo "<ul>";
        foreach($cities as $abbr => $city){
          echo "<li>$abbr: $city</li>";
        }
        echo "</ul>";
      }

    ?>
  </body>
</html>

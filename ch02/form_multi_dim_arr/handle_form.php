<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Handle Form</title>
  </head>
  <body>
    <?php

    $interestsArray = $_POST['interests'];
    echo "You are interested in ";
    $interestHTML = '';
    foreach($interestsArray as $key => $interest){
      if(count($interestsArray) == 1){
        echo "$interest.";
      } else {
        if($key != count($interestsArray)-1){
          echo $interestHTML . $interest . ', ';
        } else {
          echo "and $interest.";
        }
      }
    }

    echo "<br>";
    $interestsString = implode(', ', $interestsArray);
    echo $interestsString;

    echo "<br>";
    //sorting an array
    print_r($interestsArray);
    echo "<br>";
    asort($interestsArray);
    print_r($interestsArray);

    ?>
  </body>
</html>

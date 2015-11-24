<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Feedback</title>
  </head>
  <body>
  <?php

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $comments = $_REQUEST['comments'];

  echo "$name $email $comments";

  if (isset($_REQUEST['gender'])){
    $gender = $_REQUEST['gender'];
  } else {
    $gender = NULL;
  };

  if ($gender === "M"){
    echo "Good day, sir.";
  } elseif ($gender === "F"){
    echo "Good day, madame.";
  } else {
    echo "Please choose a gender";
  };


  ?>
  </body>
</html>

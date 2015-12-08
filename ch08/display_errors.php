<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Displaying Errors</title>
  </head>
  <body>

<h2>Testing Display Errors</h2>

<?php
ini_set('display errors', 0);
error_reporting(0);

foreach ($var as $v) { }
$result = 1/0;

?>

  </body>
</html>

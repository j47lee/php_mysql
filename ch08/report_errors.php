<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test Error Reportng</title>
  </head>
  <body>

<h2>Test Error Reporting</h2>

<?php
ini_set('display errors', 0);
error_reporting(0);
error_reporting(E_ALL | E_STRICT);

foreach ($var as $v) { }
$result = 1/0;

?>

  </body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Using Echo</title>
</head>
<body>
	<!-- Script 1.2 - first.php -->
	<p>This is standard HTML.</p>

<?php
	echo '<h1>This is PHP</h1>';

	// php comment that won't show

	$name = "Jonathan";
	print "Hi, $name!" . "<br>";

	// variables ============================================================
	$file = $_SERVER['SCRIPT_FILENAME'];
	$user = $_SERVER['HTTP_USER_AGENT'];
	$server = $_SERVER['SERVER_SOFTWARE'];
	print "You are running the file: <strong>$file</strong><br>";
	print "You are viewing this page using: <strong>$user</strong><br>";
	print "This server is running: <strong>$server</strong><br>";

	// string length ===========================================================
	$randomString = "This is a random string.";
	$stringLength = strlen($randomString);
	print $stringLength . "<br>";

	// numbers ===========================================================
	// convert to format with commas and with five decimal places)
	$n = 34354;
	$n = number_format($n, 5);
	print $n . "<br>";

	// constants ===========================================================
	define ('NAME', 'Jonathan');
	print "The name is " . NAME. "." . "<br>";
	print "PHP version: " . PHP_VERSION . "<br>";
	print "PHP OS: " . PHP_OS . "<br>";

	phpinfo();

?>

</body>
</html>

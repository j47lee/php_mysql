<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
</head>
<body>

<?php
	echo '<h1>This is PHP</h1>';

	// php comment that won't show

	$name = "Jonathan";
	print "Hi, $name!" . "<br>";

	// variables ============================================================
	echo "<h3>Variables</h3>";
	$file = $_SERVER['SCRIPT_FILENAME'];
	$user = $_SERVER['HTTP_USER_AGENT'];
	$server = $_SERVER['SERVER_SOFTWARE'];
	print "You are running the file: <strong>$file</strong><br>";
	print "You are viewing this page using: <strong>$user</strong><br>";
	print "This server is running: <strong>$server</strong><br>";

	// string length ===========================================================
	echo "<h3>Strings</h3>";
	$randomString = "This is a random string.";
	$stringLength = strlen($randomString);
	print $stringLength . "<br>";

	// numbers ===========================================================
	// convert to format with commas and with five decimal places)
	echo "<h3>Numbers</h3>";
	$n = 34354;
	$n = number_format($n, 5);
	print $n . "<br>";

	// constants ===========================================================
	echo "<h3>Constants</h3>";
	define ('NAME', 'Jonathan');
	print "The name is " . NAME. "." . "<br>";
	print "PHP version: " . PHP_VERSION . "<br>";
	print "PHP OS: " . PHP_OS . "<br>";

	// arrays ===========================================================
	echo "<h3>Arrays</h3>";
	$array1[] = "Apples";
	$array1[] = "Oranges";
	print_r($array1);
	echo "<br>";

	$array2 = array("Bears","Koalas");
	print_r($array2);
	echo "<br>";

	$array3 = array("tv_show" => "Scandal", "movie" => "The Good Dinosaur");
	print_r($array3['tv_show']);
	echo "<br>";

	foreach($array3 as $key => $value){
		echo "<div>The key is \"$key\" and value is \"$value\"</div>";
	}

	// phpinfo ===========================================================
	echo "<h3>PHP Info</h3>";
	phpinfo();

?>

</body>
</html>

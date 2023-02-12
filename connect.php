<!DOCTYPE HTML>
<html>
<head>
<title>Connect</title>
</head>
<body>
<p>
<?php
$hn = "localhost";
$un = "admin1";
$pw = "P@ssw0rd";
$db = "50states";

// Create connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
		die("Connection failed: " .$conn->connect_error);
}
echo "Connected successfully";
?>
</p>
</body>
</html>

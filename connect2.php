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
echo "Connected successfully.<br>";
// Query
if ($result = $conn->query("SELECT * FROM state")) {
		echo "Returned rows are: " .$result->num_rows;
		// Free result set
		$result->free_result();
}
$conn->close();
?>
</p>
</body>
</html>

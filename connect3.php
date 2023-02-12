<!DOCTYPE HTML>
<html>
<head>
<title>Connect</title>
</head>
<body>
<p>
<?php

$mysqli = new mysqli("localhost","admin1","P@ssw0rd","50states");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM state")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>
</p>
</body>
</html>

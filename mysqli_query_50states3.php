<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
<title>50 States</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "admin1";
$password = "P@ssw0rd";
$dbname = "50states";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT state_name, abbreviation, capital FROM state";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>State</th><th>Abbreviation</th><th>Capital</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["state_name"]."</td><td>".$row["abbreviation"]."</td><td> ".$row["capital"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>

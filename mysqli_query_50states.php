<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
<title>50 States</title>
</head>
<body>
<?php

// Connect to the database
$host = "localhost";
$user = "admin1";
$password = "P@ssw0rd";
$dbname = "50states";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL query
$query = "SELECT state_name, abbreviation FROM state";

// Execute the query and retrieve the result set
$result = mysqli_query($conn, $query);

// Generate the HTML table
$table = "<table>";
$table .= "<tr>";
$table .= "<th>State</th>";
$table .= "<th>Abbreviation</th>";
$table .= "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $table .= "<tr>";
    $table .= "<td>" . $row['state_name'] . "</td>";
    $table .= "<td>" . $row['abbreviation'] . "</td>";
    $table .= "</tr>";
}

$table .= "</table>";

// Display the HTML table
echo $table;

// Close the database connection
mysqli_close($conn);

?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
<title>50 States</title>
</head>
<body>
<p>
<?php
$connection = mysql_connect("localhost","admin1","P@ssw0rd";

mysql_select_db("50states");

$result = ("SELECT state_name, abreviation
			FROM state", $connection);

while ($row = mysql_fetch_array($result, MYSQL_NUM))
{
		foreach ($row as $attribute)
				print "{$attribute}";
		print "\n";
}

?>
</p>
</body>
</html>
<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal Error");

    $query = "SELECT * FROM state";
    $result = $conn->query($query);

    if (!$result) die("Fatal Error");

    $rows = $result->num_rows;

    for ($j = 0 ; $j < $rows ; ++$j)
    {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        
        echo 'State: ' .htmlspecialchars($row['state_name']) .'<br>';
        echo 'Abbreviation: ' .htmlspecialchars($row['abreviation']) .'<br>';
        echo 'State-hood: ' .htmlspecialchars($row['state_hood']) .'<br>';
        echo 'Captial: ' .htmlspecialchars($row['capital']) .'<br>';
        echo 'Capital Since: ' .htmlspecialchars($row['capital_since']) .'<br>';
        echo 'Area: ' .htmlspecialchars($row['area']) .'<br>';
        echo 'Population: ' .htmlspecialchars($row['pop']) .'<br>';
        echo 'Metropolitan: ' .htmlspecialchars($row['metro']) .'<br>';
        echo 'Rank in State: ' .htmlspecialchars($row['rank_state']) .'<br><br>';
    }

    $result->close();
    $conn->close();
?>
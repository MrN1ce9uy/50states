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
        $result->data_seek($j);
        echo 'State: ' .htmlspecialchars($result->fetch_assoc()['state_name']) .'<br>';
        $result->data_seek($j);
        echo 'Abbreviation: ' .htmlspecialchars($result->fetch_assoc()['abreviation']) .'<br>';
        $result->data_seek($j);
        echo 'State-hood: ' .htmlspecialchars($result->fetch_assoc()['state_hood']) .'<br>';
        $result->data_seek($j);
        echo 'Captial: ' .htmlspecialchars($result->fetch_assoc()['capital']) .'<br>';
        $result->data_seek($j);
        echo 'Capital Since: ' .htmlspecialchars($result->fetch_assoc()['capital_since']) .'<br>';
        $result->data_seek($j);
        echo 'Area: ' .htmlspecialchars($result->fetch_assoc()['area']) .'<br>';
        $result->data_seek($j);
        echo 'Population: ' .htmlspecialchars($result->fetch_assoc()['pop']) .'<br>';
        $result->data_seek($j);
        echo 'Metropolitan: ' .htmlspecialchars($result->fetch_assoc()['metro']) .'<br>';
        $result->data_seek($j);
        echo 'Rank in State: ' .htmlspecialchars($result->fetch_assoc()['rank_state']) .'<br><br>';
    }

    $result->close();
    $conn->close();
?>
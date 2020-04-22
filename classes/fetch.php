<?php

//fetch.php

require_once('../server/config/config.php');

$output = '';

$query = '';

if (isset($_POST["query"])) {
    $search = str_replace(",", "|", $_POST["query"]);
    $query = "
 SELECT * FROM tbltimetable 
 WHERE date REGEXP '" . $search . "' 
 OR class REGEXP '" . $search . "' 
 OR start REGEXP '" . $search . "' 
 OR finish REGEXP '" . $search . "' 
 OR instructor_name REGEXP '" . $search . "'
 ";
} else {
    $query = "
 SELECT * FROM tbltimetable ORDER BY date
 ";
}

$statement = $link->prepare($query);
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}

echo json_encode($data);

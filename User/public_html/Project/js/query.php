<?php
header('Content-Type: application/json');

$result = array();

if( !isset($_POST["queryText"]) ) { $result["error"] = 'ERROR: No query provided to query.php.'; }
else {
    $query = $_POST["queryText"];
    $mysqli = new mysqli("localhost", "cen4010s2020_g12", "faueng2020", "cen4010s2020_g12");
    
    if ($mysqli -> connect_errno) {
        $result["error"] = "ERROR: Cannot connect to database in query.php: " . $mysqli->connect_error;
    } else {
        $queryResult = $mysqli->query($query);
        $array = array();
        while ($row = $queryResult->fetch_assoc()) {
            $array[] = $row;
        }
        
        $result["result"] = json_encode($array);
    }
}

echo json_encode($result);
?>
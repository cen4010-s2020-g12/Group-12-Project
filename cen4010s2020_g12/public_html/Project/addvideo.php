<?php
    header('Content-Type: application/json');
    include 'roomstruct.php';

    if (!isset($_POST['vidID'])) { 
        echo "Failure: No ID provided";     //simple error handling just in case
    } else {
        addtoqueue($_POST['vidID']);
        echo "Success";
    }
?>
<?php
include 'roomstruct.php';
$queue = new SplQueue();
    $queue -> enqueue('https://www.youtube.com/watch?v=668nUCeBHyY');
    $queue -> enqueue('https://www.youtube.com/watch?v=cE0wfjsybIQ');
    $queue -> enqueue('https://www.youtube.com/watch?v=FGBhQbmPwH8');
    serializequeue($queue);
?>

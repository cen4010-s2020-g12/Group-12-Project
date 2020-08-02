<?php
include 'roomstruct.php';
$queue = new SplQueue();
    $queue -> enqueue('https://www.youtube.com/watch?v=cfdZUnHkuuI');
    $queue -> enqueue('https://www.youtube.com/watch?v=cE0wfjsybIQ');
    $queue -> enqueue('https://www.youtube.com/watch?v=BzW-Wd4fBQ4');
    serializequeue($queue);
?>

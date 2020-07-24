<?php
    $queue = new SplQueue();
    $queue -> enqueue('https://www.youtube.com/watch?v=pxw-5qfJ1dk&t=132s');
    $queue -> enqueue('https://www.youtube.com/watch?v=cE0wfjsybIQ');
    $queue -> enqueue('https://www.youtube.com/watch?v=FGBhQbmPwH8');

function serializequeue($vidqueue)
{
    $serialized = serialize($vidqueue);
    file_put_contents('serializedqueue', $serialized);
}

function unserializequeue()
{
    $s = file_get_contents('serializedqueue');
    $unserialized = unserialize($s);
    return $unserialized;
}

function removefromqueue()
{
    $temp = unserializequeue();
    $temp->dequeue();
    serializequeue($temp);
}
?>

<?php
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

function getnextvideo()
{
    $temp = unserializequeue();
    return $temp->bottom();
}

function removefromqueue()
{
    $temp = unserializequeue();
    $temp->dequeue();
    serializequeue($temp);
}

function checkempty()
{
    $temp = unserializequeue();
    return $temp->isEmpty();
}

function printqueue() 
{
    $s = file_get_contents('serializedqueue');
    $unserialized = unserialize($s);
    $sorted = [];
    while (!$unserialized->isEmpty()) {
        array_unshift($sorted, $unserialized->pop());
    }
    return $sorted;
}
?>

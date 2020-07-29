<?php 
    include "roomload.php";

    $arr = printqueue();
    foreach ($arr as &$temp) {
        $value = explode("v=", $temp);
        $videoId = $value[1];
        $str = "<img class=\"videoTn\" src=\"https://img.youtube.com/vi/" . $videoId . "/0.jpg\">";
        echo("<div class=\"card\"><h2>" . $str . "</h2></div>");
    }
?>

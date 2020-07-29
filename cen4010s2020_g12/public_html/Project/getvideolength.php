<?php
function gettime($vidurl)
{
    parse_str( parse_url( $vidurl, PHP_URL_QUERY ), $my_array_of_vars );
    $ytid =  $my_array_of_vars['v'];  
    $encodedjson = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=".$ytid."&part=contentDetails&key=AIzaSyBiI3RW4tTmXKWV1GyUU8IsLUyfzBHVuAE");
    $decodedjson = json_decode($encodedjson);
    $encodedtime = $decodedjson->items[0]->contentDetails->duration;
    $hourpos = strpos($encodedtime,'H')+1;
    $minutepos = strpos($encodedtime, 'M')+1;
    $secondpos = strpos($encodedtime, 'S')+1;
    $timeinseconds = 0; 
    if($hourpos-1) {
        $timeinseconds+=((int)substr($encodedtime,2,$hourpos))*60*60;
        $timeinseconds+=((int)substr($encodedtime,$hourpos,$minutepos-$hourpos-1))*60; 
        $timeinseconds+=((int)substr($encodedtime,$minutepos,$secondpos-$minutepos-1));      
    }
    else if ($minutepos-1) {
        $timeinseconds+=((int)substr($encodedtime,2,$minutepos))*60;
        $timeinseconds+=((int)substr($encodedtime,$minutepos,$secondpos-$minutepos-1));
    }   
    else {
        $timeinseconds+=((int)substr($encodedtime,2,$secondpos));
    } 
    return $timeinseconds;
}
?>

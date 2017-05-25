<?php /*
*   Url Formatter
*/

function urlFormat($str){
    //Strip out whitespace
    $str = preg_replace('/\s*/', '', $str);
    //Convert the string to all lower case
    $str = strtolower($str);
    //URL encode
    $str = urlencode($str);
    return $str;
}

function dateFormat($date){
    $date = date("F j, Y, g:i a",strtotime($date));
    return $date;
}

?>
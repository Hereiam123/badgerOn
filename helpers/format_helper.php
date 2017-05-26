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

/*
*   Add classname active if category is active
*/

function is_active($category){
    if(isset($_GET['category'])){
        if($_GET['category'] == $category){
            return 'active';
        }
        else{
            return '';
        }
    }
    else{
        if($category == null){
            return 'active';
        }
    }
}

?>
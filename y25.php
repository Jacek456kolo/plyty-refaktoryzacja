<?php
//listing 7.4 str. 359

function getBrowserType(){
    if(!isset($_SERVER['HTTP_USER_AGENT'])) {
        return ("nieznana1");
    }

    $browser_info=strtolower($_SERVER['HTTP_USER_AGENT']);

    if(strpos($browser_info,"opera") !== false){
    return("opera");
    }
    else if(strpos($browser_info,"msie") !== false){
    return("msie");
    }
    else if(strpos($browser_info,"firefox") !== false){
    return("firefox");
    }
    else if(strpos($browser_info,"chrome") !== false){
    return("chrome");
    }
    else{
    return ("nieznana2");
    }
}

echo getBrowserType();
?>
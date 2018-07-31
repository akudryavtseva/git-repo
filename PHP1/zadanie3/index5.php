<?php

function changeStr($str){
    $arrayStr = explode(" ", $str);
    return $str = implode("_", $arrayStr);
}
$str = "fdg fgs fdsg sfg retg";
echo changeStr($str);
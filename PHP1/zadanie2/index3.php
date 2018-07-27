<?php
function add($x, $y){
    return $x + $y;
}
function reduce($x, $y){
    return $x - $y;
}
function multiply($x, $y){
    return $x * $y;
}
function divide($x, $y):int {
    return $x / $y;
}

echo add(2,3.3)."<br>";
echo reduce(2,3)."<br>";
echo multiply(2,3)."<br>";
echo divide(6,4);
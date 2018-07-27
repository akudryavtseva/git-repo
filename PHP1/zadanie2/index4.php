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

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return add($arg1, $arg2);
            break;
        case '-':
            return reduce($arg1, $arg2);
            break;
        case '*':
            return multiply($arg1, $arg2);
            break;
        case '/':
            return divide($arg1, $arg2);
            break;
    }
}

echo mathOperation(3,1, '+')."<br>";
echo mathOperation(5,3, '-')."<br>";
echo mathOperation(7,5, '*')."<br>";
echo mathOperation(9,7, '/')."<br>";


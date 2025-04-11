<?php

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        throw new Exception("Division by zero is not allowed.");
    }
}

$calculator = [
    ['add', '2 + 3'],
    ['subtract', '5 - 2'],
    ['multiply', '4 * 6'],
    ['divide', '8 / 2']
];

print_r($calculator);

?>

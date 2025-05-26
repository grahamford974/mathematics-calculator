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
        throw new Exception("Divisor cannot be zero.");
    }
}

function power($base, $exponent) {
    if ($exponent >= 0) {
        return pow($base, $exponent);
    } else {
        return pow($base, -$exponent);
    }
}

function factorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}
?>

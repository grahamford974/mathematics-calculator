<?php
// Function to calculate addition
function add($a, $b) {
    return $a + $b;
}

// Function to calculate subtraction
function subtract($a, $b) {
    return $a - $b;
}

// Function to calculate multiplication
function multiply($a, $b) {
    return $a * $b;
}

// Function to calculate division
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}
?>

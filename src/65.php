<?php
// This is a simple PHP script to perform basic arithmetic operations.
// Add your own code here

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
        throw new Exception("Error: Division by zero is not allowed.");
    }
}

echo "Result of addition: " . add(5, 3);
echo "\n";
echo "Result of subtraction: " . subtract(10, 4);
echo "\n";
echo "Result of multiplication: " . multiply(7, 2);
echo "\n";
echo "Result of division: " . divide(8, 2);

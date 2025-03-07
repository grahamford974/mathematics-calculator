
<?php

// Function to perform addition operation
function add($num1, $num2) {
    return $num1 + $num2;
}

// Function to perform subtraction operation
function subtract($num1, $num2) {
    return $num1 - $num2;
}

// Function to perform multiplication operation
function multiply($num1, $num2) {
    return $num1 * $num2;
}

// Function to perform division operation
function divide($num1, $num2) {
    if ($num2 == 0) {
        throw new Exception("Cannot divide by zero");
    } else {
        return $num1 / $num2;
    }
}

?>
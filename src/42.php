<?php
// Example of a basic mathematical calculation function
function performCalculation($operation, $numbers) {
    switch ($operation) {
        case 'add':
            echo "The result of adding two numbers: " . add($numbers[0], $numbers[1]) . "\n";
            break;
        case 'subtract':
            echo "The result of subtracting the second number from the first: " . subtrahendSubtract($numbers[0], $numbers[1]) . "\n";
            break;
        case 'multiply':
            echo "The result of multiplying two numbers: " . multiply($numbers[0], $numbers[1]) . "\n";
            break;
        case 'divide':
            if ($numbers[0] != 0) {
                echo "The result of dividing the first number by the second number is: " . divide($numbers[0], $numbers[1]) . "\n";
            } else {
                echo "Error: Division by zero\n";
            }
            break;
        default:
            echo "Unknown operation.\n";
    }
}

function add($a, $b) {
    return $a + $b;
}

function subtrahendSubtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        echo "Error: Division by zero\n";
        return 0;
    }
}
?>

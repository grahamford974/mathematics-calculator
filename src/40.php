<?php
// Define some constants
const PI = 3.141592653589793;

function calculate($value) {
    if (is_numeric($value)) {
        // Perform mathematical operation on the value
        return $value;
    } else {
        throw new Exception("Input should be a numeric value.");
    }
}

// Main function to test the functionality of calculate
function main() {
    try {
        echo "Result: " . calculate(5) . PHP_EOL;  // Expected output: 3.141592653589793 (pi)
        echo "Result: " . calculate(PI * 2) . PHP_EOL;  // Expected output: 6.283185307179586
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}

main();
?>

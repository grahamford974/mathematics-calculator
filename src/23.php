<?php
// Define variables
$operation = "add"; // Add or subtract

// Get user input
$num1 = readline("Enter first number: ");
$num2 = readline("Enter second number: ");

// Perform arithmetic operation based on input and operation
switch($operation) {
    case "add":
        $result = $num1 + $num2;
        echo "Result of addition is: $result";
        break;
    case "subtract":
        $result = $num1 - $num2;
        echo "Result of subtraction is: $result";
        break;
    default:
        echo "Invalid operation. Please choose 'add' or 'subtract'.";
}
?>

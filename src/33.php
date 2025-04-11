<?php
// Define constants
define("DIVIDE", "÷");
define("MULTIPLY", "×");

// Main function
function main() {
    // Get input from user
    $user_input = readline("Enter first number: ");
    $user_input = trim($user_input);
    if (!is_numeric($user_input)) {
        echo "Invalid input. Please enter a valid numeric value.\n";
        return;
    }

    // Get second input from user
    $second_input = readline("Enter second number: ");
    $second_input = trim($second_input);

    // Perform calculation
    if ($second_input == "") {
        echo "No second number entered. Calculation cancelled.\n";
        return;
    } else {
        $result = strval((int)$user_input) . DIVIDE . (string)$second_input;
        echo "Result: " . $result . "\n";
    }
}

// Main call
main();
?>

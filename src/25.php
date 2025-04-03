<?php
// Define constants
$constants = [
    '1' => 1,
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '0' => 0
];

// Get user input for arithmetic operation
$input = readline("Enter an arithmetic operation: ");
$a = $input[0];
$b = $input[strlen($input) - 1];

// Perform the calculation and display result
$result = $constants[$a] + $constants[$b];
echo "The result of $a plus $b is: $result\n";
?>

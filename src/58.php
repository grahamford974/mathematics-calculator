<?php
// Define variables
$operation = $_GET['operation'];
$input1 = $_GET['input1'];
$input2 = $_GET['input2'];

// Perform arithmetic operations based on operation input
switch ($operation) {
    case 'add':
        $result = $input1 + $input2;
        echo "Result: $result";
        break;

    case 'subtract':
        $result = $input1 - $input2;
        echo "Result: $result";
        break;

    case 'multiply':
        $result = $input1 * $input2;
        echo "Result: $result";
        break;

    case 'divide':
        if ($input2 != 0) {
            $result = $input1 / $input2;
            echo "Result: $result";
        } else {
            echo "Error: Division by zero is not allowed.";
        }
        break;
}

// Get user input again after performing operations
?>


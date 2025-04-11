<?php
// Simple mathematics calculator
function calculate($operation, $operands) {
    if ($operation == 'add') {
        return $operands[0] + $operands[1];
    } elseif ($operation == 'subtract') {
        return $operands[0] - $operands[1];
    } else if ($operation == 'multiply') {
        return $operands[0] * $operands[1];
    } else if ($operation == 'divide') {
        return $operands[0] / $operands[1];
    }
}

// Example usage
$numbers = [2, 3, 4, 5];
$result = calculate('add', $numbers);
echo "Result: " . $result;
?>

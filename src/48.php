<?php
// Simple mathematics calculator

function calculate($a, $b, $operation) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                throw new Exception("Error: Division by zero is not allowed.");
            }
        default:
            throw new Exception("Unknown operation");
    }
}

echo "Enter the first number: ";
$a = floatval(trim(fgets(STDIN)));
echo "Enter the second number: ";
$b = floatval(trim(fgets(STDIN)));

try {
    echo "Operation: " . $operation . ".\n";
    $result = calculate($a, $b, $operation);
    echo "Result: " . $result . "\n";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

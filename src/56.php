<?php
function calculate($a, $b, $operation = '+') {
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
                throw new Exception("Cannot divide by zero.");
            }
        default:
            throw new Exception("Unsupported operation: $operation");
    }
}

try {
    echo "Result of {$a} {$operation} {$b} is: " . calculate($a, $b);
} catch (Exception $e) {
    echo $e->getMessage();
}

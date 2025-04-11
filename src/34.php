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
                throw new Exception("Division by zero is not allowed!");
            }
    }
}

echo "Result: " . calculate(10, 5, '/') . "\n";
?>

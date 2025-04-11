<?php
function calculate($a, $b, $operator) {
    switch ($operator) {
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
                echo "Error: Division by zero.";
                return null;
            }
        default:
            echo "Error: Invalid operator.";
            return null;
    }
}
?>

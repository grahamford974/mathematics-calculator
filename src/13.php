<?php
function calculate($num1, $operator, $num2) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if($num2 == 0) {
                throw new Exception("Cannot divide by zero");
            } else {
                return $num1 / $num2;
            }
        default:
            throw new Exception("Invalid operator");
    }
}

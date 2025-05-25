<?php
function calculate($a, $b, $operator = 'add') {
    switch ($operator) {
        case 'add':
            return $a + $b;
        case 'sub':
            return $a - $b;
        case 'mul':
            return $a * $b;
        case 'div':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Error: Division by zero is not allowed.";
            }
    }
}
?>

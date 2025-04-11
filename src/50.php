<?php
class SimpleMathCalculator {
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Cannot divide by zero";
        }
    }
}

// Example usage
$result = SimpleMathCalculator::add(5, 3);
echo "The result of addition is: " . $result;

$result = SimpleMathCalculator::subtract(8, 4);
echo "The result of subtraction is: " . $result;

$result = SimpleMathCalculator::multiply(9, 2);
echo "The result of multiplication is: " . $result;

$result = SimpleMathCalculator::divide(15, 3);
echo "The result of division is: " . $result;
?>

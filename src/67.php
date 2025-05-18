<?php
class MathCalculator {
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
            throw new Exception("Cannot divide by zero");
        }
    }

    public function power($num1, $exponent) {
        return pow($num1, $exponent);
    }
}
?>

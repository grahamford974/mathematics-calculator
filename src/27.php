<?php
class MathematicsCalculator {
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
        }
        throw new Exception("Divison by zero is not allowed.");
    }
}
?>

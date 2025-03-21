<?php
// This is a mathematical calculator in PHP. You can perform addition, subtraction, multiplication, and division.
function calculate($input1, $input2) {
    return $input1 + $input2;
}

$input1 = 5;
$input2 = 3;

$result = calculate($input1, $input2);
echo "The result of $input1 plus $input2 is: $result";
?>

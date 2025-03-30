<?php
function add($a, $b) {
    return $a + $b;
}
function subtract($a, $b) {
    return $a - $b;
}
function multiply($a, $b) {
    return $a * $b;
}
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("除数不能为零");
    }
    return $a / $b;
}

try {
    $result1 = add(5, 3);
    echo "结果: $result1\n";

    $result2 = subtract(8, 4);
    echo "结果: $result2\n";

    $result3 = multiply(6, 7);
    echo "结果: $result3\n";

    $result4 = divide(10, 0);
    echo "结果: $result4\n";
} catch (Exception $e) {
    echo "出错原因: $e\n";
}
?>

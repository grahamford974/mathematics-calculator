 <?php
 function get_result($operation) {
    $number1 = 5;
    $number2 = 2;
    if ($operation == "+") {
        $result = $number1 + $number2;
    } elseif ($operation == "-") {
        $result = $number1 - $number2;
    } elseif ($operation == "*") {
        $result = $number1 * $number2;
    } elseif ($operation == "/") {
        $result = $number1 / $number2;
    } else {
        echo "Invalid operation";
    }
    return $result;
}
?>
$number1 = $_POST['num1'];
$operator = $_POST['oper'];
$number2 = $_POST['num2'];
switch ($operator) {
    case '+':
        $result = $number1 + $number2;
        break;
    case '-':
        $result = $number1 - $number2;
        break;
    case '*':
        $result = $number1 * $number2;
        break;
    case '/':
        $result = $number1 / $number2;
        break;
}
echo "Result: " . $result;
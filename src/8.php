
<?php
// Get the numbers to be operated on from the user input
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

// Perform the arithmetic operation based on the user's choice
if ($_POST["operation"] == "add") {
    $result = $num1 + $num2;
} else if ($_POST["operation"] == "subtract") {
    $result = $num1 - $num2;
} else if ($_POST["operation"] == "multiply") {
    $result = $num1 * $num2;
} else if ($_POST["operation"] == "divide") {
    $result = $num1 / $num2;
}

// Output the result of the arithmetic operation
echo $result;
?>
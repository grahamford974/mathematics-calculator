<?php
// This is an example of a simple PHP script to perform mathematical calculations.
// The script demonstrates basic arithmetic operations: addition, subtraction, multiplication,
// and division.

// Example number values
$number1 = 5; // Add or subtract if needed
$number2 = 3;

// Perform the math operations
$result = $number1 + $number2;
$resultSubtraction = $number1 - $number2;
$resultMultiplication = $number1 * $number2;
$resultDivision = $number1 / $number2;

// Output the results
echo "Result of addition: " . $result . "<br>";
echo "Result of subtraction: " . $resultSubtraction . "<br>";
echo "Result of multiplication: " . $resultMultiplication . "<br>";
echo "Result of division: " . $resultDivision . "<br>";

// Function to test the results with given data points
function checkResults($number1, $number2, $expectedAddition, $expectedSubtraction, $expectedMultiplication, $expectedDivision) {
    $result = $number1 + $number2;
    if ($result == $expectedAddition) {
        echo "Test passed: Addition is correct." . "<br>";
    } else {
        echo "Test failed: Addition was incorrect." . "<br>";
    }

    $resultSubtraction = $number1 - $number2;
    if ($resultSubtraction == $expectedSubtraction) {
        echo "Test passed: Subtraction is correct." . "<br>";
    } else {
        echo "Test failed: Subtraction was incorrect." . "<br>";
    }

    $resultMultiplication = $number1 * $number2;
    if ($resultMultiplication == $expectedMultiplication) {
        echo "Test passed: Multiplication is correct." . "<br>";
    } else {
        echo "Test failed: Multiplication was incorrect." . "<br>";
    }

    $resultDivision = $number1 / $number2;
    if ($resultDivision == $expectedDivision) {
        echo "Test passed: Division is correct." . "<br>";
    } else {
        echo "Test failed: Division was incorrect." . "<br>";
    }
}

// Example data points for the checkResults function
$checkResult1 = 5 + 3; // Expected: 8
$checkResult2 = 6 - 4; // Expected: 2
$checkResult3 = 7 * 3; // Expected: 21
$checkResult4 = 9 / 3; // Expected: 3

// Call the checkResults function with sample data points and expected results
checkResults($number1, $number2, $expectedAddition, $expectedSubtraction, $expectedMultiplication, $expectedDivision);
?>

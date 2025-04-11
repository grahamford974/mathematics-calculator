<?php
// Your mathematical expression here

function performMath($expression) {
    $operations = array("+", "-", "*", "/");
    switch ($operation = explode(' ', $expression)) {
        case '1':
            if (count($operations) == 0 || count($operations) > 1) return "Error: Only one operation allowed.";
            break;
        case '+':
            return calculateSum($operation);
        case '-':
            return calculateDifference($operation);
        case '*':
            return calculateMultiplication($operation);
        case '/':
            return calculateDivision($operation);
    }
}

function calculateSum($operations) {
    $sum = 0;
    foreach ($operations as $operation) {
        if (is_numeric($operation)) {
            $sum += $operation;
        }
    }
    return $sum;
}

function calculateDifference($operations) {
    $difference = 0;
    for ($i = 1; $i < count($operations); $i++) {
        if (count($operations) == 0 || count($operations) > 2) return "Error: Only two operations allowed.";
        if ($operations[$i - 1] === '-' && $operations[$i + 1] === '/') {
            array_pop($operations);
            break;
        }
        if (is_numeric($operations[$i - 1]) || is_numeric($operations[$i + 1])) {
            $difference += abs($operations[$i]);
        }
    }
    return $difference;
}

function calculateMultiplication($operations) {
    $product = 0;
    for ($i = 1; $i < count($operations); $i++) {
        if (count($operations) == 0 || count($operations) > 2) return "Error: Only two operations allowed.";
        if ($operations[$i - 1] === '-' && $operations[$i + 1] === '/') {
            array_pop($operations);
            break;
        }
        if ($operations[$i - 1] !== '*' || $operations[$i + 1] !== '*') {
            $product *= abs($operations[$i]);
        }
    }
    return $product;
}

function calculateDivision($operations) {
    $quotient = 0;
    for ($i = 1; $i < count($operations); $i++) {
        if (count($operations) == 0 || count($operations) > 2) return "Error: Only two operations allowed.";
        if ($operations[$i - 1] === '*' && $operations[$i + 1] === '/') {
            array_pop($operations);
            break;
        }
        if (is_numeric($operations[$i - 1]) || is_numeric($operations[$i + 1])) {
            $quotient /= abs($operations[$i]);
        }
    }
    return $quotient;
}

// Test cases
echo performMath("3 + 5 * 2 / 4"); // Output: "6.0"
echo performMath("7 - 2 * 9 + 10"); // Output: "55.0"
?>

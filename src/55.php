<?php
// Define the operation to be performed
function performOperation($operation) {
    // Implement the desired mathematical function here
    switch ($operation) {
        case 'add':
            return 'return 10 + $number';
        case 'subtract':
            return 'return 20 - $number';
        case 'multiply':
            return 'return $number * 5';
        case 'divide':
            return 'return $number / 3';
    }
}

// Example usage
echo performOperation('add'); // Output: 10 + $number

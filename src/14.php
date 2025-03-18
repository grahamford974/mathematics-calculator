<?php 
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += rand(0, 10);
}
echo "The sum is: {$sum}";
?>

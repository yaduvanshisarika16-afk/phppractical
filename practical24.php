<?php
// Indexed Array
$numbers = array(10, 60, 30, 300, 50);

echo "Array Elements: ";
print_r($numbers);

// Calculate Sum
$sum = 0;
foreach($numbers as $num) {
    $sum += $num;
}

echo "<br><br>Sum of all numbers = " . $sum;
?>

<?php
// Indexed Array
$numbers = array(25, 10, 45, 5, 60, 15);

echo "Array Elements: ";
print_r($numbers);

// Method 1: Using built-in functions
$largest = max($numbers);
$smallest = min($numbers);

echo "<br><br>Largest Number = " . $largest;
echo "<br>Smallest Number = " . $smallest;

// Method 2: Manual (using loop)
$maxVal = $numbers[0];
$minVal = $numbers[0];

foreach($numbers as $num) {
    if($num > $maxVal) {
        $maxVal = $num;
    }
    if($num < $minVal) {
        $minVal = $num;
    }
}

echo "<br><br>(Using Loop) Largest Number = " . $maxVal;
echo "<br>(Using Loop) Smallest Number = " . $minVal;
?>

<?php
// Store numbers in an indexed array
$numbers = array(45, 10, 78, 23, 56, 5);

echo "Original Array: ";
print_r($numbers);

// Ascending order using sort()
sort($numbers);
echo "<br><br>Array in Ascending Order (sort): ";
print_r($numbers);

// Descending order using rsort()
rsort($numbers);
echo "<br><br>Array in Descending Order (rsort): ";
print_r($numbers);
?>

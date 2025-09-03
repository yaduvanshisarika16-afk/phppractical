<?php
// Indexed array with duplicate values
$numbers = array(10, 20, 30, 20, 40, 10, 50, 30);

echo "Original Array: ";
print_r($numbers);

// Remove duplicate values using array_unique()
$uniqueNumbers = array_unique($numbers);

echo "<br><br>Array after removing duplicates: ";
print_r($uniqueNumbers);
?>

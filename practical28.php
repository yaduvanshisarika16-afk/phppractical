<?php
// Create an array
$numbers = array(10, 20, 30, 40, 50);

// Value to search
$searchValue = 30;

echo "Array Elements: ";
print_r($numbers);

// Check if value exists using in_array()
if (in_array($searchValue, $numbers)) {
    echo "<br><br>Value $searchValue exists in the array.";
} else {
    echo "<br><br>Value $searchValue does not exist in the array.";
}
?>

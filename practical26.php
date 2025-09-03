<?php
// Create an array of 6 elements
$numbers = array(10, 20, 30, 40, 50, 60);

echo "Original Array: ";
print_r($numbers);

// ------------------
// Method 1: Without using array_reverse()
// ------------------
echo "<br><br>Reverse Order (Without array_reverse()): ";
for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo $numbers[$i] . " ";
}

// ------------------
// Method 2: With using array_reverse()
// ------------------
$revArray = array_reverse($numbers);

echo "<br><br>Reverse Order (With array_reverse()): ";
print_r($revArray);
?>

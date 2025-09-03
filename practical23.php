<?php
// Original Array
$numbers = array(10, 5, 8, 3, 12, 7);

echo "Original Array: ";
print_r($numbers);

// sort() - Ascending order
sort($numbers);
echo "<br><br>After sort() : ";
print_r($numbers);

// rsort() - Descending order
rsort($numbers);
echo "<br><br>After rsort() : ";
print_r($numbers);

// Associative array
$marks = array("Ravi"=>85, "Amit"=>92, "Sumit"=>78, "Pooja"=>90);

echo "<br><br>Original Associative Array: ";
print_r($marks);

// asort() - Ascending order by values
asort($marks);
echo "<br><br>After asort() : ";
print_r($marks);

// arsort() - Descending order by values
arsort($marks);
echo "<br><br>After arsort() : ";
print_r($marks);

// ksort() - Ascending order by keys
ksort($marks);
echo "<br><br>After ksort() : ";
print_r($marks);

// krsort() - Descending order by keys
krsort($marks);
echo "<br><br>After krsort() : ";
print_r($marks);
?>


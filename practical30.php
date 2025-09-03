<?php
// Associative array of countries and capitals
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

echo "List of Countries and their Capitals:<br><br>";

// Print using foreach
foreach ($countries as $country => $capital) {
    echo "Country: " . $country . " - Capital: " . $capital . "<br>";
}
?>

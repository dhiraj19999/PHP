<?php
$colors = array("Red", "Green", "Blue", "Yellow");
echo "Traversing array using foreach loop:\n";
foreach ($colors as $color) {
    echo $color . "\n";
}
echo "\nTraversing array using for loop:\n";
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "\n";
}
$length = count($colors);
echo "\nLength of the array: " . $length;

?
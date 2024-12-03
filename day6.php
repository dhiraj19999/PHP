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

The array_chunk() function splits an array into chunks of new arrays.

Syntax
array_chunk(array, size, preserve_key)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use
size	Required. An integer that specifies the size of each chunk
preserve_key	Optional. Possible values:
true - Preserves the keys
false - Default. Reindexes the chunk numerically

<?php    
$cars=array("BMW"=>"550000","MERCEDES"=>"250000","CHEVROLET"=>"200000", "Maruti"=>"50000"); 
print_r(array_chunk($cars,2));   
?>
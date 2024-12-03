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




Change all keys in an array to uppercase:

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
?>
Definition and Usage
The array_change_key_case() function changes all keys in an array to lowercase or uppercase.

Syntax
array_change_key_case(array, case)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use
case	Optional. Possible values:
CASE_LOWER - Default value. Changes the keys to lowercase
CASE_UPPER - Changes the keys to uppercase





Print the information about some variables in a more human-readable way:

<?php
$a = array("red", "green", "blue");
print_r($a);

echo "<br>";

$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r($b);
?>
Definition and Usage
The print_r() function prints the information about a variable in a more human-readable way.

Syntax
print_r(variable, return);
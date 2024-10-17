To create a constant, use the define() function.

Syntax
define(name, value);
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
ExampleGet your own PHP Server
Create a constant with a case-sensitive name:

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
<!DOCTYPE html>
<html>
<body>
<h1> Hello Everyone </h1>
<?php
echo "Hello Everyone";
?>
</body>
</html>


<!DOCTYPE html>
<html>
<body>
<h1> Hello Everyone </h1>
<?php
efine("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// string concatnation

$age = 25;
$intro = "I am " . $age . " years old.";
// . operator is used to join 
echo $intro; // Output: I am 25 years old.


// dump 

$my_string = "Hello, World!";
var_dump($my_string);// Output: string(13) "Hello, World!"
$my_int = 42;
var_dump($my_int);// output: int(42)
?>



</body>
</html>
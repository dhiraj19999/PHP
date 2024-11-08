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


$decimaln=324;
$octal=0324;
$hexan=0x45;
echo "The decimal number is: " . $decimaln . "<br/>";
echo "The octal number is: " . $octal . "<br/>";
echo "The hexadecimal number is: " . $hexan . "<br/>";


/ String
$stringVar = "Hello, LPU student";
echo $stringVar . "\n"; 

// Integer
$intVar = 42;
echo $intVar . "\n"; 

// Float
$floatVar = 3.14159;
echo $floatVar . "\n"; // 

// Boolean
$boolVar = true;
echo $boolVar ? 'true' : 'false';


$cars = array("Volvo", "BMW", "Toyota");



define("defined", "just a defined constant",true);
 const VAR = 'FOO'
?>



</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
echo $x++; // output will be 10  Returns $x, then increments $x by one
$x = 10;  
echo ++$x;  // output wil be 11  Increments $x by one, then returns $x

//The xor keyword is a logical operator.

//Logical operators are used to combine conditional statements.

//The return value will only be true if one of the statements is true and the other one is false.
if(5 < 3 xor 5 < 10) {
    echo "Only one of the expressions was true";
  }  // prints Only one of the expressions was true
?>  

</body>
</html>

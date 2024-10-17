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
echo "Hello Everyone";
//echo "</br>";
$a=10;
$b=$a*100; 
echo $b;
// here hello everyone 1000 get printed in single line but if we use </br> tag 1000 goes to new line
?>

<?php
$num1 = 10;
$NUm1 = 11;
$NUM1 = 12;
echo $num1;
echo "\n";
echo $NUM1;
echo "\n"; // TO ADD IN NEW LINE
echo $NUm1;
//echo "\n";
?>

<?php

$num1=10;
$num2=11;
$num3=12;
echo "Total=",$num1+$num2+$num3; /// CONCATIINATION
echo "\n";
?>
</body>
</html>
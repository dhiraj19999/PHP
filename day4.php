$a=20;
$b=30;
$c=50;

if($a>$b and $a>$C){
    echo "a is bigger";
}
else{
    echo "a is smaller";
}

The switch statement is used to perform different actions based on different conditions.



$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}


Associative arrays are arrays that use named keys that you assign to them.

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
brand: Ford
model: Mustang
year: 1964


idexed array: Indexed array is an array with a numeric key. It is basically an array wherein each of the keys is associated with its own specific value.

Associative array: An associative array is stored in the form of key-value pair. This type of array is where the key is stored in the numeric or string format. 
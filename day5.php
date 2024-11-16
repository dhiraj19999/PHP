<?php
//$cars=array("Maruti"=>"35","Creta"=>"45");
//echo "The value of the car is " . $cars['Creta'];



// Defining a multidimensional array
$details=array(array("name"=>"Taran", "mob"=>"5678", "email"=>"taran@gmail.com", ),    
array("name"=>"Gurfateh","mob"=>"1234","email"=>"gur@gmail.com",), array("name"=>"Ravinder","mob"=>"9999","email"=>"rav@gmail.com", ));

// Accessing elements
echo "Taran email-id is: " . $details[0]["email"], "\n <br/>";
echo "Gurfateh mobile number is: " . $details[2]["mob"];


?>


list construct
The list() function is an inbuilt function in PHP which is used to assign array values to multiple variables at a time.
each() - returns the current element key and value, and moves the internal pointer forward
<?php
$cars = ['Maruti', 'Mercedes' => 'G4'];
reset($cars);             
while ( list($key, $val) = each($cars) ) 
{
    echo "$key => $val \n";
}
?>
<?php

echo "Hello";

$name = "john Doe";
$age = 25;

$arr = array("name"25);
$assoc_arr = ["name"=>"Drusawin","age"=>25];

echo $arr[0];
echo $assoc_arr["age"];
echo $arr;
echo "<br>";
Var_dump($assoc_arr);

echo"Hello$name";
echo 'Hallo $name';

$oject=(object)$assoc_arr;
echo $object->name;

funtion plus($a,$b)
{
 return $a+$b;
}
$add_name = function($name){
    echo "Hello $name";
};

$car = (object)["color"=> "red","name"=>$add_name];
echo $car->name("test");
//e
?>

<?php
phpinfo
?>
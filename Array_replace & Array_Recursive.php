<?php

$frut = ['Apple','Orange','b'=>'banana','Nill'];
$veg = ['a'=>'Allo','b'=>'Gobi','c'=>'Gajar'];
$color = ['Red','Green','Yellow','Blue','Parpal'];

$newArray = array_replace($frut,$veg);  //simple array replacement vlues
echo "<pre>";
print_r($newArray);

echo "</pre>";


$array1 = ['a'=> ["Red1"],'b'=>["Green","Yellow"]];

$array2 = ['a'=> ["B"],'b'=>["Black"]];


echo "<pre>";
print_r($array1)."<br>";
print_r($array2)."<br>";
echo "</pre>";
echo "<br>";

$newArray1 = array_replace_recursive($array1,$array2);   //Assocative replacement array

echo "<pre>";
print_r($newArray1);
echo "</pre>";

?>
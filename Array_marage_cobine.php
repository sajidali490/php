<?php

$f = ["a"=>"computer","b"=> "LED", "c"=> "PC"];
$g = ["a"=> "Mouse",
"b"=>['Color'=> ['Red','Blue','Green']],
"i"=> "RAM"];
$h = ['ab'=>['fr'=>'apple','cc'=>'banana']];

//$new_array = array_merge($f,$g,$h);  // array ko marge krna klaiya 
$new_array = array_merge_recursive($f,$g,$h);
echo "<pre>";

print_r($new_array);
echo "</pre>";



$name = ["Sajid","Rauf","Fahad"];
$age = ["28","32","38"];

$newarray1 = array_combine($name,$age);


echo "<pre>";

print_r($newarray1);
echo "</pre>";


?>
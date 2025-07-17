<?php
/*
$a = "Orange";
$color = ["a" => "Red","b"=>"Green","c"=>"Blue" ];

extract($color,EXTR_PREFIX_ALL, "test");

echo "Value of A : $a <br>";
echo "Value of A : $test_a <br>";
echo "Value of B : $test_b <br>";
echo "Value of C : $test_c <br>";*/

$firstname = "Sajid";
$lastname = "Ali";
$age = 28;
$Gendar = "Male";
$Country = "Pakistan";
$extra = ["Gendar","Country"];
$info = compact("firstname","lastname","age",$extra);
echo "<pre>";
print_r($info);
echo "</pre>";
?>
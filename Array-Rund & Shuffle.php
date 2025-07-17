<?php

$a = ["Green","Yellow","Black","Blue","Red"];

$a1 = array_rand($a,2);

echo "<pre>";
print_r($a1);
echo "</pre>";

echo "<br>";
echo $a[$a1[0]] . "<br>";
echo $a[$a1[1]];





?>
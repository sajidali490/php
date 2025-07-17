<?php

$color = ['Red','Green','Blue','Pruple' ];
$color1 = [
    "c"=>'Red',
    "d"=> 'Green',
    "b"=> 'Blue',
    "a"=> 'Pruple'
];

krsort ($color1);

echo "<pre>";
print_r($color1);

echo "</pre>";

?>
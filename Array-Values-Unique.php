<?php

$color = [
    "a"=> 'Red',
    "b"=>'Black',
    "c"=> 'blue',
    "d"=> 'Red',

];

$newarray = array_unique($color);

echo "<pre>";

print_r($newarray);

echo "</pre>";

?>
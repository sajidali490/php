<?php

function myfun($n , $m){

    return $n  * $m ;
}

$b = [1,2,3,4,5];

$a = ['Orange','Apple','Banan'];

$a1= array_reduce($b , 'myfun',10);

echo "<pre>";

print_r($a1);
echo "<pre>";
?>
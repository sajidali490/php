<?php

function myFun($v,$k,$p){

    echo "$v = $p _ $k <br>";

}
$vege =[
    "1"=> "Allo","2"=> "Gobi"
];
$fruit = [
    $vege,
    "a"=> "Lamon",
    "b"=> "Orange",
    "c"=> "Banana",
    "d"=> "Apple"



];


array_walk_recursive($fruit, "myFun", "is a Key of");




?>
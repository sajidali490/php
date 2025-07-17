<?php

$x = 20;
$y = 12;
function test($num){

global $x, $y;    //global Verables in functions
$num = $x + $y;
echo "The Variable Value In Function is... ". $num ;

}

test(15);

echo " <br>The Variable Value out function  is... " . $y;



?>

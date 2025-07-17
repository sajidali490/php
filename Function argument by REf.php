<?php

function testing (&$string){

    $string  .= "and Something Extr...";
}

$str = "This is String";
testing($str);

echo $str; 




?>

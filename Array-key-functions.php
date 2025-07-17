<?php


$color = ["red","green","black"];

$newaray = array_keys($color);    // use for Array key Retrun 
echo "<pre>";
//print_r($newaray);
echo "</pre>";

$cat = [
    "color"=> 'Red',
    "Vegi"=>'Allo',
    "Number"=> '1',


];
$newcat = array_key_exists("color1",$cat);
if($newcat){

    echo "The Key is Exists";
}else{
    echo "The Key is not Exists";
}


?>
<?php

$food = ['Apple','Orange','Banan'];


//echo in_array('Apple',$food). "<br>";


if(in_array('Apple',$food)){
    echo "Record Found";
}else{

    echo "Record can't Found";
}

echo "<br>";
//echo array_search('Orange',$food);

echo "<br>";

$food2 = [
'a'=> '15',
'b'=> '20',
'c'=> 25,
];

echo array_search('15',$food2,true);




?>
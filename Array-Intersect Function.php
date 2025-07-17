<?php

function compare($a,$b){                //function for compare 
    if($a===$b){
        return 0;
    }
    return ($a > $b)? 1 :-1;
}
function comparevlue($a,$b){                //function for compare 
    if($a===$b){
        return 0;
    }
    return ($a > $b)? 1 :-1;
}



$a1 = [
    "a"=>'Green',"b"=>'Blue',"c"=>'Black', 

];
$b2 = [
    "c"=> 'Black',"d"=>'Blue',"a"=>'Green',
];

$newayra = array_uintersect_uassoc($a1,$b2,"compare","comparevlue");

echo "<pre>";

print_r($newayra);

echo "</pre>";

?>
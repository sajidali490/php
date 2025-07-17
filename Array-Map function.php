<?php
function square($n, $m){
    return [$n => $m ];
}

$a =[1,2,3,4,5];
$b = ["Red","Black","Blue","Yellow","Green"];
$a1 = array_map(null,$a , $b);

echo "<pre>";


print_r($a1);


echo "</pre>";

?>
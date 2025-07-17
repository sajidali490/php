<?php

$a1 = ["a"=>'red',"b"=>'Black',"c"=> 'blue'];
$b2 = ["d"=> 'blue',"e"=>'green',"a"=>'red'];
//$c1 = ["a"=> 'blue',"e"=>'green',"f"=>'red'];
$newaray = array_diff_key($a1,$b2);


echo "<pre>";
print_r($newaray);
echo "</pre>";
?>
<?php

$color = [100,200,300,400];

/*echo $color [0]. "<br>";
echo $color [1] . "<br>";
echo $color [2] . "<br>";


echo "<pre>";
print_r($color);
 
echo "</pre>";

*/
echo "<ul>";
for($i = 0;$i < 4; $i++){

    echo  "<li> $color[$i] </li>";


echo "</ul>";
}


?>
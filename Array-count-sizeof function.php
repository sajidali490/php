<?php

$food = ['orange','apple','Banana','Banana','Banana','Banana'];

echo count($food). "<br>";    //use for only 1 Array vlue checked

$food1 = [

"Fruts"=> ['orange','apple'],
"Vagitables"=> ['Allo','Gobi','Gajar'],

];

echo sizeof($food1['Vagitables'],1) . "<br>";  //use for internal and external Array value checked 

$len = count($food);

for($i = 0; $i < $len; $i++){

    echo $food[$i] . "<br>";
}
echo '<pre>';
print_r (array_count_values($food));

echo '</pre>';
?>
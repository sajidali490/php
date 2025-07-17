<?php

function sum($eng,$math,$sc){ //function for sum total number of Books

    $s = $eng + $math + $sc;

    return $s;
}
function per($st){   // function for Percentage total Marks of Books


    $p = $st / 3;

    echo $p . "%";
}




$total = sum(80,90 ,95);


echo "Total Number is :" . $total ."<br>";
 per($total);


?>

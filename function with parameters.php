<?php

function address($companyname = "Please Enter ",$location = "Valid Location"){  //function 1 for address printing 


    echo $companyname . $location . "<br>";

}
address();
address("New Lahore City","Near Bahira Town Lahore");
address("Zaitoon City","Canal Bank Road Near Multan Road Lahore");
address("Zaitoon LifeStyle","Jia Baga Road Lahore");
function sum($a = 1,$b = 2){   //function 2 for Sum 
 echo $a + $b;

}
$one = 35;
$two = 20;
sum(12.25,125.20);

?>
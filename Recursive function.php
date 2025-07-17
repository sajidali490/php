<?php

function display($number){     //Recursive function 

    if($number <= 200){

        echo "$number <br>";
        display ($number + 6);
    }

}

//display(3);
function factorial ($n){   // factorial function
 if($n == 0){

    return 1;

 }else{

    return ($n * factorial($n - 1));
 }

 
}
echo factorial(20);


?>
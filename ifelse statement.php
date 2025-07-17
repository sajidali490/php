<?php

$per = 69;

if($per > 80 && $per <= 100){
    echo "1st Division";

}elseif($per >= 65 && $per < 75){
    echo "2rd Division";

}elseif($per >= 55 && $per < 60){
    echo "3rd Division";

}elseif($per <= 50){
    echo "Fail ";

}else{
    echo "Enter Vaild Per....";

}



?>
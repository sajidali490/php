<?php

/*$color =[
    "red",
    "green",
    "blue",
];
foreach($color as $sajid){

    echo $sajid . "<br>";
}
*/
$age = [

    "sajid" => 28,
    "Rauf" => 30,
    "Fahad" => 35,

];
echo "<ul>";
foreach($age as $key => $vlueprint){
    //echo $key . "=". $vlueprint . "<br>";
    echo "<li>$key =*=*=*= $vlueprint </li>";
}
echo "</ul>";

?>
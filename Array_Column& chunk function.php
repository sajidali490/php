<?php

$emp = [
    [
        "ID"=> '201',
        "First Name"=> 'Sajid',
        "Last Name"=> 'Ali',


    ],
    [
        "ID"=> '202',
        "First Name"=> 'Ali',
        "Last Name"=> 'Raza',


    ],
    [
        "ID"=> '203',
        "First Name"=> 'Muhammad ',
        "Last Name"=> 'Ali',


    ]

    ];

$newemp = array_column($emp,'First Name','ID');

echo "<pre>";
//print_r($newemp);
echo "</pre>";

$car = ["BMW","CITY","Cvic","Alto","Croula","Szuki"];

$newcar = array_chunk($car, 2);

echo "<pre>";
print_r($newcar);
echo "</pre>";


?>
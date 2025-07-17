<?php

$a = [
    "Bill"=> 10,
    "Joi"=> 20,
    "Pater"=> 30
];

$a1 =array_change_key_case($a, CASE_UPPER);
echo "<pre>";
print_r($a1);

echo "</pre>";



?>
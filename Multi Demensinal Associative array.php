<?php

$marks =[                    // Multidenisnal Associative Arrays 

"sajid" =>[
    "English"=>60,
    "Urud"=>60,
    "IT"=> 95,

],
"Ali" =>[
    "English"=>55,
    "Urud"=>65,
    "IT"=> 90,

],
"Hamza" =>[
    "English"=>57,
    "Urud"=>68,
    "IT"=> 80,

],
];
echo "<pre>";
print_r($marks);

"</pre>";
echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>"; // Table Formating 
echo "<tr> 
<th>Name</th>                       
<th>English</th>
<th>Urud</th>
<th>IT</th>


</tr>";

foreach($marks as $key => $v1){  //outer loop for Key Print
    echo "<tr>
    <td>$key </td>";
    foreach ($v1 as $v2){            //Iner loop for record print
        echo "<td>$v2</td>";
    }
    echo "</tr>";
}
echo "</table>";





?>

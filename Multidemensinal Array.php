<?php

$emp = [
 [1,"Sajid Ali","AM IT",60000],
 [2,"Rauf","Sr.IT Officer",65000],
 [3,"Fahad","IT Officer",42000],
 [4,"Tallah","IT Officer",40000],
];
echo "<pre>";
//print_r($emp);

echo "</pre>";
/*echo $emp[0][0]. " ";
echo $emp[0][1] . " ";
echo $emp[0][2] . " ";
echo $emp[0][3] . "";
echo "<br>";
echo $emp[1][0]. " ";
echo $emp[1][1] . " ";
echo $emp[1][2] . " ";
echo $emp[1][3] . "";
echo "<br>";
echo $emp[2][0]. " ";
echo $emp[2][1] . " ";
echo $emp[2][2] . " ";
echo $emp[2][3] . "";
*/


/*for($row = 0; $row <4; $row++){

    for($col = 0; $col< 4; $col++){

        echo $emp[$row][$col]. " ";
        
    }
    echo "<br>";
}
*/
echo "<table border = '2px' cellpadding = '5px' cellspacing= '0'>";
echo "<tr>
       <th>Number</th>
       <th>Name</th>
       <th>Desgination</th>
       <th>Salary</th>


 </tr>";
foreach ($emp as $v1){
echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>$v2 </td>";

    }
    echo "</tr>";
}
echo "</table>";
?>

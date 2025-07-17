<?php

$emp = [

    [1,"Sajid","AM IT",60000],
    [2,"Rauf","Sr. IT Officer",65000],
    [3,"Fahad","IT Officer",42000]

];


echo "<table border = '2px' cellpadding '5px' cellspacing = '0'>";  //Table 1
echo "<b>Table</b> 1";
echo "<tr>

<th>Number</th>
<th>Name</th>
<th>Designation</th>
<th>Salary</th>


</tr>";
foreach ($emp as list($no,$Name,$Designation,$Salary)){
   
echo "<tr><td>$no</td><td> $Name</td><td> $Designation</td><td> $Salary </td</tr>";



}

echo "</table> <br>";


$emp1= [
[
    "id" => 1,
    "Name"=>"Sajid",
    "Desgination" => "AM IT",
    "Salary"=> 60000,
],
[

    "id" => 2,
    "Name"=>"Rauf",
    "Desgination" => "Sr. IT Officer",
    "Salary"=> 55000,
],
[

    "id" => 3,
    "Name"=>"Fahad",
    "Desgination" => "IT Officer",
    "Salary"=> 42000,
],
];

echo "<table border = '2px' cellpadding '5px' cellspacing = '0' >";      //Table2
echo "<b>Table 2</b>";
echo "<tr>

<th>Number</th>
<th>Name</th>
<th>Designation</th>
<th>Salary</th>


</tr>";

foreach($emp1 as list("id"=> $id, "Name"=> $Name,"Desgination"=> $Designation,"Salary"=> $Salary)){


echo "<tr><td>$id</td><td> $Name</td><td> $Designation</td><td> $Salary </td</tr>";



}

echo "</table>";

?>
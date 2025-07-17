<?php
$food = ['Orange','Apple','Banana','Graps'];


echo "<b>Current :</b>" . current($food) . "<br>";
echo "<b>Key</b> :" . key($food) . "<br>";

next($food);
echo "<b>Current :</b>" . current($food) . "<br>";
echo "<b>Key</b> :" . key($food) . "<br>";

next($food);
echo "<b>Current :</b>". current($food) . "<br>";
echo "<b>Key</b> :" . key($food) . "<br>";

next($food);
echo "<b>Current :</b>" . current($food) . "<br>";
echo "<b>Key</b> :" . key($food) . "<br>";

prev($food);
echo "<b>Current :</b>" . current($food) . "<br>";
echo "<b>Key</b> :" . key($food) . "<br>";

prev($food);
echo "<b>Current :</b>" . current($food) . "<br>";
echo "<b>Key</b> :" . key($food) . "<br>";









?>
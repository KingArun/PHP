<?php

/*3) Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. 
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of seven lowest temperatures : 60, 62, 63, 63, 64 
List of seven highest temperatures : 76, 78, 79, 81, 85
*/

$temperature = "78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73";
$temp = explode(",",$temperature);
$total = 0;
$length = sizeof($temp);
foreach ($temp as $key) {
  $total = $total+$key;
}
$avg = $total/$length;
echo "Average Temperature is : "."$avg";
echo "<br>";
sort($temp);
echo"List of five lowest temperatures : ";
for($i=0;$i<5;$i++)
{
	echo "$temp[$i]".", ";
}
echo "<br>";
echo "List of five highest temperatures : ";
for($j=($length-5);$j<$length;$j++)
{
	echo "$temp[$j]".", ";
}
echo "<br>";
?>

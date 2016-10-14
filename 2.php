<?php
/*2) Write a PHP script to sort the following associative array : 
array("Ram"=>"99","Abhinav"=>"141","Messi"=>"10","Ronaldo"=>"7") in 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
*/

echo "a)";
echo "<br><br>";
$a = array("Ram" =>"99" ,"Abhinav" =>"141","Messi" =>"10","Ronaldo" =>"7" );
asort($a);
foreach ($a as $k => $v) {
	echo "$k"."=>"."$v";
	echo "<br>";
}

echo "<br><br>";
echo "b)";
echo "<br><br>";
$b = array("Ram" =>"99" ,"Abhinav" =>"141","Messi" =>"10","Ronaldo" =>"7" );
ksort($b);
foreach ($b as $k => $v) {
	echo "$k"."=>"."$v";
	echo "<br>";
}

echo "<br><br>";
echo "c)";
echo "<br><br>";
$c = array("Ram" =>"99" ,"Abhinav" =>"141","Messi" =>"10","Ronaldo" =>"7" );
arsort($c);
foreach ($c as $k => $v) {
	echo "$k"."=>"."$v";
	echo "<br>";
}

echo "<br><br>";
echo "d)";
echo "<br><br>";
$d = array("Ram" =>"99" ,"Abhinav" =>"141","Messi" =>"10","Ronaldo" =>"7" );
krsort($d);
foreach ($d as $k => $v) {
	echo "$k"."=>"."$v";
	echo "<br>";
}

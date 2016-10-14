<?php 

/* 6) Create a script to construct the following pattern, using a nested for loop. 

* 
* * 
* * * 
* * * * 
* * * * * 
* * * * * 
* * * * 
* * * 
* * 
*

*/

for($i=0;$i<5;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		echo "*";
	}
	echo "<br>";
}
for($i=5;$i>0;$i--)
{
	for($j=1;$j<=$i;$j++)
	{
		echo "*";
	}
	echo "<br>";
}
?>
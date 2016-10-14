<?php

/* 1)$color = array('white', 'green', 'red'') 
Write a PHP script which will display the colors in the following way : 

Output : (Format - html)

white, green, red,

1. green	
2. red
3. white   

where 1,2,3 is a sorted list in HTML .
*/


$color = array('white','green','red');
foreach ($color as $color1) {
	echo "$color1, ";
}
sort($color);
echo "<ul>";
foreach ($color as $color2) {
	echo "<li>$color2</li>";
}
echo "</ul>";
echo "<br>";
?>

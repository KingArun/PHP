<?php 
/*14) Write a PHP script to print the next character of a specific character.
Sample character : 'a' 
Expected Output : 'b'
Sample character : 'z' 
Expected Output : 'a' 
*/

$s = $_POST["String"];
$temp = ++$s;
//if(strlen($temp)>1)
	//$temp = $temp[0];
echo "The next character is "."<strong>"."$temp"."</strong>";
?>
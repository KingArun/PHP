<?php 
/*12) Write a PHP script to check if a string contains specific string? 
Sample string : 'The quick brown fox jumps over the lazy dog.'
Check whether the said string contains the string 'jumps'.
*/

$str = $_POST["String"];
$str1 = $_POST["String1"];
if(strpos($str,$str1) != 0)
	echo "$str1"." is present in the given the string.";
else
	echo "$str1"." is not present in the given the string.";
?>
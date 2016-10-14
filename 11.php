<?php 
/*11)Write a PHP function that checks whether a passed string is palindrome or not? 
A palindrome is word, phrase, or sequence that reads the same backward as forward, e.g., madam
*/
$str = $_POST["String"];
function palindrome($s)
{
	if($s==strrev($s))
		echo "The entered string is a palindrome"."<br>";
	else
		echo "The entered string is not a palindrome"."<br>";
}
echo palindrome($str);
?>
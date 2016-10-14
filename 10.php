<?php 
//10) Write a PHP function that checks if a string is all lower case

$str = $_POST["String"];
function lowercase($s)
{
	$length = strlen($s);
 	if($length!=0)
 	{
 		$temp = strtolower($s);
 		if($s==$temp)
 		echo "The string is in lowercase"."<br>";
 		else
 		echo "The string is not in lowercase"."<br>";
 	}
    else
    	echo "No string entered"."<br>";
}
$v=lowercase($str);
?>
<?php

/*4) Write a PHP script to get the shortest/longest string length from an array.
Sample arrays : ("abcd","abc","de","hjjj","g","wer")
Expected Output : The shortest array length is 1. The longest array length is 4.
*/

$str = array("abcd","abc","de","hjjj","g","wer");
$s = array_map("strlen", $str);
echo "The shortest string length is ".min($s)."."."<br>";
echo "The longest string length is ".max($s).".";
?>
<?php 
/*13) Write a PHP script to generate simple random password [do not use rand() function] from a given string.
Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
Note : Password length may be 6, 7, 8 etc.
*/
$s = $_POST["String"];
$len = $_POST["String1"];
$passwd = substr(str_shuffle($s),0,$len);
echo "Random password : "."$passwd";
?>
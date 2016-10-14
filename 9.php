<?php 
//9) Write a function to reverse a string

$str = $_POST["String"];
function reverse($s)
{
$length = strlen($s);
if($length==1)
	return $s;
else if($length==0)
    {
    	echo "No string entered"."<br>";
        echo exit(0);

    }
else
{
	$length--;
	return reverse(substr($s,1,$length)).substr($s,0,1);
}
}
echo "Reverse of "."$str"." is : ".reverse("$str");
?>
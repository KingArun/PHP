<?php 

//8) Write a function to calculate the factorial of a number (non-negative integer). The function accept the number as a argument
$no = $_POST["number"];
$n = $no;
function factorial($n)
{
	if($n==0)
		return 1;
	else
	{
		return $n*factorial($n-1);
	}
	}
	echo "Factorial of "."$no"." is : ".factorial($no);
	?>
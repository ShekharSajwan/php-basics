<?php
$num1=23;
$num2=11;

function checkGlobalVal()
{
	GLOBAL $num1,$num2;
	$result=$num2+$num1;
	return $result;	 
}

$result=checkGlobalVal();
echo "addition is = $result";






?>
<?php

function odd($var)
{
	return $var & 1;
}

function even($var)
{
	return ! ($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => null];

$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array1, "strlen"));
// echo "Even :\n";
// print_r(array_filter($array2, "even"));

?>
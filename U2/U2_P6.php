
<!-- 
Create an array with 5 elements. Find and display 
minimum and maximum value from the array.  

-->
<?php
	$number = [15,45,7,23,89];
	
	$min = min($number);
	$max = max($number);
	
	echo "Array Elements are: <br>";
	//arry   display karthhe
	foreach ($number as $num)
	{
		echo "$num<br>";
	}
	echo "Maximum = $max<br>";
	echo "Minimum = $min<br>";
?>
<?php

$st=[10,20,99,10];

$min=min($st);
$max=max($st);

foreach($st as $a)
{

echo "$a";

}

echo "max $max";
echo "min $min";



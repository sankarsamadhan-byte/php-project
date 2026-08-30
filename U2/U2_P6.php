<?php
	$number = [15,45,7,23,89];
	
	$min = min($number);
	$max = max($number);
	
	echo "Array Elements are: <br>";
	foreach ($number as $num)
	{
		echo "$num<br>";
	}
	echo "Maximum = $max<br>";
	echo "Minimum = $min<br>";
?>
<?php
	$stu=[
		["Ap","Ahmedabad","9978891370"],
		["Hp","Ahmedabad","9328422535"],
		["Dk","Amreli","9879789098"],
		["Jp","Ahmedabad","8234567854"]
	];
	
	foreach($stu as $x)
	{
		foreach($x as $y)
		{
			echo "$y ";
		}
		echo "<br>";
	}
?>
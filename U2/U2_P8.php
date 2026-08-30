<?php
	$planet = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Neptune"];
	echo "<h3>Array of Planet:: </h3><br>";
	foreach($planet as $p)
	{
		echo "$p<br>";
	}
	
	$find1 = "Earth";
	echo "<br>Planet to be found:: $find1<br>";
	
	//Check whether array element is present or not
	if(in_array($find1, $planet))
		echo "<h3> $find1 exists in the array of Planets. </h3>";
	else 
		echo "<h3> $find1 does not exists in the array of Planet. </h3>";

	$find2 = "Pluto";
	echo "Planet to be found:: $find1<br>";
	
	//Check whether array element is present or not
	if(in_array($find2, $planet))
		echo "<h3> $find2 exists in the array of Planets. </h3>";
	else 
		echo "<h3> $find2 does not exists in the array of Planet. </h3>";
?>
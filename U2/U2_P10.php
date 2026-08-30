<?php
	$sub = ["PHP", "DBMS", "JAVA", "C", "PYTHON"];
	
	echo "Printing using foreach loop: <br>";
	foreach($sub as $s)
	{
		echo "$s <br>";	
	}
	
	echo "<br>Printing using for loop: <br>";
	for($i=0; $i<5; $i++)
	{
		echo "$sub[$i]<br>";
	}
?>
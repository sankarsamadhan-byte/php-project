<!-- 
 
Create an associative array and display its elements. 
-->

<?php
	$car = ["Brand" => "Ford", "Model" => "Mustang", "Year" => 1964];
	
	echo "<h4>Printing both key & value</h4><br>";
	foreach($car as $x=>$y)
		echo "$x=>$y<br>";
		
	echo "<br><h4>Printing only value</h4><br>";
	foreach($car as $c)
		echo "$c <br>";
?>
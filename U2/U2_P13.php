
<?php
	$num=[3, 1, 5, 2, 4];
	$len=count($num);

	echo "Original Order:: <br>";
	foreach($num as $a)
	{
		echo "$a ";
	}

	for($i=0; $i<$len; $i++)
	{
		for($j=0; $j<$len-1; $j++)
		{
			if($num[$j] > $num[$j+1])
			{
				$temp = $num[$j];
				$num[$j] = $num[$j+1];
				$num[$j+1] = $temp;
			}
		}
	}

	echo "<br>Ascending Order:: <br>";
	foreach($num as $a)
	{
		echo "$a ";
	}
	
	for($i=0; $i<$len; $i++)
	{
		for($j=0; $j<$len-1; $j++)
		{
			if($num[$j] < $num[$j+1])
			{
				$temp = $num[$j];
				$num[$j] = $num[$j+1];
				$num[$j+1] = $temp;
			}
		}
	}
	echo "<br>Descending Order:: <br>";
	foreach($num as $a)
	{
		echo "$a ";
	}
?>

<!-- 
&lt;?php
$numbers = [42, 15, 88, 7, 23];
echo &quot;&lt;h3&gt;Original Array:&lt;/h3&gt;&quot;;
echo implode(&quot;, &quot;, $numbers) . &quot;&lt;br&gt;&quot;;
// Sort in Ascending Order using sort()
$asc = $numbers;
sort($asc);
echo &quot;&lt;h3&gt;Ascending Order (sort):&lt;/h3&gt;&quot;;
echo implode(&quot;, &quot;, $asc) . &quot;&lt;br&gt;&quot;;
// Sort in Descending Order using rsort()
$desc = $numbers;
rsort($desc);
echo &quot;&lt;h3&gt;Descending Order (rsort):&lt;/h3&gt;&quot;;
echo implode(&quot;, &quot;, $desc) . &quot;&lt;br&gt;&quot;;
?&gt; -->
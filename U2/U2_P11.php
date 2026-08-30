<?php
	$std = ["Name: "=>"Ap ", " Id: "=>"101 ", " Sem: "=>5, " Marks: "=>305, " College: "=>" NGCCA "];
	foreach($std as $x=>$y)
		echo "$x = $y<br>";
		
	foreach($std as $key=>$value)
		echo "$std[$key]<br>";
?>
<!-- 
&lt;?php
// Associative array with 5 distinct keys
$student = [
&quot;Roll_No&quot; =&gt; 101,
&quot;Name&quot; =&gt; &quot;Sam&quot;,
&quot;Course&quot; =&gt; &quot;BCA&quot;,
&quot;Sem&quot; =&gt; 3,
&quot;Grade&quot; =&gt; &quot;A+&quot;
];
echo &quot;&lt;h3&gt;Accessing Student Record by Keys:&lt;/h3&gt;&quot;;
echo &quot;Roll No : &quot; . $student[&quot;Roll_No&quot;] . &quot;&lt;br&gt;&quot;;
echo &quot;Name : &quot; . $student[&quot;Name&quot;] . &quot;&lt;br&gt;&quot;;
echo &quot;Course : &quot; . $student[&quot;Course&quot;] . &quot;&lt;br&gt;&quot;;
echo &quot;Semester : &quot; . $student[&quot;Sem&quot;] . &quot;&lt;br&gt;&quot;;
echo &quot;Grade : &quot; . $student[&quot;Grade&quot;] . &quot;&lt;br&gt;&quot;;
?&gt; -->
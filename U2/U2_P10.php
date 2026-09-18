<!-- 
 Create an array named $sub, assign five elements to it 
and display the elements assigned using for loop and 
foreach statement  -->
<?php

$sub = ["PHP", "DBMS", "JAVA", "C", "PYTHON"];

echo "Printing using foreach loop: <br>";

foreach($sub as $s)
{
    echo "$s <br>";
}

echo "<br>Printing using for loop: <br>";

for($i=0; $i<count($sub); $i++)
{
    echo "$sub[$i]<br>";
}


?>

for($i=0;)
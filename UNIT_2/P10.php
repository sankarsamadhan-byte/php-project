<?php

$sub = ["PHP","IS","PYTHON","MATHS","SADD"];
echo "<b>Array using for loop<br><br></b>";
for($i = 0; $i < 5; $i++)
{
    echo "$sub[$i] <br>";
}

echo "<br><b>Array using foreach loop<br><br></b>";
foreach($sub as $s)
{
    echo "$s <br>";
}

/*
Array using for loop

PHP
IS
PYTHON
MATHS
SADD

Array using foreach loop

PHP
IS
PYTHON
MATHS
SADD
*/

?>
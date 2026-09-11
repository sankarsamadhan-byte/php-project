<?php

$numbers = [10, 20, 10, 30, 10, 40, 20];

$find = 10;
$count = 0;

foreach($numbers as $value)
{
    if($value == $find)
    {
        $count++;
    }
}



echo "Array:   diaply ";
foreach($numbers as $value)
{
    echo $value . " ";
}


echo "Total number of times $find appears: $count";

?>
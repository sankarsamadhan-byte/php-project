<?php

$arr=[1,2,2,2,3,4,5];

foreach($arr as $a)
    {
        echo "$a<br>";
    }


    $uniq=array_unique($arr);
    
    foreach($uniq as $e)
        {
            echo "$e<br>";
        }



?>
<?php

function sum($num)
{

$sum=0;

$dig=str_split($num);

foreach($dig as $x)
    {
        $sum=$sum+$x;

    }
    return $sum;

}
if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $pass=$_post["n1"];
        $see=sumkro($pass)
        echo "sum is the  $see he ";


    }


?>
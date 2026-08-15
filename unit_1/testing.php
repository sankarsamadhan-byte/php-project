<?php

function isprime($n1,$n2,$n3)
{

if($n1<0||$n2<0||$n3<0)
    {

        echo ="NEgative value  not  alloed";
        return;


    }

if($n1==0||$n2==0||$n3==0)
    {
        echo "o is not  alloed";
        return;
    }

$sum=$n1+$n2+$n3;
echo "sum is the $sum";


if($sum<2)
    {
        echo"this is not  prime;
    }


for(i=2;$i<=$sum;i++)
{
if($sum%i==0)
{
echo "this is not  pime";
return;
    }
    }
    echo "this is   prime numebr ";"

}




if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $n1=$_POST["n"];
        $n2=$_POST["n1"];
        $n3=$_POST["n2"];
isprime($n1,$n2,$n3);


    }
<?php
echo "<body style='background-color:gray;'>";

function primeis($a,$b,$c)
{

if($a < 0 || $b < 0 || $c < 0)
{
    echo "Negative values are not allowed.";
    return;
}

if($a == 0 || $b == 0 || $c == 0)
{
    echo "0 is not allowed.";
    return;
}
    
    

    $sum=$a+$b+$c;
    echo"sum is $sum ";

for($i=2;$i<=sqrt($sum);$i++)
    {
        if($sum%$i==0)
            {
                echo "this is  not prim numebr";
                return;
            }
    }
    echo "this is is  prie numebr";

}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {


$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$_POST["n3"];

primeis($n1,$n2,$n3);
    } -->

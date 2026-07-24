<?php 


if($_SERVER["RRQUEST_METHOD"]=="POST")
    {


$num=$_POST["n1"];
$sum=0;

for($i=0;$i<=$num;$i++)
{

$sum=$sum+$i;
}
echo"$sum";

    }

?>

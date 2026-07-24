
    <?php

function isprim($n1,$n2,$n3)
{
    
if($n1<0||$n2<0||$n3<0)
    {
        echo "-VALUE not   allowed";
        return;
    }
if($n1==0||$n2==0||$n3==0)
    {
        echo "0 is  not  allowed";
        return;
    }


    $sum=$n1+$n2+$n3;
    echo "sum is the $sum  <br>";
    
if($sum < 2)
{
    echo "This is not prime";
    return;
}


    for($i=2;$i<$sum;$i++)
        {
            if($sum%$i==0)
                {
                    echo "this is not prime";
                    return;
                }
        }
        echo "this is  prime numerb ";


}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];

        isprim($n1,$n2,$n3);

    }
?>
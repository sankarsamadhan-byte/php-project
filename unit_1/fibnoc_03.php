<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">

Enter the  numebr :<input type="number" name="num"><br><br>

<input type="submit" value="sum">


</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $n=$_POST["num"];

        $a=0;
        $b=1;


        //$a=0;
        //$b=1;
        echo "Fib sere";

        // while($a<=$n)
        //     {
        //         echo $a."";
        //         $c=$a+$b;
        //         $a=$b;
        //         $b=$c;
        //     }
        // for($i=0;$a<=$n;$i++)
        //     {
        //         echo $a."";
        //         $c=$a+$b;
        //         $a=$b;
        //         $b=$c;
        //     }

for($i=0;$a<=$n;$i++)
{
echo $a."";
$c=$a+$b;
$a=$b;
$b=$c;


}
        }
?>



    
</body>
</html>
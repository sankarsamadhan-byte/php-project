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

        echo"<h1>answer is </h1>";

        echo $a." ".$b."";

        for($i=3;$i<=$n;$i++)
            {

            $c=$a+$b;
            echo $c." ";
            $a=$b;
            $b=$c;


            }


    }



?>



    
</body>
</html>
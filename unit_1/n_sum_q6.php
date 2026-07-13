<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num">

        <input type="submit" value="sum">

    </form>

    <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $n=$_POST["num"];
        $sum=0;
        for($i=1;$i<=$n;$i++)
            {
                $sum=$sum+$i;
            }
            echo("sum is <b>$sum</b>nekn");
//code    is   complterrd   just  check  the   outpur 

    }


?>
</body>
</html>

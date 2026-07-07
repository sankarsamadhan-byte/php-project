<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">

        <label>Enter the 1 Numebr </label>
        <input type="number" name="num1"><br><br>

        <label>Enter the 2num </label>
        <input type="number" name="num2"><br><br>

        <input type="submit" value="submit">


    </form>

    <!-- <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $a = $_POST["num1"];
        $b = $_POST["num2"];


        if ($a > $b) {
            $max = $a;
            $min = $b;
        }
        elseif($b>$a)
        {
            $max = $b;
            $min = $a;
        }
        else
            {

                    echo"<h1>bot  numebr   are  SAME </h1>";
                    exit();
            }

        echo "<h1>MAxmin  numr  is  <b>$max</b></h1>";

        echo "<h1>Minum  nu  s  <b>$min</b></h1>";
    }




    ?> -->



<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $a = $_POST["num1"];
    $b = $_POST["num2"];

    if($a > $b)
    {
        echo "<p>Maximum Number is <b>$a</b></p>";
        echo "<p>Minimum Number is <b>$b</b></p>";
    }
    else
    {
        echo "<p>Maximum Number is <b>$b</b></p>";
        echo "<p>Minimum Number is <b>$a</b></p>";
    }
}

?>

</body>

</html>
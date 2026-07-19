<!-- <!DOCTYPE html>
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
 <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $a1=$_POST["num1"];
        $a2=$_POST["num2"];

        if($a1>$a2)
            {
                echo "MAX  numebr $a1";
            }
        elseif($a1<$a2)
            {
                echo"MAx  numb is  $a2";
            }
            else
                {
                    echo "Both  numebr are same ";
                }


    }




?>

</body>

</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Maximum and Minimum</title>
</head>
<body>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" value="Find">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if($num1>$num2)
        {
            echo "MAx numebr  $num1  <br>";
            echo "MIN numebr  $num2 <br>";
        }
        elseif($num1<$num2)
            {
                echo "Mx numebr is  $num2 <br>";
                echo  "MIN numebr is  $num1 <br>";
            }
            else
                echo"Both ae   asme";
}
?>

</body>
</html>
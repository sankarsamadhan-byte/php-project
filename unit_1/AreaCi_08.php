<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5160</title>
</head>
<body>

<form method="POST">

Enter the vlaue<input type="number" name="n1">
<input type="submit" value="sub">

</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {


    $read=$_POST["n1"];

$ans=3.14*$read*$read;

echo date("d-m-Y")."<br>";

echo "Area of  cielr  is $ans";



    }



?>




</body>
</html>
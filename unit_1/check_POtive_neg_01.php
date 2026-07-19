<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>check  the  numebr  postive   Neg   or   0 </h2>


<form  method="POST">


<input  type="Number" name="n1" value="sub">

<input type="submit" name="sub" value="sub">
    
</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $num=$_POST["n1"];
        if($num>0)
            {
                echo "<p> this is   $num  is  + numebr </p>";
            }
        elseif($num<0)
            {
                echo"this is   -  numerb  $num";
            }
            else
                {
                    echo "this is  0  numebr $num  is ";
                }
    }

?>


</body>
</html>
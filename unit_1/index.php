<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form method="POST">

 Enter number:<input type="number" name="num">

 <input type="submit" value="submit">
 </form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $num=$_POST["num"];
    
    
    
    if($num<0)
        {
            echo "<h1>Numebr is  negrative <b>$num</b></h1>";
        }
    elseif($num>0)
        {
            echo"<h1>numbe ris   posive<b>$num</b></h1>";
        }
        else
            {
                echo "<h1> this is   0 <b>$num</b></h1>";
            }

    
    
    
    
        }


?>


    
</body>
</html>
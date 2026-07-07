<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
<input type="text" name="str">

<input type="submit" value="sub">



    </form>

    <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $str=$_POST["str"];

        if($str==strrev($str))
            {
                echo"<h2>yep plaidrpm </h2>";
            }
            else
                {
                    echo "<h2>not  plaidend</h2>";
                }

    }



?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

<input type="number" name="sum">
<input type="submit" name="sub">


    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
        {

            $n=$_POST["sum"];

            $squre=$n*$n;
            $cube=$n*$n*$n;
            echo"<h2>suqre $squre </h2>";
            echo "<h2>cube $cube </h2>";

        }



?>
    
</body>
</html>
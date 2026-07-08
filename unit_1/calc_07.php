<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST">
        Enter the 1  numebr<input type="number" name="n1"><br>
        Enter the   2  number<input type="number" name="n2">
        <input type="submit" value="submit">




    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
        {

                $num=$_POST["n1"];
                $num1=$_POST["n2"];


            $add=$num+$num1;
            $sub=$num-$num1;
            $mul=$num*$num1;

            echo "<h3>answer is  the </h3>";

            echo "Addtion  is  the  $add <br><br>";
            echo "subtsction  is  the  $sub <br>";
            echo "Multiplicatio  is  the $mul <br>";

        }



?>
    
</body>
</html>
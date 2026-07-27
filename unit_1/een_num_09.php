<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
Enter the  number:<input type="number" name="num">
<input type="submit" value="sub">
</form>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {

    $num=$_POST["num"];

    for($i=2;$i<=$num;$i=$i+2)
        {
                echo $i ."<br>";

        }
    }
?>
</body>
</html>
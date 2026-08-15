<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="n1">
        <input type="submit" value="sub">
        
    </form>
    <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $n1=$_POST['n1'];
        for($i=2;$i<=$n1;$i=$i+2)
            {
                echo $i."<br>";
            }
    }

?>
    
</body>
</html>
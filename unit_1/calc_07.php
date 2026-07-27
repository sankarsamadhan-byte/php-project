<html>
<head>
<title>5160</title>
</head>
<body>
    <form method="POST">
Enter the numebr 1:<input type="number" name="n1"><br>
Enter the  numebr 2:<input type="number" name="n2">
<input type="submit" value="sub">
</form>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];

    $add=$n1+$n2;
    $sub=$n1-$n2;
    $mul=$n1*$n2;

    echo "Addtion  of numerbs $add <br>";
    echo "Substraction of numebr $sub <br>";
    echo "mutiplication of numebr  $mul <br>" ;
}
?>
</body>
</html>
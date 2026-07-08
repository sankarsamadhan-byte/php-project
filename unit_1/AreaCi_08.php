
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
Enter the Radios:<input type="number" name="n1" required>

<input type="submit" value="sub">




</form>    
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {

$rad=$_POST["n1"];

$are=3.14*$rad*$rad;

echo "<h1>REsult is </h1>";

echo "Area of  cirec =",$are;
    }



?>



</body>
</html>
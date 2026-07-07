<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
</head>
<body>
  
<h2>  Give the   Squre and  Cube   of   Enter   Numebr </h2>

 <form  method="POST">

 <input type="Numebr" name="sub" value="sub">

<input type="submit" name="sub" value="sub">
    
</from>



</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")

    {

    $ans=$_POST["sub"];

    $sque= $ans*$ans;
    echo "this is   squre  of <b>$sque</b>";
 
    }

?>
</body>
</html>
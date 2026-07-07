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


<input  type="Number" name="sub" value="sub">

<input type="submit" name="sub" value="sub">
    
</from>



<?php
if($_SERVER["REQUEST_METHOD"]=="POST")

    {

    $ans=$_POST["sub"];

        if($ans>0)
        {
            echo "<p> this is  <b>$ans</b> Postive  numebr  </p>" ;
         
        }
        elseif ($ans<0)        {
            echo"<p> this is  <b> $ans </b>  Neg  naum </p>";

        }
                
        else
            {
            echo "<p>  thisd si  numebr is   <b> $ans</b></p>";
            }
    }



?>
</body>
</html>
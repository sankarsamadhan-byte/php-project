<!-- Write a PHP script to set a cookie 
 named "username" with 
the value "Welcome" with an expiration 
time of one hour 
and display its value.  -->

<?php

setcookie("SAM","I AM DELVER",time()+3);

if(isset($_COOKIE["SAM"]))
    echo "<p>COKI  VALUE ".$_COOKIE["SAM"]."</p>";

else
    echo "<p> Coki not   fount </p>";
?>
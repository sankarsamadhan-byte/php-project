<!-- 
 Write a PHP script to check if a cookie 
 named "visited" 
exists. If it does, display a welcome message; 
otherwise, 
display a default message.  -->


<?php
    if(isset($_COOKIE["visited"]))
    {
        echo "Welcome ".$_COOKIE["visited"];
    }
    else
    {
        setcookie("visited", "admin", time() + 3600);
        echo "This is your first visit... Cookie doesn't exists";
    }

?>
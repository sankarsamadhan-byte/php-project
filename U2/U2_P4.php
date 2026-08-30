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
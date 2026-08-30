<?php

setcookie("SAM","I AM DEVLPER",time()+3);


if(isset($_COOKIE["SAM"]))
    echo "<p?>COKI  value ".$_COOKIE["SAM"]."</p>";

else
    echo "<p> cooki is not  fiun </p>";

?>
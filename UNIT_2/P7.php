<?php
    $arr = [1,2,1,3,1,4,5,1];

    echo "Array of numbers are...<br>";

    foreach($arr as $a)
    {
        echo "$a <br>";
    }

    $uni = array_unique($arr);

    echo "<br>Array after filtering<br>";

    foreach($uni as $u)
    {
        echo "$u <br>";
    }
?>
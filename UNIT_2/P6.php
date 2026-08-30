<?php
    $arr = [15,42,7,23,89];

    $min = min($arr);
    $max = max($arr);

    echo "Array of numbers are...<br>";

    foreach($arr as $a)
    {
        echo "$a <br>";
    }

    echo "<br> Minimum number is: <b> $min </b> <br>";
    echo "Maximum number is: <b> $max </b> <br>";
?>
<?php
    $planets = ["Mercury","Jupiter","Venus","Mars","Earth","Neptune","Saturn","Uranus"];

    $find = "Pluto";

    echo "Array of planets are...<br>";

    foreach($planets as $p)
    {
        echo "$p <br>";
    }

    if(in_array($find,$planets))
    {
        echo "<br><b>$find</b> is exist in the array of planets.";
    }
    else{
        echo "<br><b>$find</b> is not exist in the array of planets.";
    }
?>
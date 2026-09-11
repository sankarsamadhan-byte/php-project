<?php

function con()
{
    $s1 = "HEllo";
    $s2 = "SAM";

    echo "Non PR function: " . $s1 . " " . $s2 . "<br>";
}

function conpr($s1, $s2)
{
    echo "PR function: " . $s1 . " " . $s2 . "<br>";
}

con();

conpr("sam", "coder");

?>
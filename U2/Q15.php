<?php

// Non-parameterized function
function concatenate()
{
    $str1 = "Hello ";
    $str2 = "World";
    echo "Non-Parameterized: " . $str1 . $str2;
}

// Parameterized function
function concatenateWithParameter($str1, $str2)
{
    echo "<br>Parameterized: " . $str1 . $str2;
}

// Function calls
concatenate();

concatenateWithParameter("Good ", "Morning");

?>
<?php
    //Create an array with 5 element and print all array 

    $arr1 = [11,"Hello",12,13,14,"PHP"];
    echo "<b>Your Index array is</b> <br><br>";
    print_r($arr1);
    echo "<br><br>";

    echo "<b>Your Index array using foreach loop is</b> <br><br>";
    foreach($arr1 as $a)
    {
        echo "$a <br>";
    }

/*
Your Index array is

Array ( [0] => 11 [1] => Hello [2] => 12 [3] => 13 [4] => 14 [5] => PHP )

Your Index array using foreach loop is

11
Hello
12
13
14
PHP
*/

?>

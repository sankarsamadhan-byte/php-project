<?php
    $intro = ["Name"=>"Leena","City"=>"Ahmedabad","M_No."=>1234567890,"Email"=>"abc@gmail.com"];
    echo "<b>Your Associative array is </b><br><br>";
    print_r($intro);

    echo "<br><br>";

    echo "<b>Your Associative array using foreach loop is</b> <br><br>";
    foreach($intro as $i=>$j)
    {
        echo "$i=>$j <br>";
    }

/*
Your Associative array is

Array ( [Name] => Leena [City] => Ahmedabad [M_No.] => 1234567890 [Email] => abc@gmail.com )

Your Associative array using foreach loop is

Name=>Leena
City=>Ahmedabad
M_No.=>1234567890
Email=>abc@gmail.com
*/

?>
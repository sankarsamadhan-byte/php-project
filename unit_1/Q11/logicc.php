<?php

echo "<body style='background-color:beige;'>";

function sumkaro($num)
{
    $sum = 0;

    $dig = str_split($num);

    foreach($dig as $sam)
    {
        $sum = $sum + $sam;
    }

    return $sum;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $pass = $_POST['n1'];

    $see = sumkaro($pass);

    echo "Sum of Digits = $see";
}

?>
<?php

function sumOfDigits($num)
{
    $sum = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $sum = $sum + $digit;
        $num = (int)($num / 10);
    }

    return $sum;
}

$number = $_POST['num'];

echo "Sum of Digits = " . sumOfDigits($number);

?>
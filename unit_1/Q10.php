<?php

function checkPrime($a, $b, $c)
{
    $sum = $a + $b + $c;

    echo "Sum = $sum <br>";

    if ($sum < 2) {
        echo "Sum is Not Prime";
        return;
    }

    for ($i = 2; $i <= sqrt($sum); $i++) {
        if ($sum % $i == 0) {
            echo "Sum is Not Prime";
            return;
        }
    }

    echo "Sum is Prime";
}

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

checkPrime($n1, $n2, $n3);

?>
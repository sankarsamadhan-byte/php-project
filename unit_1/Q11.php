<!-- <?php

$num = $_POST['num'];
$sum = 0;

for($i = 0; $i < strlen($num); $i++)
{
    $sum = $sum + $num[$i];
}

echo "Sum of Digits = " . $sum;

?> -->

<?php

$num = $_POST['num'];
$sum = 0;

for($i = 1; $i <= $num; $i++)
{
    $sum = $sum + $i;
}

echo "Sum = " . $sum;

?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Maximum Number</title>
</head>
<body>
  <form method="POST">
        Enter First Number:
        <input type="number" name="n1"><br><br>
     Enter Second Number:
        <input type="number" name="n2"><br><br>
        <input type="submit" value="Find Maximum">
    </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if ($n1 > $n2) {
            echo "Maximum Number = $n1";
        } elseif ($n2 > $n1) {
            echo "Maximum Number = $n2";
        } else {
            echo "Both numbers are equal.";
        }    }
    ?>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Maximum and Minimum Number</title>
</head>
<body>

<form method="POST">

    Enter First Number:
    <input type="number" name="n1"><br><br>

    Enter Second Number:
    <input type="number" name="n2"><br><br>

    <input type="submit" value="Find">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if($n1 > $n2)
    {
        echo "Maximum Number = $n1 <br>";
        echo "Minimum Number = $n2";
    }
    elseif($n2 > $n1)
    {
        echo "Maximum Number = $n2 <br>";
        echo "Minimum Number = $n1";
    }
    else
    {
        echo "Both numbers are equal.";
    }
}

?>

</body>
</html>
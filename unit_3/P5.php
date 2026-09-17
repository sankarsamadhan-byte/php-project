
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form method="POST">

    Enter ID:
    <input type="number" name="id">
    <br><br>

    Enter the product Rate:
    <input type="number" name="rate">
    <br><br>

    <input type="submit" name="submit" value="Update">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST["id"];
    $rate = $_POST["rate"];

    $sam = new mysqli("localhost", "root", "", "piku");

    $get = "SELECT * FROM Q5D WHERE pro_id='$id'";

    $asn = $sam->query($get);

    $row = mysqli_num_rows($asn);

    if ($row > 0)
    {
        // Calculate 5% increase
        $increase = $rate * 5 / 100;

        // Calculate new rate
        $newrate = $rate + $increase;

        // Update new rate in database
        $sql = "UPDATE Q5D SET price='$newrate'
                WHERE pro_id='$id'";

        $sam->query($sql);

        echo "<br>Record Updated";
        echo "<br>Old Rate: " . $rate;
        echo "<br>5% Increase: " . $increase;
        echo "<br>New Rate: " . $newrate;
    }
    else
    {
        echo "<br>Product with <b>" . $id . "</b> is not found.";
    }

    $sam->close();
}

?>

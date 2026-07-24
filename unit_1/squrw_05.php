<!DOCTYPE html>
<html lang="en">

<head>
    <title>5160</title>
</head>

<body>
    <h2> Give the Squre and Cube of Enter Numebr </h2>
    <form method="POST">

        <input type="number" name="n1">
        <input type="submit" name="sub" value="sub">
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $ans = $_POST["n1"];

        $sque = $ans * $ans;
        $cube = $ans * $ans * $ans;
        echo "this is   squre  of <b>$sque</b>";
        echo "this is  cube  of  $cube numebr ";
    }

    ?>
</body>

</html>
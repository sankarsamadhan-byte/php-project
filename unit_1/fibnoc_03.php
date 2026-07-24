<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="numebr" name="n1">
        <input type="submit" name="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n1"];
        $a = 0;
        $b = 1;
        for ($i = 0; $a <= $n; $i++) {
            echo $a . "";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }
    ?>
</body>
</html>
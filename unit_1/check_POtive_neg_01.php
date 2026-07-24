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
        <input type="submit" value="subm">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['n1'];

        if ($num > 0) {
            echo "this is postive numebr";
        } elseif ($num < 0) {
            echo    "this is  negtive umevr";
        } else {
            echo "this is Zero numebr";
        }
    }
    ?>
</body>
</html>

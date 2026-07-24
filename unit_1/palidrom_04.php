<!DOCTYPE html>
<html lang="en">
<head>
     <title>5160</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="str">
        <input type="submit" value="sub">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        if ($str == strrev($str)) {
            echo "<h2> $str yep plaidrpm </h2>";
        } else {
            echo "<h2>  not  plaidend</h2>";
        }
    }
    ?>
</body>
</html>
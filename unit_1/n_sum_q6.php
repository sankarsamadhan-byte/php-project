<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num">
        <input type="submit" value="sum">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
        echo "Today's Date: " . date("d/m/Y") . "<br>"; 

        $n = $_POST["num"];
        $sum = 0;
        for ($i = 0; $i <= $n; $i++) {
            $sum = $sum + $i;
        }
        echo ("sum is <b>$sum</b>nekn");
        //code    is   complterrd   just  check  the   outpur 

    }
?>
</body>

</html>
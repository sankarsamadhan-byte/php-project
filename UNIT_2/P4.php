<!DOCTYPE html>
<html>
    <head>
        <title>print cookies</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE["visited"]))
            {
                echo "Welcome ".$_COOKIE["visited"];
            }
            else
            {
                setcookie("visited","Leena",time() +3600);
                echo "<p>Cookie is not set yet.</p>";
            }
        ?>
    </body>
</html>
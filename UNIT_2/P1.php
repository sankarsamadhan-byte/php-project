<!DOCTYPE html>
<html>
    <head>
        <title>create cookies</title>
    </head>
    <body>
        <?php
            setcookie("username","Welcome",time()+3600);

            if(isset($_COOKIE["username"]))
            {
                echo "<p>Cookie value:".$_COOKIE["username"]."</p>";
            }
            else
            {
                echo "<p>Cookie is not yet.</p>";
            }
        ?>
    </body>
</html>
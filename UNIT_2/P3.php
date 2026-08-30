<!DOCTYPE html>
<html>
    <head>
        <title>print cookies</title>
    </head>
    <body>
        <?php
            session_start();

            $id = session_id();
            echo "Session ID:".$id;

            $_SESSION["Session_id"] = 1111;
            echo "<br>Your session id is:".$_SESSION["Session_id"];

            $_SESSION["loginid"] = 5104;
            echo "<br>Your Login id is:".$_SESSION["loginid"];


            if(isset($_SESSION["counter"]))
            {
                $_SESSION["counter"] += 1;
            }
            else
            {
                $_SESSION["counter"] = 1;
            }
            echo "<br>Number of visit in this session:".$_SESSION["counter"];
        ?>
        //destroy the session_abort
        //session_destroy();
    </body>
</html>
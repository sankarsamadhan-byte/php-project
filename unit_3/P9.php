<!DOCTYPE html>
<html>
    <head>
        <title>update</title>
    </head>
    <body>
        <?php
            $conn = new mysqli("localhost","root","","my_db");
            echo "Connected successfully.";
            
            $sql = "ALTER TABLE student ADD COLUMN (STUD_ADD VARCHAR(20))";
            $conn->query($sql);
            echo "<br>Column created successfully.";

            $sql = "UPDATE student SET STUD_ADD = 'AHMEDABAD' WHERE STUD_ID = 13";
            $conn->query($sql);
            echo "<br>Record updated successfully."; 

            $conn -> close();
        ?>
    </body>
</html>
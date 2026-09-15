<!DOCTYPE html>
<html>
    <head>
        <title>insert data</title>
    </head>
    <body>
        <h2>Insert Student Deatils</h2>

        <form method="POST">
            Enter Student ID:
            <input type = "number" name = "id" required>
            <br><br>
            Enter Student Name:
            <input type = "text" name = "name" required>
            <br><br>
            Enter Your Course:
            <input type = "text" name = "course" required>
            <br><br>
            Enter Your Age:
            <input type = "number" name = "age" required>
            <br><br>
            Enter Your Mobile Number:
            <input type = "number" name = "mno" required>
            <br><br>
            <input type = "submit" name = "submit" value = "Insert" required>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $course = $_POST['course'];
                $age = $_POST['age'];
                $mno = $_POST['mno'];

                $conn = new mysqli("localhost","root","","MY_DB");
                echo "<br>Connected successfully";

                $sql = "INSERT INTO STUDENT
                        (STUD_ID, STUD_NAME, COURSE, AGE, MOBILE_NO)
                        VALUES('$id','$name','$course','$age','$mno')
                        ";
                        
                $conn -> query($sql);
                echo "<br>one record inserted successfully";

                $conn -> close();
            }
        ?>
    </body>
</html>
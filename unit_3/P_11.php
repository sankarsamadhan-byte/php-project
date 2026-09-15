<!DOCTYPE html>
<html>
    <head>
        <title>insert data</title>
    </head>
    <body>
        <h2>Insert Students Deatils</h2>

        <form method="POST">
            Enter Student ID:
            <input type = "number" name = "stud_id" required>
            <br><br>
            Enter Student Name:
            <input type = "text" name = "stud_name" required>
            <br><br>
            Enter Course ID:
            <input type = "number" name = "course_id" required>
            <br><br>
            Enter Your Mobile Number:
            <input type = "number" name = "mno" required>
            <br><br>
            <input type = "submit" name = "submit" value = "Insert">
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $stud_id = $_POST['stud_id'];
                $stud_name = $_POST['stud_name'];
                $course_id = $_POST['course_id'];
                $mno = $_POST['mno'];

                $conn = new mysqli("localhost","root","","MY_DB");
                echo "<br>Connected successfully";
                
                if($stud_id > 0 && $course_id > 0 && $mno > 0)
                {
                    $sql = "INSERT INTO STUDENTS
                            (STUD_ID, STUD_NAME, COURSE_ID, MOBILE_NO)
                            VALUES('$stud_id','$stud_name','$course_id','$mno')
                            ";
                    echo "<br>one record inserted successfully";

                    $sql = "UPDATE STUDENTS SET STUD_NAME = '$stud_name' WHERE STUD_ID = '5112' ";
                    $conn -> query($sql);
                    echo "<br>record updated successfully";

                }
                else
                {
                    echo "<br><br><h4>Negative values are does not valid!!</h4>";
                }

                /*
                if($stud_id <= 0 && $course_id <= 0 && $mno <= 0)
                {
                    echo "<br><br><h4>Negative values are does not valid!!</h4>";
                }
                elseif($stud_id > 0 && $course_id > 0 && $mno > 0)
                {
                    $conn -> query($sql);
                    echo "<br>one record inserted successfully";
                }
                else
                {
                    echo "<br><br><h4>Negative values are does not valid!!</h4>";
                }
                */
                $conn -> close();
            }
        ?>
    </body>
</html>
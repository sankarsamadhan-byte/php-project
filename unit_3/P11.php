<?php
    $conn = new mysqli("localhost","root","","my_db");
    echo "<br>Connected successfully";

    $sql = "CREATE TABLE students(
            STUD_ID INT(3) PRIMARY KEY NOT NULL,
            STUD_NAME VARCHAR(10) NOT NULL,
            COURSE_ID INT NOT NULL, 
            MOBILE_NO INT(10) NOT NULL
            )";
      
    $conn -> query($sql);
    echo "<br>Table created successfully";

    $sql = "INSERT INTO STUDENTS VALUES(5112,'MESHWA', 101, 1234567890 )
            ";

    $conn -> close();
?>
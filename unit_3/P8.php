<?php
    $conn = new mysqli("localhost","root","","my_db");
    echo "<br>Connected successfully";

    $sql = "CREATE TABLE Student(
            STUD_ID INT(3) PRIMARY KEY NOT NULL,
            STUD_NAME VARCHAR(10) NOT NULL,
            COURSE VARCHAR(25) NOT NULL, 
            AGE INT(3) NOT NULL,
            MOBILE_NO INT(10) NOT NULL
            )";
      
    $conn -> query($sql);
    echo "<br>Table created successfully";

    $conn -> close();
?>
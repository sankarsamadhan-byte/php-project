<?php
    $conn = new mysqli("localhost","root","");
    echo "<br>Connected successfully";

    $sql = "CREATE DATABASE DB_1";
    $conn -> query($sql);
    echo "<br>database created successfully";

    $conn -> select_db("DB_1");

    $sql = "CREATE TABLE MY_TABLE(
            MY_ID INT(3) PRIMARY KEY,
            MY_NAME VARCHAR(10) NOT NULL
            )";
    $conn -> query($sql);
    echo "<br>Table created successfully";

    $conn -> close();
?>
<?php
    $conn = new mysqli ("localhost","root","");
    echo "Connected Successfully.";

    $sql = "CREATE DATABASE EMP";
    $conn -> query($sql);

    echo "Database created successfully.";

    $sql -> select_db("EMP");

    $sql = "CREATE TABLE EMPLOYEE(
                EMP_ID INT PRIMARY KEY NOT NULL,
                EMP_NAME VARCHAR(20) NOT NULL,
                EMP_SALARY INT NOT NULL,
                EMP_ADD VARCHAR(20) NOT NULL
            )";
    $conn -> query($sql);

    echo "table created succeessfully.";

    $sql = "UPDATE TABLE ";
?>
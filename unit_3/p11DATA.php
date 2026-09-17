<?php

$sam = new mysqli("localhost","root","");

echo "Connection successful";

$sql = "CREATE DATABASE IF NOT EXISTS  EXAM";
$sam->query($sql);

$sam->select_db("EXAM");

$sql = "CREATE TABLE IF NOT EXISTS Student1(
        STU_ID INT PRIMARY KEY,
        STU_NAME VARCHAR(30),
        COURSEID INT,
        MOBILENO BIGINT
        )";

$sam->query($sql);

$sql = "INSERT INTO Student1 VALUES
        (1,'Sam',101,29292929),
        (2,'Rahul',102,28282828),
        (13,'Ok',103,3999229)";

$sam->query($sql);

echo "<br>Table and data ready";

$sam->close();

?>
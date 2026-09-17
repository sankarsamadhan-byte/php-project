<?php

$sam = new mysqli("localhost","root","");

echo "Connection Ready";

$sql = "CREATE DATABASE IF NOT EXISTS EMP";
$sam->query($sql);

$sam->select_db("EMP");

$sql = "CREATE TABLE IF NOT EXISTS Employee(
    EmpID INT PRIMARY KEY,
    EmpName VARCHAR(20),
    JobCode INT,
    Salary INT,
    MobileNo BIGINT
)";

$sam->query($sql);

echo "<br>Employee Table Ready";

$sql = "INSERT INTO Employee VALUES
(1,'JAY',101,25000,9876543210),
(2,'VIJAY',102,30000,9876543211),
(3,'RAHUL',103,20000,9876543212)";

$sam->query($sql);

echo "<br>Records Inserted";

$sam->close();

?>
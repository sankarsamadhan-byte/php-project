<!-- 
Q2Write a PHP script for creating 
a “Product” table in “MyDB” database
 with fields Pro_id, Pro_name, Pro_price, Qty, 
 Rate . Also display an acknowledgeme
nt for the same as “Table created successfully”. -->


<?php
    $conn = new mysqli("localhost","root","");
    echo "<br>Connected successfully";

    $sql = "CREATE DATABASE MyDB";
    $conn -> query($sql);
    echo "<br>Database created successfully";

    $conn -> select_db("MyDB");

    $sql = "CREATE TABLE Product(
            Pro_id INT(3) PRIMARY KEY,
            Pro_name VARCHAR(50) NOT NULL,
            Pro_price FLOAT,
            Qty INT,
            Rate FLOAT
            )";

    $conn -> query($sql);
    echo "<br>Table created successfully";

    $conn -> close();
?>
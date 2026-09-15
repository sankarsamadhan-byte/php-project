<?php
    $conn = new mysqli("localhost","root","");
    echo "<br>Connected successfully";

    $sql = "CREATE DATABASE MY_DB";
    $conn -> query($sql);
    echo "<br>database created successfully";

    $conn -> select_db("MY_DB");

    $sql = "CREATE TABLE PRODUCT(
            PROD_ID INT(3) PRIMARY KEY,
            PROD_NAME VARCHAR(10) NOT NULL,
            PROD_PRICE FLOAT(7,2) NOT NULL, 
            PROD_QTY INT NOT NULL,
            PROD_RATE FLOAT(5,2) NOT NULL
            )";

            //PROD_PRICE DECIMAL(7,2) NOT NULL 
            
    $conn -> query($sql);
    echo "<br>Table created successfully";

    $conn -> close();
?>
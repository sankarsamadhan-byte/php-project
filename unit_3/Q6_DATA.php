<?php

$sam = new mysqli("localhost","root","");

echo "Connected Ready";

$sql = "CREATE DATABASE IF NOT EXISTS  Q6data";
$sam -> query($sql);

$sam -> select_db("Q6data");

$sql = "CREATE TABLE IF NOT EXISTS q6(

        pro_id INT(4) PRIMARY KEY,
        pro_name VARCHAR(20),
        pric FLOAT,
        Qun INT

)";

$sam -> query($sql);

$sql = "INSERT INTO q6 VALUES
        (1,'pen',10,200),
        (2,'book',20,300),
        (3,'see',10,100)";

$sam -> query($sql);

echo "<br>Data inserted successfully";

$sam -> close();

?>
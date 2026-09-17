<?php

$sam = new mysqli("localhost","root","");

echo "Connection Ready";

$sql = "CREATE DATABASE IF NOT EXISTS Product_Details";
$sam->query($sql);

echo "<br>Database Ready";

$sam->select_db("Product_Details");

$sql = "CREATE TABLE IF NOT EXISTS Product(
    Pro_id INT PRIMARY KEY,
    Pro_name VARCHAR(20),
    Pro_price INT,
    QOH INT
)";

$sam->query($sql);

echo "<br>Product Table Ready";

?>

<?php

// Connection
$sam = new mysqli("localhost", "root", "");

echo "READY connection";

// Create database
$sql = "CREATE DATABASE Q77";
$sam ->query ($sql);

// Select database
$sam->select_db("Q77");

// Create Product table
$sql = "CREATE TABLE Q7Product
(
    Pro_id INT PRIMARY KEY,
    Pro_name VARCHAR(50),
    Pro_price INT,
    Qty INT,
    Rate INT
)";

$sam->query($sql);

// Insert records
$sql = "INSERT INTO Q7Product VALUES
(1, 'Pen', 20, 10, 5),
(2, 'Book', 50, 20, 10),
(3, 'Bag', 500, 5, 15),
(4, 'Pencil', 10, 30, 5),
(5, 'Bottle', 100, 10, 10)";

$sam->query($sql);

echo "<br>Database, Table and Records Created";

$sam->close();

?>


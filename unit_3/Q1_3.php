<?php

$conn = new mysqli("localhost", "root", "");

echo "<br>Connection Ready";

// Create the database
$sql = "CREATE DATABASE SAM_66";

$conn->query($sql);

echo "<br>Database is created";

// Select the database
$conn->select_db("SAM_66");

// Create table
$sql = "CREATE TABLE samm(
    id INT(5) PRIMARY KEY,
    name VARCHAR(30) NOT NULL
)";

$conn->query($sql);

echo "<br>Table is created";

$conn->close();

?>
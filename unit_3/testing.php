<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete Product</title>
</head>

<body>

<h2>Delete Product</h2>

<form method="post">

    Enter Product ID:
    <input type="text" name="pro_id">

    <br><br>

    <input type="submit" name="delete" value="Delete">

</form>


<?php

$conn = new mysqli("localhost", "root", "");

echo "<br>Connected successfully";


// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS Q3_qes";
$conn->query($sql);

echo "<br>Database created successfully";


// Select Database
$conn->select_db("Q3_qes");


// Create Table
$sql = "CREATE TABLE IF NOT EXISTS Q3_table(
    pro_id INT(2) PRIMARY KEY,
    pro_name VARCHAR(20) NOT NULL,
    pro_price INT(10),
    qty INT(3)
)";

$conn->query($sql);

echo "<br>Product table created successfully";


// Delete Record
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST["pro_id"];

    $sql = "DELETE FROM Q3_table
            WHERE pro_id='$id'";

    $conn->query($sql);

    echo "<br>Record deleted successfully";
}

$conn->close();

?>

</body>
</html>
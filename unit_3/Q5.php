<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Product</title>
</head>

<body>

<h2>Update Product Rate</h2>

<form method="post">

    Enter Product ID:
    <input type="text" name="pro_id">

    <br><br>

    Enter Rate:
    <input type="text" name="rate">

    <br><br>

    <input type="submit" name="update" value="Update">

</form>


<?php

$conn = new mysqli("localhost", "root", "");

echo "<br>Connected successfully";


// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS Q5_qes";

$conn->query($sql);

echo "<br>Database Created successfully";


// Select Database
$conn->select_db("Q5_qes");


// Create Table
$sql = "CREATE TABLE IF NOT EXISTS Q5_table(
    pro_id INT(3) PRIMARY KEY,
    pro_name VARCHAR(30) NOT NULL,
    pro_price INT(10),
    qty INT(3)
)";

$conn->query($sql);

echo "<br>Product table created successfully";


// Update Rate
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST["pro_id"];
    $rate = $_POST["rate"];

    $new_rate = $rate + ($rate * 5 / 100);

    $sql = "UPDATE Q5_table
            SET pro_price='$new_rate'
            WHERE pro_id='$id'";

    $conn->query($sql);

    echo "<br>Rate updated successfully";
}

$conn->close();

?>

</body>
</html>
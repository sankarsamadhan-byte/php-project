<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

<h2>Product Form</h2>

<form method="post">

pro_id:
<input type="text" name="pro_id">
<br><br>

pro_name:
<input type="text" name="pro_name">
<br><br>

pro_price:
<input type="text" name="pro_prc">
<br><br>

price_Qth:
<input type="text" name="qty">
<br><br>

<input type="submit" name="submit" value="submit">

</form>


<?php

$conn = new mysqli("localhost", "root", "");

echo "<br>Connected successfully";

$sql = "CREATE DATABASE IF NOT EXISTS Q3_qes";
$conn->query($sql);

echo "<br>Database Created successfully";

$conn->select_db("Q3_qes");

$sql = "CREATE TABLE IF NOT EXISTS Q3_table(
    pro_id INT(2) PRIMARY KEY,
    pro_name VARCHAR(20) NOT NULL,
    pro_price INT(10),
    qty INT(3)
)";

$conn->query($sql);

echo "<br>Product table created successfully";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $id = $_POST["pro_id"];
    $name = $_POST["pro_name"];
    $price = $_POST["pro_prc"];
    $qty = $_POST["qty"];

    $sql = "INSERT INTO Q3_table
            (pro_id, pro_name, pro_price, qty)
            VALUES ('$id', '$name', '$price', '$qty')";

    $conn->query($sql);

    echo "<br>One record inserted successfully";

}

$conn->close();

?>

</body>
</html>
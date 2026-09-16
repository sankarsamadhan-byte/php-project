<?php

$sam = new mysqli("localhost","root","");
echo "<br>Connection ready";

$sql = "CREATE DATABASE IF NOT EXISTS testing";
$sam->query($sql);

echo "<br>Database is ready";

$sam->select_db("testing");

$sql = "CREATE TABLE IF NOT EXISTS tes(
    pro_id INT(2) PRIMARY KEY,
    pro_name VARCHAR(10) NOT NULL,
    pro_price FLOAT,
    qty INT,
    RATE FLOAT
)";

$sam->query($sql);
echo "<br>Table is ready";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];

    $sql = "INSERT INTO tes(pro_id,pro_name,pro_price,qty)
            VALUES('$id','$name','$price','$qty')";

    $sam->query($sql);

    echo "<br>Record inserted";
}

?>

<html>
<body>

<h1>Insert Product Details</h1>

<form method="POST">

Enter Product ID:
<input type="number" name="id">
<br><br>

Enter Product Name:
<input type="text" name="name">
<br><br>

Enter Price:
<input type="number" name="price">
<br><br>

Enter QTY:
<input type="number" name="qty">
<br><br>

<input type="submit" name="submit" value="Insert">

</form>

</body>
</html>

<?php
$sam->close();
?>
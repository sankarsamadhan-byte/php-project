





<!-- 


```php
<?php

$conn = new mysqli("localhost","root","");

echo "<br>Connected successfully";

// Create Database

$sql = "CREATE DATABASE IF NOT EXISTS productdb";

$conn -> query($sql);

echo "<br>Database created successfully";

// Select Database

$conn -> select_db("productdb");

// Create Table

$sql = "CREATE TABLE IF NOT EXISTS productdata(

        Product_id INT(3) PRIMARY KEY,

        Product_name VARCHAR(50),

        Product_price FLOAT,

        QOH INT

        )";

$conn -> query($sql);

echo "<br>Table created successfully";

// Insert Data

$sql = "INSERT INTO productdata VALUES
        (1,'Pen',10,5),
        (2,'Book',50,10),
        (3,'Bag',500,2)";

$conn -> query($sql);

echo "<br>Data inserted successfully";

?>

<!DOCTYPE html>

<html>

<head>
    <title>Delete Data</title>
</head>

<body>

<h2>Delete Product Details</h2>

<form method="POST">

    Enter Product ID:

    <input type="number" name="id" required>

    <br><br>

    <input type="submit" name="submit" value="Delete">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST["id"];

    // Check Product ID

    $sel = "SELECT * FROM productdata
            WHERE Product_id = '$id'";

    $result = $conn -> query($sel);

    $row = mysqli_num_rows($result);

    if($row > 0)
    {
        // Delete Product

        $sql = "DELETE FROM productdata
                WHERE Product_id = '$id'";

        $conn -> query($sql);

        echo "<br>Deleted successfully";
    }
    else
    {
        echo "<br>Product with <b>".$id.
             "</b> ID does not exist in Database";
    }
}

$conn -> close();

?>

</body>

</html>
```

**One important thing:** Don't use `TRUNCATE TABLE` here. Otherwise, whenever you run the page again, the deleted records will be inserted again. Also, with this direct `INSERT`, running the page repeatedly will cause a **Duplicate entry** error after the first run. For your practical, if you need to run the file repeatedly, tell me and I'll give you the same method with a simple fix. -->

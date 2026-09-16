<?php

$conn = new mysqli("localhost", "root", "");   // no db name yet — create it ourselves

echo "<br>Connected successfully";

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS sam_dh";
$conn -> query($sql);
echo "<br>Database created successfully";

// Select Database
$conn -> select_db("sam_dh");

// Create Table
$sql = "CREATE TABLE IF NOT EXISTS hacker6(
        Product_id INT(3) PRIMARY KEY,
        Product_name VARCHAR(50),
        Product_price FLOAT,
        QOH INT,
        Rate FLOAT
        )";
$conn -> query($sql);
echo "<br>Table created successfully";

// Insert Data
$conn -> query("TRUNCATE TABLE hacker6");

$sql = "INSERT INTO hacker6 VALUES
        (1,'Pen',10,5,100),
        (2,'Book',50,10,200),
        (3,'Bag',500,2,500)";
$conn -> query($sql);
echo "<br>Data inserted successfully";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search</title>
    </head>
    <body>

        <h2>Search Product Details</h2>

        <form method="POST">
            Enter Product ID:
            <input type="number" name="id" required>
            <br><br>
            <input type="submit" name="submit" value="Search">
        </form>

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $id = $conn->real_escape_string($_POST["id"]);

            $sql = "SELECT * FROM hacker6 WHERE Product_id = '$id'";
            $result = $conn -> query($sql);

            if($result -> num_rows > 0)
            {
                $data = $result -> fetch_assoc();

                echo "<br><br>Product ID: ".$data["Product_id"]."<br>";
                echo "Product Name: ".$data["Product_name"]."<br>";
                echo "Product Price: ".$data["Product_price"]."<br>";
                echo "Product QOH: ".$data["QOH"]."<br>";
                echo "Product Rate: ".$data["Rate"]."<br>";
            }
            else
            {
                echo "<br>Product with <b>".$id.
                     "</b> ID does not exist in database.";
            }
        }

        $conn -> close();

        ?>

    </body>
</html>
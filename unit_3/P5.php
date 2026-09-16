<?php

$conn = new mysqli("localhost", "root", "");

echo "<br>Connected successfully";

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS P5";
$conn -> query($sql);
echo "<br>Database created successfully";

// Select Database
$conn -> select_db("P5");

// Create Table
$sql = "CREATE TABLE IF NOT EXISTS hacp5(
        Product_id INT(3) PRIMARY KEY,
        Product_name VARCHAR(50),
        Product_price FLOAT,
        QOH INT,
        Rate FLOAT
        )";
$conn -> query($sql);
echo "<br>Table created successfully";

// Insert Data
$conn -> query("TRUNCATE TABLE hacp5");

$sql = "INSERT INTO hacp5 VALUES
        (1,'Pen',10,5,100),
        (2,'Book',50,10,200),
        (3,'Bag',500,2,500)";
$conn -> query($sql);
echo "<br>Data inserted successfully";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Rate</title>
    </head>
    <body>

        <h2>Update Product Rate</h2>

        <form method="POST">
            Product_id:
            <input type="number" name="id" required>
            <br><br>
            Rate:
            <input type="number" name="rate">
            <br><br>
            <input type="submit" name="update" value="Update">
        </form>

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $id = $conn->real_escape_string($_POST["id"]);

            // Step 1: Fetch the CURRENT rate from the database
            $sel = "SELECT * FROM hacp5 WHERE Product_id = '$id'";
            $result = $conn -> query($sel);

            if($result -> num_rows > 0)
            {
                $row = $result -> fetch_assoc();
                $currentRate = $row["Rate"];

                // Step 2: Calculate 5% increase on the CURRENT rate
                $newrate = $currentRate + ($currentRate * 5 / 100);

                // Step 3: Update Rate in the database
                $sql = "UPDATE hacp5
                        SET Rate = '$newrate'
                        WHERE Product_id = '$id'";

                $conn -> query($sql);

                echo "<br>Old Rate = " . $currentRate;
                echo "<br>Rate updated successfully";
                echo "<br>New Rate = " . $newrate;
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
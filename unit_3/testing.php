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

            <input type="number" name="rate" required>

            <br><br>

            <input type="submit" name="update" value="Update">

        </form>

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $id = $_POST["id"];
            $rate = $_POST["rate"];

            // Check Product ID

            $sel = "SELECT * FROM hacp5
                    WHERE Product_id = '$id'";

            $result = $conn -> query($sel);

            $row = mysqli_num_rows($result);

            if($row > 0)
            {
                // Calculate 5% increase

                $newrate = $rate + ($rate * 5 / 100);

                // Update Rate

                $sql = "UPDATE hacp5
                        SET Rate = '$newrate'
                        WHERE Product_id = '$id'";

                $conn -> query($sql);

                echo "<br>Rate updated successfully";

                echo "<br>New Rate = ".$newrate;
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
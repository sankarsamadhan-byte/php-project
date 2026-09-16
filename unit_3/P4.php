<!-- Q4Create a form containing one input
 field (Product_id) and a Delete button.
  When the user clicks on the Delete button a 
  PHP script should get executed and should delete
   the record of the product 
for the Product_id specified. -->
//testing
<!-- 
<?php

$conn = new mysqli("localhost", "root", "");

echo "<br>Connected successfully";

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS MyDB";
$conn -> query($sql);

echo "<br>Database created successfully";

// Select Database
$conn -> select_db("MyDB");

// Create Table
$sql = "CREATE TABLE IF NOT EXISTS hacker(
        Product_id INT(3) PRIMARY KEY,
        Product_name VARCHAR(50),
        Product_price FLOAT,
        QOH INT
        )";

$conn -> query($sql);

echo "<br>Table created successfully";

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

            $sel = "SELECT * FROM hacker
                    WHERE Product_id = '$id'";

            $result = $conn -> query($sel);

            $row = mysqli_num_rows($result);

            if($row > 0)
            {
                $sql = "DELETE FROM hacker
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
</html> -->


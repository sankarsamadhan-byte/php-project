<!DOCTYPE html>
<html>
    <head>
        <title>update</title>
    </head>
    <body>
        <h2>Update Product Details</h2>
        <form method="POST">
            Enter Product id:
            <input type="number" name="id">
            <br><br>
            Enter Product Rate:
            <input type="number" name="rate">
            <br><br>
            <input type="submit" name="submit" value="Update">
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $id = $_POST["id"];
                $rate = $_POST["rate"];

                $conn = new mysqli("localhost","root","","my_db");

                echo "<br>Connected successfully.";

                $sel = "SELECT * FROM PRODUCT WHERE PROD_ID = '$id'";

                $result = $conn -> query ($sel);

                $row = mysqli_num_rows($result);

                if($row > 0)
                {
                    $new_rate = $rate + ($rate * 0.05);
                    $sql = "UPDATE PRODUCT SET PROD_RATE='$new_rate' WHERE PROD_ID='$id'";

                    $conn -> query($sql);

                    echo "<br>Record updated successfully.";
                }
                else
                {
                    echo "<br>Product with <b>".$id."</b> id does not exists in database.";
                }
                $conn -> close();
            }
            
        ?>
    </body>
</html>
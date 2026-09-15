<!DOCTYPE html>
<html>
    <head>
        <title>Delete data</title>
    </head>
    <body>
        <h2>Details Product Deatils</h2>

        <form method="POST">
            Enter Product ID:
            <input type = "number" name = "id" required>
            <br><br>
            <input type = "submit" name = "submit" value = "Delete" required>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $id = $_POST["id"];

                $conn = new mysqli("localhost","root","","MY_DB");
                echo "<br>Connected successfully";
                
                $sel = "SELECT * FROM PRODUCT WHERE PROD_ID = '$id' ";
                $result = $conn -> query($sel);
                $row = mysqli_num_rows($result);

                if($row > 0)
                {
                    $sql = "DELETE FROM PRODUCT WHERE PROD_ID = '$id' ";
                    $conn -> query($sql);

                    echo "<br>Deleted successfully";
                }
                else
                {
                    echo "<br><br>Product with <b>".$id. " </b>ID does not exist in Database";
                }

                $conn -> close();
            }
        ?>

    </body>
</html>
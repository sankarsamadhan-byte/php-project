<!DOCTYPE html>
<html>
    <head>
        <title>search</title>
    </head>
    <body>
        <h2>Search Product Details</h2>
        <form method="POST">
            Enter Product id:
            <input type="number" name="id">
            <br><br>
            <input type="submit" name="submit" value="Search ">
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $id = $_POST["id"];
                $conn = new mysqli("localhost","root","","my_db");
                echo "<br>Connected successfully.";

                $sql = "SELECT * FROM PRODUCT WHERE PROD_ID = '$id'";

                $result = $conn -> query ($sql);

                $row = mysqli_num_rows($result);

                if($row > 0)
                {
                    $data = $result -> fetch_assoc();
                    echo "<br><br>Product Id: ".$data["PROD_ID"]."<br>".
                        "<br>Product Name: ".$data["PROD_NAME"]."<br>".
                        "<br>Product Price: ".$data["PROD_PRICE"]."<br>".
                        "<br>Product Quantity: ".$data["PROD_QTY"]."<br>".
                        "<br>Product Rate: ".$data["PROD_RATE"]."<br>";
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
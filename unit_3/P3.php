<!DOCTYPE html>
<html>
    <head>
        <title>insert data</title>
    </head>
    <body>
        <h2>Insert Product Deatils</h2>

        <form method="POST">
            Enter Product ID:
            <input type = "number" name = "id" required>
            <br><br>
            Enter Product Name:
            <input type = "text" name = "name" required>
            <br><br>
            Enter Product Price:
            <input type = "number" name = "price" required>
            <br><br>
            Enter Product Quantity:
            <input type = "number" name = "qty" required>
            <br><br>
            <input type = "submit" name = "submit" value = "Insert" required>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $qty = $_POST['qty'];

                $conn = new mysqli("localhost","root","","MY_DB");
                echo "<br>Connected successfully";

                $sql = "INSERT INTO PRODUCT
                        (PROD_ID, PROD_NAME, PROD_PRICE, PROD_QTY)
                        VALUES('$id','$name','$price','$qty')
                        ";
                        
                $conn -> query($sql);
                echo "<br>one record inserted successfully";

                $conn -> close();
            }
        ?>
    </body>
</html>
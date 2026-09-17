<!DOCTYPE html>
<html>

<head>
    <title>Search</title>
</head>

<body>

<h2>Search Product Details</h2>

<form method="POST">

    Enter Product id:
    <input type="number" name="id" required>

    <br><br>

    <input type="submit" name="submit" value="Search">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST["id"];

    $conn = new mysqli("localhost","root","","Q6data");

    echo "<br>Connected successfully.";

    $sel = "SELECT * FROM q6 WHERE pro_id = '$id'";

    $result = $conn -> query($sel);

    $row = mysqli_num_rows($result);

    if($row > 0)
    {
        $data = $result -> fetch_assoc();

        echo "<br><br>Product Id: ".$data["pro_id"];
        echo "<br><br>Product Name: ".$data["pro_name"];
        echo "<br><br>Product Price: ".$data["pric"];
        echo "<br><br>Product Quantity: ".$data["Qun"];
    }
    else
    {
        echo "<br>Product with <b>".$id.
             "</b> id does not exist in database.";
    }

    $conn -> close();
}

?>

</body>
</html>
<!DOCTYPE html>
<html>
<body>

<form method="POST">

Enter Product ID:
<input type="number" name="pid" required>
<br><br>

Enter Product Name:
<input type="text" name="pname" required>
<br><br>

Enter Product Price:
<input type="number" name="price" required>
<br><br>

Enter QOH:
<input type="number" name="qoh" required>
<br><br>

<input type="submit" name="submit" value="Insert">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $pid=$_POST["pid"];
    $pname=$_POST["pname"];
    $price=$_POST["price"];
    $qoh=$_POST["qoh"];

    $sam = new mysqli("localhost","root","","Product_Details");

    $sql = "SELECT * FROM Product WHERE Pro_id='$pid'";

    $ans = $sam->query($sql);

    $row = mysqli_num_rows($ans);

    if($row>0)
    {
        echo "<br>Product ID already exists";
    }
    else
    {
        $sql = "INSERT INTO Product
        VALUES('$pid','$pname','$price','$qoh')";

        $sam->query($sql);

        echo "<br>Record Inserted Successfully";
    }

    $sam->close();
}

?>

</body>
</html>
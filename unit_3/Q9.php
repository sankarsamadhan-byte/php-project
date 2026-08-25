<!DOCTYPE html>

<html>
<body>

<form method="POST">

Enter New Address: <input type="text" name="address">

<input type="submit" value="Update">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $address = $_POST["address"];

    $conn = new mysqli("localhost", "root", "", "my_db");

    echo "<br>Connected successfully";

    $sql = "UPDATE student SET Stud_Address='$address' WHERE sid=13";

    $conn->query($sql);

    echo "<br>Record Updated Successfully";

    $conn->close();
}

?>

</body>
</html>

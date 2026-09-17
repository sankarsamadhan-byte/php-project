<html>
<body>

<form method="post">

    Product ID:
    <input type="number" name="id">

    <input type="submit" name="delete" value="Delete">

</form>

<?php

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $sam = new mysqli("localhost", "root", "", "MyDB");

    $sql = "DELETE FROM Product WHERE Pro_id='$id'";

    $sam->query($sql);

    echo "<br>Product deleted successfully";

    $sam->close();
}

?>

</body>
</html>
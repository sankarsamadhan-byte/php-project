<?php

$conn = new mysqli("localhost", "root", "", "Q77");

echo "<br>Connected Successfully";
echo "<br><br><b>Update product price to 100 whose product id is <4 in Product table</b><br>";

$sql = "UPDATE Q7PRODUCT SET PRO_PRICE=100 WHERE PRO_ID<4";

$conn->query($sql);

echo "<br>Record(s) Updated successfully";

$conn->close();
?>


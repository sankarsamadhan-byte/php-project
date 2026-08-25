<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
<h2>delete  prodyc</h2>
<form method="post">
    Enter procy id:
    <input type="text" name="pro_id">
    <br><br>
    <input type="submit" name="delte" value="delete">


</form>    
<?php

$conn=new mysqli("localhost","root","");

echo "<br>Connected  sucess";


$sql="CREATE DATABASE Q4_qes";

$conn->query($sql);

echo "<br>Datbse Creted ";
$conn->select_db("Q4_qes");

$sql="CREATE TABLE Q4_qes(
pro_id INT(3) primary key,
pro_nmae varchar(30) not null,
pro_price int(10),
qty INT(3)
)";
$conn->query($sql);
echo "<br>prodcut ybale  cared  suse";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $id=$_POST["pro_id"];
        $sql="DELETE FROM Q4_qes
        WHERE pro_id='$id'";

        $conn->query($sql);
        echo "<br>RECORD delete  suuce";
    }

    $conn->close();

?>



</body>
</html>
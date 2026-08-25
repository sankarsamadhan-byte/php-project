<?php
$con=new mysqli("localhost","root");
echo "<br>Connectied";
$sql="CREATE DATABASE prooo";
$con->query($sql);
echo"<br>Databse is  Credtd  Suses";
$con->select_db("prooo");
$sql="CREATE TABLE porl(

pro_id INT(2) primary key,
pro_name varchar(20) not null,
pro_price INT(10),
qty INT(5)
)";

$con->query($sql);

echo "<br>Product table creed  suusec";

$con->close();

?>

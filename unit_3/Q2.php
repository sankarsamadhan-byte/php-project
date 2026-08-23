<?php 
$conn=new mysqli("localhost","root","");
echo "<br>Connceton ";

$sql="CREATE DATABASE product";

$conn->query($sql);
echo "<br>Databse Creted Succesful";

$conn->select_db("product");
$sql="CREATE TABLE pro(
pro_id int(3)PRIMARY KEY,
pro_name VARCHAR(30)not null,
pro_price float(30)not null,
Rate float(10) not null)

";

$conn->query($sql);
echo "<br>table Ready he ";

$conn->close();
?>
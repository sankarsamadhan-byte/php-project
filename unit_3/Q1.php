<?php
$con=new mysqli("localhost","root");
echo "<br>Connected ";
$sql="CREATE DATABase lol_1";
$con->query($sql);
echo"<br>Databse  is  cretsd  suucesfule";
$con->select_db("lol_1");
$sql="CREATE TABLE mytap(
my_id int(2)primary key,
my_name varchar(30) not null)";

$con->query($sql);
echo "<br>table  creted  ok";

$con->close();

?>

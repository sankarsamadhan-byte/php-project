<?php

$sam=new  mysqli("localhost","root","");

echo "Connectn is   ready ";
$sql="CREATE  DATABASE  piku";
$sam -> query($sql);
echo "<br>Datasvs is   ready";

$sam ->select_db("piku");
$sql ="CREATE TABLE Q5D(

    pro_id INT(4),
    pro_name varchar(20),
    price  float,
    qun  int
)";

$sam -> query($sql);

$sql="INSERT INTO Q5D values
(1,'pen',10,200),
(2,'rubber',20,200),
(3,'soap',10,10)"
;
$sam -> query($sql);

echo "<br>Datas  insert   okl";

$sam -> close();



?>
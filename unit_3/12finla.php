<?php

$sam =new mysqli("localhost","root","");
echo "Connection REAdy";

$sql ="CREATE DATABASE if not exists chari";

$sam ->query ($sql);
echo "DATBSE  REDY";

$sam ->select_db("chari");
$sql="CREATE TABLE firee(
        EMP_ID INT(3),
        EMP_name  varchar(20),
        emp_Sa int,
        emp_add varchar(20))";

$sam ->query ($sql);
echo "Table ban gaue";

$sql="INSERT INTO firee VALUES
(1,'sam',70000,'ahem'),
(2,'hari',1281,'man'),
(3,'hacker',1281,'cina')";
$sam ->query ($sql);

echo "<br>tbale  data isnert";
$sql ="UPDATE firee set EMP_NAME='ABC' where EMP_ID=3";

$sam ->query ($sql);
echo "<br>UPDATE  READY";
?>
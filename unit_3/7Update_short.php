<?php
//Creating connection with direct values
$conn= new mysqli("localhost","root","","mydb");
    echo "<br> Connected Successfully";

//Create Table
//$conn->select_db("MYDB");
$sql="CREATE TABLE PRODUCT2(PRO_ID INT(3) PRIMARY KEY,
PRO_NAME VARCHAR(20) NOT NULL,PRO_PRICE FLOAT(7,2),QTY INT(3),RATE FLOAT(5,2))";
$conn->query($sql);
    echo "<br>PRODUCT Table Created Successfully";

//Insert values into Table
$sql1="INSERT INTO PRODUCT2(PRO_ID,PRO_NAME,PRO_PRICE,QTY,RATE)
VALUES(1,'Apple',50,2,10)";
$conn->query($sql1);
$sql2="INSERT INTO PRODUCT2(PRO_ID,PRO_NAME,PRO_PRICE,QTY,RATE)
VALUES(2,'Banana',150,5,10)";
$conn->query($sql2);
$sql3="INSERT INTO PRODUCT2(PRO_ID,PRO_NAME,PRO_PRICE,QTY,RATE)
VALUES(5,'Orange',250,5,50)";
$conn->query($sql3);

echo "<br><br><b>Update product price to 100 whose product
id is <4 in Product table</b><br>";


//Update values into Table
    $sql="UPDATE PRODUCT2 SET PRO_PRICE=100 WHERE PRO_ID<4";
    $conn->query($sql);
         echo "<br>Record(s) Updated successfully";

$conn->close();
?>
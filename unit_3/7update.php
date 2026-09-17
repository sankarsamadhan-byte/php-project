<?php
$conn= new mysqli("localhost","root","","mydb");
    echo "<br> Connected Successfully";

//$conn->select_db("MYDB");
$sql="CREATE TABLE PRODUCT1(PRO_ID INT(3) PRIMARY KEY,
PRO_NAME VARCHAR(20) NOT NULL,PRO_PRICE FLOAT(7,2),QTY INT(3),RATE FLOAT(5,2))";
$conn->query($sql);
    echo "<br>PRODUCT1 Table Created Successfully";

//Insert values into Table
$sql1="INSERT INTO PRODUCT1(PRO_ID,PRO_NAME,PRO_PRICE,QTY,RATE)
VALUES(1,'Apple',50,2,10)";
$conn->query($sql1);
$sql2="INSERT INTO PRODUCT1(PRO_ID,PRO_NAME,PRO_PRICE,QTY,RATE)
VALUES(2,'Banana',150,5,10)";
$conn->query($sql2);
$sql3="INSERT INTO PRODUCT1(PRO_ID,PRO_NAME,PRO_PRICE,QTY,RATE)
VALUES(5,'Orange',250,5,50)";
$conn->query($sql3);

//Print Original Table Data
$sql="SELECT * FROM PRODUCT1";
$result=$conn->query($sql);
$row=mysqli_num_rows($result);
if($row>0)
{
    echo "<h3>Product Details</h3>";
        echo "<table border='1' cellpadding='8'>";
        echo "<tr><th>Product ID</th><th>Product Name</th><th>Price</th><th>QOH</th><th>Rate</th></tr>";
        
        while($r = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$r['PRO_ID']."</td>";
            echo "<td>".$r['PRO_NAME']."</td>";
            echo "<td>".$r['PRO_PRICE']."</td>";
            echo "<td>".$r['QTY']."</td>";
            echo "<td>".$r['RATE']."</td>";
            echo "</tr>";
            }
        echo "</table>";
}
else{
    echo "<br>Product with ".$pid." Id does not exist in database";
}
echo "<br><br><b>Update product price to 100 whose product
id is <4 in Product table</b><br>";
//Update values into Table
    $sql="UPDATE PRODUCT1 SET PRO_PRICE=100 WHERE PRO_ID<4";
    $conn->query($sql);
         echo "<br>Records Updated successfully";

//Print Updated Table data
$sql="SELECT * FROM PRODUCT1";
$result=$conn->query($sql);
$row=mysqli_num_rows($result);
if($row>0)
{
    echo "<h3>Updated Product Details</h3>";
        echo "<table border='1' cellpadding='8'>";
        echo "<tr><th>Product ID</th><th>Product Name</th><th>Price</th><th>QOH</th><th>Rate</th></tr>";
        
        //while($r = $result->fetch_assoc())
        foreach($result as $r)
            {
            echo "<tr>";
            echo "<td>".$r['PRO_ID']."</td>";
            echo "<td>".$r['PRO_NAME']."</td>";
            echo "<td>".$r['PRO_PRICE']."</td>";
            echo "<td>".$r['QTY']."</td>";
            echo "<td>".$r['RATE']."</td>";
            echo "</tr>";
            }
        echo "</table>";
}
$conn->close();
?>
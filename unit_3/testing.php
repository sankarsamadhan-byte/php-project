<?php

$sam =new mysqli("localhost","root","");
echo "DATBSe  COnencted";

$sql ="CREATE DATABASE PRO_Q13";

$sam ->query($sql);
echo "DATSBE BAN GYA";
$sam ->select_db("PRO_Q13");

$sql ="CREATE TABLE q133(

pro_id INT primary key,
pro_name varchar(10),
pro_price int,
qun int,
)";

$sam ->query($sql);
echo "Tbale  ban gauga";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

        Enetr  pro_id
        <input type="text" name="pid" required>
        <br>
        Enter produ name:
        <input type="text" name="nmae" required>

        <br>
        <input type="number" nmae="price">
        <br>
        <input type="numebr" name="qu">
<input type="submit" name="submit" value="insert">
</from>
<?php

$pid=$_POST["pid"];
$pname=$_POST["name"];
$pcie=$_POST["rpice"];



$sam =new mysqli("localhost","root","","pr");

$sql ="SELECT *FROM prid  where pro_id='$pid'";

$ans= $sam ->query ($sql);

$row=mysqli_num_rows($ans);
if($row>0)
    {


        echo "data  to he  ybale me ";


    }
    else
        {
            $sql="INSERT INTO prodyct VALUES
            (
                '$pid','$pname',' $pcie'  ,'$qun'         
            )";



        }
        $sam ->query($sql);
        echo "data  inide  tabel see";
        $sam -> close();

?>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">

Enetr the name id:
<input type ="numebr" name="id" required>
<br>
<input type="text" name="ename">
<br>
<input type="numebr" name="job">
<br>
<input type="numebr" name="salary">
<br>
<input type="number" name="mo">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$eid =$_POST["eid"];
$enmae=$_POST["ename"];
$job=$_POST["job"];
$salr=$_POST["salery"];
$mo=$_POST["mo"];

$sam =new mysqli("lcoalhost","root","");

echo "conted";

$sql ="SELECT *FROM empy  where EMP_ID ='$eid'";

$asn =$sam ->query($sql);
$row=mysqli_num_rows($asn);

if($row>0)
    {

        if($eid>0 && $salry>=0 && $mp>=0 && $enme!="")
            {

        if(strlen($salr)<=5)
            {

                $sql ="UPDATE emp SET 
                
                emp_ame='$ename',
                jobcode='$joboced',
                salry ='$salry',
                ,obile ='$mo',
                where EMP_id ='$eid'";
                
                $sam ->query($sql);

                echo "<br>RECord UPDAET";
            }
            else
                {
                    echo "<br>SAry must  not gaetr  5 digit";
                }
            }
            else
                {
                    "neagic  vlaeu  not  alleos"
                }

    }
else
    {
        echo "$id not  focunt "
    }

}






?>


    
</body>
</html>
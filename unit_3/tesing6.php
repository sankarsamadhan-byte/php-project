<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form methos="POST">

<input type="numebr " name="id" >
<input type="submiy">



</from>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_POST["id"];
$sam =new mysqli("localhost","root","","table_ame");

$et ="SELECT  * from q6 where pro_id='$id'";

$asn = $sam ->query($et);

$row =mysqli_num_rows($asn);

if($row>0)
    {
        $data= $et ->fetch_assoc();

        echo "<br>prod  id ".$data["pro_id"];

    }



    }
    else
        {
            echo "<br>Producy   with <b>".$id
        }






    }




?>



    
</body>
</html>
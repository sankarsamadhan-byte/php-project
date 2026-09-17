<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <form method="POST">

        Enter the ID:
        <input type="numebr" name="id">
        <br><br>

        Enter the  prodyc  rate:
        <input type="numebr" name="rate">
        <br><br>

        <input type="submit" valye="submit">
 </form>

 <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
        {

                $id=$_POST["id"];
                $rate=$_POST["rate"];


$sam=new mysqli("localhost","root","","piku");

$set ="SELECT*FROM Q5D WHERE  pro_id='$id'";

$ans=$sam -> query($set);

$row =mysqli_num_rows($ans);

if($row>0)
        {

                $upp=$rate*5/100;
                $newrate=$rate+$upp;

                $sql="UPDATE Q5D SET price='$newrate'
                where pro_id='$id'";

                $sam -> query($sql);

                echo "<br>ol  rate".$rate;
                echo "<br>inces vlaue".$upp;
                echo "<br>NEW RATE".$newrate;

        }
else{
        echo "<br>prody  not"  .$id ." found";
}

$sam -> close();

        }




?>
        
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>

<?php 

echo "<h3><i>?Use  of  varibale </i></h3><br>";
$color ="Red";

echo "My  favrate  color is <b>$color  </b>";
echo  "<br>";
?>


<form  action="file.php" method="POST">

<label>Enter the you  color :</label>

<input type="text" name ="c">

<input type="submit"  name="submit" value="submit">
</from>
<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
    {

     $stor=$_POST['c'];
     echo "<br><br>Your   Favrate  color is <b>$stor</b>";



    }


?>

    
</body>
</html>
Q2Write a PHP script to delete a cookie named "welcome". 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Document</title> 
</head> 
<body> 
<?php 
//set cookies  using the  name is elcome 
setcookie("username","",time()-3600); 
echo"<p> cookies   is deleted </p>"; 
?> 
</body> 
</html>


setcookie("Sam","",time()-3);

<!-- 
 Write a PHP program that checks whether the
  element is exists in the array or not. 
 Give acknowledgement from the same. -->


<?php
$plants= array("mercury","venus","earth","mars");

echo"<h3> array elements are : <br></h3>";
foreach($plants as $x)
{
 echo"$x<br>";
}
$find = "earth";

echo "<br> element to be found : $find<br>";
if(in_array($find,$plants)){
echo"<h3>$find is exist in the array of plantes </h3>";}
else{
echo"<h3>$find is not exist in the array of plantes </h3>";}
?>

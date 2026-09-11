
<!-- 
 
Create an array named $student that stores 5 elements 
bounded to different keys and access the same using the 
key element.-->
<?php
<?php

$stundet=["Name"=>"SAM",
"Age"=>20,
"Course"=>"BCA",
"Roll_no"=>5160,
"city"=>"Ahemebda"];

echo  "<h1>thisis  using loop </h1><br>";

foreach($stundet as $key=>$val)
    {
        echo "$key=>$val<br>";
    }
echo  "<h1>thisis  using loop </h1><br>";

    foreach($stundet as $k=>$v)
        {
            echo "$stundet[$k]<br>";
        }

        echo  "<h1>thisis  using echo </h1><br>";

echo $stundet["Name"]."<br>".
$stundet["Age"]."<br>".
$stundet["Course"]."<br>".
$stundet["Roll_no"]."<br>".
$stundet["city"];





?>
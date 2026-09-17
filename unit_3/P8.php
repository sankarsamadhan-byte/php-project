<?php
    $sam = new mysqli("localhost","root","");
    echo "<br>Connected successfully";



$sql ="CREATE DATABASE if not  exists broo";

$sam ->query ($sql);
echo "DATBASE  SI READy";

$sam ->select_db("broo");


    $sql = "CREATE TABLE every(
            STUD_ID INT(3) PRIMARY KEY NOT NULL,
            STUD_NAME VARCHAR(10) NOT NULL,
            COURSE VARCHAR(25) NOT NULL, 
            AGE INT(3) NOT NULL,
            MOBILE_NO INT(10) NOT NULL
            )";
      
    $sam ->query ($sql);
    echo "<br>Table created successfully";


    $sql ="INSERT  INTO every VALUES
    
    (1,'sam','bca',19,29292929),
    (2,'lol','bsca',20,28282828),
    (13,'ok','mca',20,3999229)
    ";

    $sam ->query ($sql);
    echo "Redy tvale";

    $sam -> close();
?>
<!-- 
 Write a program in PHP to demonstrate the use of 
multidimensional arrays.  

-->
<?php
$stu=[


["SAm","AHEMBDAD",972372832121],
["hari","suart",3982982938293],

["hacer","suart",828282828282],
["hasha","valsad",39393939393]


];

foreach($stu as $row)
{
    foreach($row as $col)
        {
            echo "$col<br>";
        }
        echo "<br>";
}

for($i=0;$i<4;$i++)
    {
for ($j=0;$j<3;$j++)

{
echo $stu[$i][$j]." ";

}   
echo "<br>";

}


// Using nested for loop
for($i = 0; $i < count($stu); $i++)
{
    for($j = 0; $j < count($stu[$i]); $j++)
    {
        echo $stu[$i][$j] . "<br>";
    }

    echo "<br>";
}







?>
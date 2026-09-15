```php
<?php

$student = [
    "Name" => "SAM",
    "Age" => 20,
    "Course" => "BCA",
    "Roll_no" => 5160,
    "city" => "Ahmedabad"
];

echo "<h1>This is using loop</h1>";

foreach($student as $key => $val)
{
    echo "$key => $val<br>";
}

echo "<h1>This is accessing using key</h1>";

foreach($student as $k => $v)
{
    echo "$student[$k]<br>";
}

echo "<h1>This is using echo</h1>";

echo $student["Name"]."<br>".
     $student["Age"]."<br>".
     $student["Course"]."<br>".
     $student["Roll_no"]."<br>".
     $student["city"];

?>
```

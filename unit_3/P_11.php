<!DOCTYPE html>
<html>
<head>
    <title>Student Form </title>
</head>
<body>

<form method="POST">
    Enter Student ID: <input type="number" name="sid" required>
    <br><br>
    Enter Student Name: <input type="text" name="sname" required>
    <br><br>
    Enter Course ID: <input type="number" name="sc" required>
    <br><br>
    Enter Mobile No: <input type="number" name="sm" required>
    <br><br>
    
    <input type="submit" name="submit" value="Update">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sid = $_POST["sid"];
    $sname = $_POST["sname"];
    $sc = $_POST["sc"];
    $sm = $_POST["sm"];    

//Creating connection with direct values
$conn= new mysqli("localhost","root","","mydb");
    echo "<br> Connected Successfully";

//check if student id exist
$sel="SELECT * FROM STUDENT1 WHERE STU_ID='$sid'";
$result=$conn->query($sel);
$row=mysqli_num_rows($result);
if($row>0)
{
    if($sid>0 && $sc>0 && $sm>0){
    //Update into Table
    $sql="UPDATE STUDENT1 SET STU_NAME='$sname',COURSEID='$sc',MOBILENO='$sm' WHERE STU_ID='$sid'";
    $conn->query($sql);
        echo "<br>Record updated successfully";
    
    }
    else{
    echo "<br>Negative values are not allowed.";
    }
}
else{
    echo "<br>Student with ".$sid." Id does not exist in database";
}

$conn->close();
}
?>

</body>
</html>
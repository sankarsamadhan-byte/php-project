<!DOCTYPE html>
<html>
<body>

<form method="POST">

Enter Employee ID:
<input type="number" name="eid" required>
<br><br>

Enter Employee Name:
<input type="text" name="ename" required>
<br><br>

Enter Job Code:
<input type="number" name="jobcode" required>
<br><br>

Enter Salary:
<input type="number" name="salary" required>
<br><br>

Enter Mobile No:
<input type="number" name="mobile" required>
<br><br>

<input type="submit" name="submit" value="Update">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $eid=$_POST["eid"];
    $ename=$_POST["ename"];
    $jobcode=$_POST["jobcode"];
    $salary=$_POST["salary"];
    $mobile=$_POST["mobile"];

    $sam = new mysqli("localhost","root","","EMP");

    echo "Database Ready";

    // Check Employee ID
    $sql = "SELECT * FROM Employee WHERE EmpID='$eid'";

    $ans = $sam->query($sql);
    $row = mysqli_num_rows($ans);

    if($row>0)
    {
        // Validation
        if($eid>=0 && $salary>=0 && $mobile>=0 && $ename!="")
        {
            // Salary should not be greater than 5 digits
            if(strlen($salary)<=5)
            {
                $sql = "UPDATE Employee SET
                        EmpName='$ename',
                        JobCode='$jobcode',
                        Salary='$salary',
                        MobileNo='$mobile'
                        WHERE EmpID='$eid'";

                $sam->query($sql);

                echo "<br>Record Updated Successfully";
            }
            else
            {
                echo "<br>Salary must not be greater than 5 digits";
            }
        }
        else
        {
            echo "<br>Negative value not allowed or Employee Name is blank";
        }
    }
    else
    {
        echo "<br>Employee ID ".$eid." does not exist";
    }

    $sam->close();
}

?>

</body>
</html>
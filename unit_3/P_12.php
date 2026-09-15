<!DOCTYPE html>
    <html>
        <head>
            <title>insert data</title>
        </head>
        <body>
            <h2>Insert Students Deatils</h2>
    
            <form method="POST">
                Enter Employee ID:
                <input type = "number" name = "id" required>
                <br><br>
                Enter Employee Name:
                <input type = "text" name = "name" required>
                <br><br>
                Enter Employee Salary:
                <input type = "number" name = "salary" required>
                <br><br>
                Enter Employee Address:
                <input type = "text" name = "address" required>
                <br><br>
                <input type = "submit" name = "submit" value = "Insert">
            </form>
    
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $emp_id = $_POST['id'];
                    $emp_name = $_POST['name'];
                    $emp_salary = $_POST['salary'];
                    $address = $_POST['address'];

                    $conn = new mysqli("localhost","root","","emp");
                    echo "<br>Connected successfully";

                    $sql = "INSERT INTO EMPLOYEE
                        (EMP_NAME, EMP_SALARY, EMP_ADD)
                        VALUES('$emp_name',$emp_salary','$emp_add')
                        ";
                        
                    $conn -> query($sql);
                    echo "<br>one record inserted successfully";

                    $conn -> close();
                }
            ?>
        </body>
    </html>
?>
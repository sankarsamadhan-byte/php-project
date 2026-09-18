<!-- 


//Write a PHP script to retrieve and display the
// value of the session variable "loginid".
<?php
session_start();
$_SESSION["loginid"]=94849;

if(isset($_SESSION["loginid"]))
{
    echo "Your login id is: " . $_SESSION["loginid"];
}
else
{
    echo "Login id is not set.";

    }
    session_destroy();
?>

-->


///optinal 

<?php
session_start();

// If the form was submitted, set the session variable
if(isset($_POST["loginid"]))
{
    $_SESSION["loginid"] = $_POST["loginid"];
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Enter Login ID: <input type="text" name="loginid">
    <input type="submit" value="Submit">
</form>

<?php
// Retrieve and display the session variable
if(isset($_SESSION["loginid"]))
{
    echo "Your login id is: " . $_SESSION["loginid"];
}
else
{
    echo "Login id is not set.";
}
?>

</body>
<!-- </html> -->
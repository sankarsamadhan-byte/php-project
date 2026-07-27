

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $color = $_POST["color"];

    switch ($color) {

        case "red":
            echo "<body style='background-color:red'>";
            break;
        case "black":
            echo "<body style='background-color:black'>";
            break;
        case "pink":
            echo "<body style='background-color:pink'>";
            break;

        case "skyblue":
            echo "<body style='background-color:skyblue'>";
            break;

            defualt:
            echo "colro not  marth";
    }
}


?>
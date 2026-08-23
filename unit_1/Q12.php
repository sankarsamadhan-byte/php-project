
<?php

// Connect to MyDB database
$conn = mysqli_connect("localhost", "root", "", "MyDB");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create Product table
$sql = "CREATE TABLE Product (
    Pro_id INT PRIMARY KEY,
    Pro_name VARCHAR(50),
    Pro_price DECIMAL(10,2),
    Qty INT,
    Rate DECIMAL(10,2)
)";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
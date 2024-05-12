<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipt11";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the stud_id parameter is set
if (isset($_POST['stud_id'])) {
    // Escape the stud_id to prevent SQL injection
    $stud_id = $conn->real_escape_string($_POST['stud_id']);

    // Prepare a delete statement
    $sql = "DELETE FROM students WHERE stud_id = '$stud_id'";

    if ($conn->query($sql) === TRUE) {
        // Return success message
        echo "Data deleted successfully";
    } else {
        // Return error message
        echo "Error deleting data: " . $conn->error;
    }
} else {
    // Return error message if stud_id parameter is not set
    echo "Error: No stud_id parameter provided";
}

// Close the database connection
$conn->close();

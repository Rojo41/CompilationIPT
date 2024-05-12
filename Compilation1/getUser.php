<?php
// Include your database connection code here
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

// Check if stud_id parameter is present
if (isset($_POST['stud_id'])) {
    $stud_id = $_POST['stud_id'];

    // Prepare SQL statement to select user information
    $sql = "SELECT * FROM students WHERE stud_id = $stud_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user information as an associative array
        $row = $result->fetch_assoc();

        // Convert user information to JSON format and output it
        echo json_encode($row);
    } else {
        // If no user with the given stud_id is found, return an error message
        echo json_encode(array('error' => 'User not found'));
    }
} else {
    // If stud_id parameter is not provided, return an error message
    echo json_encode(array('error' => 'Missing stud_id parameter'));
}

// Close database connection
$conn->close();

<?php
// Assuming you have a database connection established already
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

// Get the data from the AJAX request
$stud_id = $_POST['stud_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];
$address = $_POST['address'];

// Check if the exact same data already exists in the database
$sql = "SELECT * FROM students WHERE stud_id = ? OR fname = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $stud_id, $fname, $email);
$stmt->execute();
$result = $stmt->get_result();

// If a matching record is found, return an error message
if ($result->num_rows > 0) {
    echo "Error: Data with the same ID, name, and email already exists in the database";
} else {
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO students (stud_id, fname, lname, email, age, address) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssis", $stud_id, $fname, $lname, $email, $age, $address);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close statement and database connection
$stmt->close();

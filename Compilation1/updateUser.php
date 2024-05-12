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
// Check if all required fields are present
if (isset($_POST['stud_id'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['age'], $_POST['address'])) {
    $stud_id = $_POST['stud_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    // Update user information in the database
    $sql = "UPDATE students SET fname='$fname', lname='$lname', email='$email', age='$age', address='$address' WHERE stud_id='$stud_id'";
    if ($conn->query($sql) === TRUE) {
        echo "User information updated successfully";
    } else {
        echo "Error updating user information: " . $conn->error;
    }
} else {
    echo "Missing required fields";
}

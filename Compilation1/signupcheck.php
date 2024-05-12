<?php
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database configuration file
    include 'config.php';

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists in the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email already exists, set error message and redirect
        $_SESSION['error_message'] = "Email already exists. Please use a different email.";
        header("Location: signup.php");
        exit();
    } else {
        // Email does not exist, insert new user into database with hashed password
        $sql = "INSERT INTO users (name, email, password, role)
                VALUES ('$name', '$email', '$hashed_password', '$role')";

        if ($conn->query($sql) === TRUE) {
            // New record created successfully, set success message and redirect
            $_SESSION['success_message'] = 'Account has been created';
            header("Location: signup.php");
            exit();
        } else {
            // Error occurred during insertion, set error message and redirect
            $_SESSION['error_message'] = 'There is an error updating the data';
            header("Location: signup.php");
            exit();
        }
    }

    $conn->close();
} else {
    // Redirect to signup page if accessed directly without submitting the form
    header("Location: signup.php");
    exit();
}

<?php
// Start the session
session_start();

// Check if the form is submitted via POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file here
    include_once "config.php"; // Adjust the path according to your file structure

    // Check if email and password are set and not empty
    if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // Prepare a select statement
        $sql = "SELECT id, name,email, password, role FROM users WHERE email = ?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = $_POST['email'];

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if email exists, if yes then verify password
                if ($stmt->num_rows == 1) {

                    // Bind result variables
                    $stmt->bind_result($id, $name, $email, $hashed_password, $role);
                    if ($stmt->fetch()) {

                        if (password_verify($_POST['password'], $hashed_password)) {
                            // Password is correct, so start a new session

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["role"] = $role;
                            $_SESSION["name"] = $name;

                            // Redirect user based on role
                            switch ($role) {
                                case 'student':
                                    header("Location: addPhp.php");
                                    break;
                                case 'faculty':
                                    header("Location: addPhp.php");
                                    break;
                                case 'admin':
                                    header("Location: addPhp.php");
                                    break;
                                default:
                                    header("Location: addPhp.php");
                                    break;
                            }
                        } else {
                            // Password is not valid, display a generic error message
                            echo "<div class='alert alert-danger' role='alert'>Invalid email or password.</div>";
                        }
                    }
                } else {
                    // Email doesn't exist, display a generic error message
                    echo "<div class='alert alert-danger' role='alert'>Invalid email or password.</div>";
                }
            } else {
                // Display an error message if execution failed
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;

            height: 100vh;
        }

        .card {
            width: 350px;
            /* Adjust width as needed */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            /* Box shadow with 10px blur */
            background: linear-gradient(#003C43, #000010, #000000);
            /* Add linear gradient */
            border-radius: 10px;
            /* Add border radius */
            color: white;
            /* Set text color to white */
            padding: 20px;
            /* Add padding to the card */
        }

        button {
            width: 100%;
        }

        img {
            width: 100px;
            height: 100px;
            display: block;
            margin: auto;
            /* Center the image horizontally */
            margin-bottom: 20px;
        }

        .no-underline {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <script>
            // Check if the session alert exists
            <?php if (isset($_SESSION['alert'])) { ?>
                // Create a Bootstrap alert dynamically
                var alertMessage = '<?php echo $_SESSION['alert']; ?>';
                var alertHTML = '<div class="alert alert-dismissible fade show" role="alert">' + alertMessage +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

                // Append the alert to the document body
                document.body.insertAdjacentHTML('beforeend', alertHTML);

                // Clear the session alert
                <?php unset($_SESSION['alert']); ?>
            <?php } ?>
        </script>


        <div class="form-container">
            <div class="card">
                <div class="card-body">

                    <form method="post">

                        <img src="images/buksu logo.png" alt="photo">
                        <h2 class="text-center mb-0"> LOGIN</h2><br>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-email"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password" aria-label="password" aria-describedby="basic-addon1" required>
                        </div>
                        <button style="margin-top: 20px;" class="btn btn-success" type="submit">LOGIN</button>
                    </form><br>
                    <p class="small text-center mb-0 no-underline">Don't have an account? <a class="small text-center mb-0 no-underline" href="signup.php">Sign Up</a></p>
                    <br>
                    <p class="small text-center mb-0" style="color: white;">All rights reserved. © 2024.</p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
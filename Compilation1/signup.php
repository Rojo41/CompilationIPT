<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;

            height: 100vh;
        }

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

        img {
            width: 100px;
            height: 100px;
            display: block;
            margin: auto;
            /* Center the image horizontally */
            margin-bottom: 20px;
        }

        button {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="card">

            <div class="card-body">
                <div class="alert">
                    <?php if (isset($_SESSION['success_message'])) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_SESSION['success_message'] ?>
                        </div>
                        <?php unset($_SESSION['success_message']); ?>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['error_message'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_SESSION['error_message'] ?>
                        </div>
                        <?php unset($_SESSION['error_message']); ?>
                    <?php endif; ?>

                </div>
                <div class="form-container">
                    <form action="signupcheck.php" method="post">
                        <img src="images/buksu logo.png" alt="photo">
                        <h2 class="text-center mb-0"> SIGNUP</h2><br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account"></i></span>
                            <input type="text" class="form-control" placeholder="Full Name" name="name" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-email"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="email" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-key-variant"></i></span>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-switch"></i></span>
                            <select class="form-control" name="role" required>
                                <option value="" selected="" disabled="">Select Role</option>
                                <option value="Faculty">Faculty</option>
                                <option value="Student">Student</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-outline-primary" style="border-radius: 10px; align-items: center;">Sign Up</button>
                        </div>
                        <p class="small text-center mb-0 no-underline">Already have an account? <a class="small text-center mb-0 no-underline" href="login.php">Login</a></p>
                        <br>
                        <p class="small text-center mb-0" style="color: white;">All rights reserved. © 2024.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
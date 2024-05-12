<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/profileStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body style="height: 90vh;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <img class="mx-3" src="images/buksu logo.png" alt="logo" style="width: 50px; height: 50px;">
            BUKSU SYSTEM
        </a>
        <div class="d-flex gap-3 me-3">
            <img src="images/pfp.png" alt="profile" style="width: 50px; height: 50px; border-radius:50%;">
            <div>
                <?php
                $name = $_SESSION["name"];
                $email = $_SESSION["email"];
                echo "<p style='color:white; margin:0; font-weight:500;'>$name</p>";
                echo "<p style='color:white;font-size:13px'>$email</p>";
                ?>

            </div>
        </div>
    </nav>
    <div class="container-fluid" style="height: 100%;">
        <div class="row" style="height: 100%;">
            <nav id="sidebar" class="col-md-15 col-lg-2 d-md-block bg-light sidebar" style="height: 100%;">
                <ul class="nav flex-column" style="width: 100%;">
                    <li class="nav-item" style="width: 100%;">
                        <a href="admin.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block  text-start" style="width: 100%;">
                                <i class="fa fa-dashboard mr-2"></i>
                                Dashboard
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="profile.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block  text-start" style="width: 100%;">
                                <i class="fa fa-user mr-2"></i>
                                Profile
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="table.php" class="nav-link-active">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-table mr-2"></i>
                                Tables
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="addJs.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-add mr-2"></i>
                                Add
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="addPhp.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-add mr-2"></i>
                                Add with PHP
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="calculator.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-calculator mr-2"></i>
                                Calculator
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="addPhp.php" class="nav-link-active " style="width: 100%;">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </button>
                        </a>
                    </li>

                </ul>
            </nav>
            <main class="col-md-5 col-lg-10 ml-sm-autopx-md-4" role="main" style="margin-top:10px">
                <div class="upper-part">
                    <div class="homeProfile">
                        <p><span>Home</span> / Profile</p>
                    </div>
                </div>

                <div class="row" style="height: 90%;">
                    <div class="card col-4 p-4 ms-2" style="height: 100%;">
                        <div class="lower" style="height: 100%;">
                            <div>
                                <div class="profile-name">
                                    <img src="images/pfp.png" alt="profile" width="100px">
                                    <?php
                                    echo "<p>$name</p>";
                                    ?>
                                </div>
                                <div class="profile-details">
                                    <i>Email Address</i>
                                    <?php
                                    echo "<p>$email</p>";
                                    ?>
                                    <i>Phone number</i>
                                    <p>09123456789</p>

                                </div>
                            </div>
                            <div class="social">
                                <i>Social</i>
                                <div>
                                    <div class="icon">
                                        <i class="fa-brands fa-facebook"></i>

                                    </div>
                                    <div class="icon">
                                        <i class="fa-brands fa-instagram"></i>

                                    </div>
                                    <div class="icon">
                                        <i class="fa-brands fa-twitter"></i>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
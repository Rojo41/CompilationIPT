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

                        <a href="logout.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block text-start" style="width: 100%;" type="submit" name="logout" value="logout">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </button>
                        </a>



                    </li>

                </ul>
            </nav>
            <main class="col-md-5 col-lg-10 ml-sm-autopx-md-4" role="main" style="margin-top:10px">
                <div class="row">
                    <div class="col-md mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h5>Sample Table</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2201104208</td>
                                                <td>Rey ANthony Rojo</td>
                                                <td>reyanthony@gamil.com</td>
                                                <td>21</td>
                                                <td>Male</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            <tr>
                                                <td>2201104123</td>
                                                <td>Rojo Rey Anthony</td>
                                                <td>reyanthony@gamil.com</td>
                                                <td>20</td>
                                                <td>Male</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
<?php
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("Location: profile.php");
}
?>
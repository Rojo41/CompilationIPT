<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/tableStyle.css">
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
            <a href="table.php" class="nav-link-active " style="width: 100%;">
              <button class="btn btn-block text-start" style="width: 100%;">
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
                <div class="container-lg">
                  <div class="row">
                    <div class="col-12 justify-content-center">
                      <table class="mt-1">
                        <thead class="fw-bold"><!-- table headers -->
                          <tr>
                            <td rowspan="2" class="text-center" id="aqua">Units</td>
                            <td rowspan="2" class="text-center" id="aqua">Unit Title</td>
                            <td rowspan="2" class="text-center" id="marine">Teaching Hours</td>
                            <td colspan="4" class="text-center" id="dark-green">Theory Marks</td>
                          <tr>
                            <td class="aqua">B Level</td>
                            <td class="aqua">U Level</td>
                            <td class="aqua">A Level</td>
                            <td class="yellow">Total Marks</td>
                          </tr>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- table rows -->
                          <tr>
                            <td class="dark-green">I.</td>
                            <td class="maroon">Intro to Computing</td>
                            <td class="dark-green">5</td>
                            <td class="green" id="intro1">4</td>
                            <td class="green" id="intro2">4</td>
                            <td class="red" id="intro3">0</td>
                            <td class="purple" id="introTotal"></td>
                          </tr>
                          <tr>
                            <td>II.</td>
                            <td class="purple">Computer Programming</td>
                            <td class="marine">6</td>
                            <td class="red" id="comProg1">0</td>
                            <td class="green" id="comProg2">2</td>
                            <td class="green" id="comProg3">6</td>
                            <td class="yellow" id="comProgTotal">8</td>

                          </tr>
                          <tr>
                            <td class="purple">III.</td>
                            <td class="maroon">Integrative Programming</td>
                            <td class="marine">6</td>
                            <td class="green" id="iProg1">4</td>
                            <td class="green" id="iProg2">8</td>
                            <td class="red" id="iProg3">0</td>
                            <td class="maroon" id="iProgTotal">12</td>

                          </tr>
                          <tr>
                            <td colspan="5"></td>
                            <td>Total</td>
                            <td class="gradient" id="total">12</td>
                          </tr>
                        </tbody>

                      </table>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script src="Javascript/tableScript.js">
  </script>
</body>

</html>
<?php

session_start();

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

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css"> <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <style>
        nav i {
            margin: 0;
        }

        .card-body {
            overflow: hidden;
            /* Clear any potential overflow */
        }

        .image-container {
            display: inline-block;
            /* Display as inline-block */
            vertical-align: top;
            /* Align to the top */
        }

        .text-container {
            display: inline-block;
            /* Display as inline-block */
            vertical-align: top;
            /* Align to the top */
        }
    </style>
</head>

<body style="height: 90vh;">
    <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-between px-0" style="background-color: black;">
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
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-dashboard"></i>
                                Dashboard
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="profile.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block  text-start" style="width: 100%;">
                                <i class="fa fa-user "></i>
                                Profile
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="table.php" class="nav-link-active">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-table"></i>
                                Tables
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="addJs.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-add"></i>
                                Add
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="table.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-add"></i>
                                Add with PHP
                            </button>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 100%;">
                        <a href="calculator.php" class="nav-link-active" style="width: 100%;">
                            <button class="btn btn-block text-start" style="width: 100%;">
                                <i class="fa fa-calculator"></i>
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
            <main role="main" class="col-med-5 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
                <div class="row">
                    <div class="col-md mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h2>User Information Form</h2>

                                <form id="userInfoForm">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-id-card"></i></span>
                                        <input type="number" class="form-control" id="stud_id" placeholder="Student ID*" aria-label="Student ID" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-account"></i></span>
                                        <input type="text" class="form-control" id="fname" placeholder="First Name" aria-label="First Name" aria-describedby="addon-wrapping" required>
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name" aria-label="Last Name" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-email-check"></i></span>
                                        <input type="email" class="form-control" id="email" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-counter"></i></span>
                                        <input type="number" class="form-control" id="age" placeholder="Age" aria-label="Age" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-map-marker"></i></span>
                                        <input type="text" class="form-control" id="address" placeholder="Address" aria-label="Address" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <button style="display: block; width: 100%; margin: 0 auto;" class="btn btn-primary" type="button" onclick="addUser()">Add User</button>
                                </form>

                                <br>
                                <div id="liveAlertPlaceholder"></div>
                                <h4>STUDENTS LIST</h4>
                                <table id="studentTable" class="table table-bordered secondary">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Age</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Check if there are any rows returned from the query
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["stud_id"] . "</td>";
                                                echo "<td>" . $row["fname"] . " " . $row["lname"] . "</td>";
                                                echo "<td>" . $row["email"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["age"] . "</td>";
                                                echo "<td>";
                                                echo "<button class='btn btn-info edit-btn' type='button' value='Edit' style='margin-right: 4px;' onclick='openUpdateModal(" . $row["stud_id"] . ")'><i class='mdi mdi-pencil' ></i></button>";
                                                echo "<button class='btn btn-danger delete-btn' type='button' value='Delete' onclick='deleteUser(" . $row["stud_id"] . ")'><i class='mdi mdi-delete'></i></button>";
                                                echo "</td>";
                                                // Add actions here if needed
                                                echo "</tr>";
                                            }
                                            echo "</tbody></table>";

                                            // Echo out the DataTables initialization code here
                                            echo "<script>
                    $(document).ready(function() {
                        $('#studentTable').DataTable(); // Initialize DataTables for your table
                    });
                    </script>";
                                        } else {
                                            // If no rows are returned, display a message
                                            echo "<p>No data found.</p>";
                                        }

                                        // Check for errors in the SQL query execution
                                        if (!$result) {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Update User Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="updateForm">
                                    <input type="hidden" id="update_stud_id" value="">
                                    <div class="form-group">
                                        <label for="update_fname">First Name</label>
                                        <input type="text" class="form-control" id="update_fname" placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_lname">Last Name</label>
                                        <input type="text" class="form-control" id="update_lname" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_email">Email</label>
                                        <input type="email" class="form-control" id="update_email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_age">Age</label>
                                        <input type="number" class="form-control" id="update_age" placeholder="Age" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_address">Address</label>
                                        <input type="text" class="form-control" id="update_address" placeholder="Address" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="updateUser()">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </main>


            <script>
                $(document).ready(function() {
                    $('#studentTable').DataTable(); // Initialize DataTables for your table
                });
            </script>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> <!-- DataTables JS -->
            <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script> <!-- DataTables Bootstrap 4 JS -->


            <script>
                function validateEmail(email) {
                    // Regular expression pattern to check for "@" symbol
                    var pattern = /\S+@\S+\.\S+/;
                    return pattern.test(email);
                }

                function addUser() {
                    // Get user input values
                    let stud_id = $("#stud_id").val();
                    let fname = $("#fname").val();
                    let lname = $("#lname").val();
                    let email = $("#email").val();
                    let age = $("#age").val();
                    let address = $("#address").val();

                    // Check if any of the required fields are empty
                    if (stud_id === "" || fname === "" || lname === "" || email === "" || age === "" || address === "") {
                        // Display error message if any required field is empty
                        $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Please fill in all the required fields.</div>`);

                        return; // Exit function if any required field is empty
                    }

                    // Validate email
                    if (!validateEmail(email)) {
                        // Display error message if email is invalid
                        $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Please enter a valid email address.</div>`);
                        return; // Exit function if email is invalid
                    }

                    // Make AJAX request to add_user.php
                    $.ajax({
                        url: 'addUser.php',
                        method: 'POST',
                        data: {
                            stud_id: stud_id,
                            fname: fname,
                            lname: lname,
                            email: email,
                            age: age,
                            address: address
                        },
                        success: function(response) {
                            // Reload the page
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                            // Display success message after a short delay
                            setTimeout(function() {
                                location.reload();
                            }, 2000); // Adjust the delay time as needed
                        },

                        error: function(xhr, status, error) {
                            // Display error message
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                        }
                    });
                }

                function deleteUser(stud_id) {
                    var confirmation = confirm("Are you sure you want to delete this data?");
                    if (confirmation) {
                        // Make AJAX request to delete_user.php
                        $.ajax({
                            url: 'deleteUser.php',
                            method: 'POST',
                            data: {
                                stud_id: stud_id
                            },
                            success: function(response) {
                                // Reload the page

                                $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                                // Display success message after a short delay
                                setTimeout(function() {
                                    location.reload();
                                }, 2000); // Adjust the delay time as needed
                            },
                            error: function(xhr, status, error) {
                                // Display error message
                                $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                            }
                        });
                    }
                }


                function openUpdateModal(stud_id) {
                    $.ajax({
                        url: 'getUser.php',
                        method: 'POST',
                        data: {
                            stud_id: stud_id
                        },
                        success: function(response) {
                            let user = JSON.parse(response);
                            $("#update_stud_id").val(user.stud_id);
                            $("#update_fname").val(user.fname);
                            $("#update_lname").val(user.lname);
                            $("#update_email").val(user.email);
                            $("#update_age").val(user.age);
                            $("#update_address").val(user.address);
                            $("#updateModal").modal('show');
                        },
                        error: function(xhr, status, error) {
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                        }
                    });
                }

                function updateUser() {
                    // Get updated user information from the form
                    let stud_id = $("#update_stud_id").val();
                    let fname = $("#update_fname").val();
                    let lname = $("#update_lname").val();
                    let email = $("#update_email").val();
                    let age = $("#update_age").val();
                    let address = $("#update_address").val();

                    // Make AJAX request to update_user.php
                    $.ajax({
                        url: 'updateUser.php',
                        method: 'POST',
                        data: {
                            stud_id: stud_id,
                            fname: fname,
                            lname: lname,
                            email: email,
                            age: age,
                            address: address
                        },
                        success: function(response) {
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                            // Reload the page after a short delay
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        },
                        error: function(xhr, status, error) {
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                        }
                    });
                }
            </script>

        </div>
    </div>


</body>
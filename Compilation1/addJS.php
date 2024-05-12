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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.min.css" integrity="sha512-/k658G6UsCvbkGRB3vPXpsPHgWeduJwiWGPCGS14IQw3xpr63AEMdA8nMYG2gmYkXitQxDTn6iiK/2fD4T87qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@pictogrammers/bitmask-to-svg@0.9.1/lib/bitmaskToPath.min.js"></script>
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
						<a href="#" class="nav-link-active" style="width: 100%;">
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
						<div class="card" style="width: 600px;">
							<div class="card-header">
								ADD USER
							</div>
							<div class="card-body">
								<form id="userInfoForm">
									<div class="input-group mb-3">
										<span class="input-group-text" id="basic-addon1"><i class="mdi mdi-id-card"></i></span>
										<input type="number" class="form-control" id="stud_id" placeholder="Student ID" aria-label="Student ID" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account"></i></span>

										<input type="text" class="form-control" id="fname" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1">

										<input type="text" class="form-control" id="lname" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<span class="input-group-text" id="basic-addon1"><i class="mdi mdi-email"></i></span>
										<input type="email" class="form-control" id="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account"></i></span>
										<input type="number" class="form-control" id="age" placeholder="Age" aria-label="Age" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<span class="input-group-text" id="basic-addon1"><i class="mdi mdi-map-marker"></i></span>
										<input type="text" class="form-control" id="address" placeholder="Address" aria-label="Address" aria-describedby="basic-addon2">
									</div>
									<button style="width: 100%; display: block;" class="btn btn-primary" type="button" type="button" onclick="addUser()" id="add"> Add User</button>
									<button style="width: 100%; display: none;" class="btn btn-primary" type="button" type="button" onclick="updateUser()" id="edit"> Update</button>
								</form>
							</div>
						</div>

						<div id="liveAlert"></div>
						<div class="input-group mb-3 mt-3">

							<input type="text" class="form-control" id="search" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
							<span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-search fs-5"></i></span>
						</div>
						<table id="userTable" class="table">
							<thead>
								<tr>
									<th scope="col">ID Number</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Email</th>
									<th scope="col">Age</th>
									<th scope="col">Address</th>
									<th scope="col">Actions</th>
								</tr>
							</thead>
							<tbody id="userTableBody">
								<!--- this is where the data will be added -->
							</tbody>
						</table>
					</div>
				</div>
			</main>
		</div>
	</div>
	<script>
		var selectedRow;

		function addUser() {
			let stud_id = $("#stud_id").val();
			let fname = $("#fname").val();
			let lname = $("#lname").val();
			let email = $("#email").val();
			let age = $("#age").val();
			let address = $("#address").val();

			if (stud_id !== '' && fname !== '') {
				let newRow = $("<tr></tr>");

				newRow.append(`
          <td id="userID">${stud_id}</td>
          <td id="userFName">${fname}</td>
          <td id="userLName">${lname}</td>
          <td id="userEmail">${email}</td>
          <td id="userAge">${age}</td>
          <td id="userAddress">${address}</td>
          <td>
              <button class="btn btn-warning type="button" value="Edit"><i class="mdi mdi-pencil"></i></button>
              <button class="btn btn-danger" type="button" value="Delete"><i class="mdi mdi-delete"></i></button>
          </td>
        `);

				$("#userTableBody").append(newRow);
				$("#liveAlert").html('<div class="alert alert-success" role="alert">Data has been Added.</div>');
			} else {
				$("#liveAlert").html('<div class="alert alert-danger" role="alert">Please Filled In the Required Data.</div>');
			}

			$("#stud_id").val("");
			$("#fname").val("");
			$("#lname").val("");
			$("#email").val("");
			$("#age").val("");
			$("#address").val("");
		}

		function deleteUser() {
			var confirmation = confirm("Are you sure to delete this data?");
			if (confirmation) {
				$(this).closest("tr").remove();
				$("#liveAlert").html('<div class="alert alert-success" role="alert">Data has been deleted.</div>');
			}
		}
		$(document).ready(function() {
			$(document).on("click", ".btn-danger", deleteUser);
		});

		function editUser() {
			$("#edit").css("display", "block");
			$("#add").css("display", "none");
			selectedRow = $(this).closest("tr");
			$("#stud_id").val(selectedRow.find("td:eq(0)").text());
			$("#fname").val(selectedRow.find("td:eq(1)").text());
			$("#lname").val(selectedRow.find("td:eq(2)").text());
			$("#email").val(selectedRow.find("td:eq(3)").text());
			$("#age").val(selectedRow.find("td:eq(4)").text());
			$("#address").val(selectedRow.find("td:eq(5)").text());

		}
		$(document).ready(function() {
			$(document).on("click", ".btn-warning", editUser);
		});

		function updateUser() {
			$("#edit").css("display", "none");
			$("#add").css("display", "block");
			let stud_id = $("#stud_id").val();
			let fname = $("#fname").val();
			let lname = $("#lname").val();
			let email = $("#email").val();
			let age = $("#age").val();
			let address = $("#address").val();

			selectedRow.find("td:eq(0)").html(stud_id);
			selectedRow.find("td:eq(1)").html(fname);
			selectedRow.find("td:eq(2)").html(lname);
			selectedRow.find("td:eq(3)").html(email);
			selectedRow.find("td:eq(4)").html(age);
			selectedRow.find("td:eq(5)").html(address);
			$("#liveAlert").html('<div class="alert alert-success" role="alert">Data has been Edited.</div>');




			$("#stud_id").val("");
			$("#fname").val("");
			$("#lname").val("");
			$("#email").val("");
			$("#age").val("");
			$("#address").val("");


		}
		/* Search */
		$("#search").keyup(function() {
			var value = this.value.toLowerCase().trim();

			$("#userTableBody").find("tr").each(function(index) {
				var id = $(this).find("td").first().text().toLowerCase().trim();
				$(this).toggle(id.indexOf(value) !== -1);
			});
		});
	</script>

</body>

</html>
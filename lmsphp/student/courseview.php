<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style1.css">

	<title>Home</title>
</head>
<body>


	<!-- SIDEBAR -->
	<?php include 'sidebar.php';?>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i>.</button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-envelope'></i>
			</a>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
	         <h1>Account</h1>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
				
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a href="#">My Courses</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Course Name</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
                <div class="order">
                    <table>
						<thead>
                            <tr>
                                <th>Announcements</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="answer.html">Course Syllabus</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
			
            <div class="table-data">
				<div class="activity-part">
					<h1>1 - Introduction</h1>
				</div>

                <div class="order">
					<table>
						<thead>
							<tr>
								<th>Activities</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="answer.html">Lecture 1a</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Lecture 1b</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Lecture 1c</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Assignment 1</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Assignment 2</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td> 
							</tr>
						</tbody>
					</table>
                </div>
        </div>

		<div class="table-data">
			<div class="activity-part">
				<h1>2 - Key Technologies and Design Process</h1>
			</div>
			<div class="order">
				<table>
					<thead>
						<tr>
							<th>Activities</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<a href="answer.html">Lecture 1a</a>
								<input type="checkbox" name="checkbox" placeholder="Password" required>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">Lecture 1b</a>
								<input type="checkbox" name="checkbox" placeholder="Password" required>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">Lecture 1c</a>
								<input type="checkbox" name="checkbox" placeholder="Password" required>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">Assignment 1</a>
								<input type="checkbox" name="checkbox" placeholder="Password" required>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">Assignment 2</a>
								<input type="checkbox" name="checkbox" placeholder="Password" required>
							</td> 
						</tr>
					</tbody>
				</table>
			</div>

			<div class="table-data">
				<div class="activity-part">
					<h1>3 - Embedded System Structure</h1>
				</div>
				<div class="order">
					<table>
						<thead>
							<tr>
								<th>Activities</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="answer.html">Lecture 1a</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Lecture 1b</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Lecture 1c</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Assignment 1</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Assignment 2</a>
									<input type="checkbox" name="checkbox" placeholder="Password" required>
								</td> 
							</tr>
						</tbody>
					</table>
				</div>
	</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>
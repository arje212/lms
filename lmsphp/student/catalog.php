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
					<h1>Catalog</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Course</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Dashboard </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#catalog-link">Catalog </a>
						</li>
					</ul>
				</div>
			</div>

			<div class="search-featured">
				<div class="featured-items" id="box-1">
					<form action="" method="">
						<h3 class="box-title">Search</h3>
						<label for="label">Name</label><br>
						<input type="text" id="name" placeholder="Name"><br>
						<label for="Resource_type">Resource type</label><br>
						<input type="text" id="resource_type" placeholder="All types"><br>
						<label for="subjects">Subjects</label><br>
						<input type="text" id="subjects" placeholder="None"><br><br>
						<input type="button" value="Search">
					</form>
								
				</div>
				<div class="featured-items" id="box-2">
					<h3 class="box-title">Featured Items</h3>
				</div>
			</div>	

			<div class="table-data1">
				<div class="order">
					<div class="head">
					</div>
						<div class="box-container">
							<div class="box">
							<img src="img/sampleimg.png" alt="">
								<p>Activity</p>
								<a href="courseview.html">View</a>
							</div>
					
							<div class="box">
							<img src="img/sampleimg.png" alt="">
							  <p>Activity</p>
							  <a href="#">View</a>
							</div>
					
							<div class="box">
							<img src="img/sampleimg.png" alt="">
							  <p>Activity</p>
							  <a href="#">View</a>
							</div>
					
							<div class="box">
							<img src="img/sampleimg.png" alt="">
							  <p>Sample course</p>
							  <a href="#">View</a>
							</div>
					
							<div class="box">
							<img src="img/sampleimg.png" alt="">
							  <p>Activity</p>
							  <a href="#">View</a>
							</div>
					
							<div class="box">
							  <img src="img/sampleimg.png" alt="">
							  <p>Activity</p>
							  <a href="#">View</a>
							</div>
						</div>

						
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="script.js"></script>
</body>
</html>
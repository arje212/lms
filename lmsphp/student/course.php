<?php 

session_start();
// if(isset($_SESSION['role']))
// {	
// 	if($_SESSION['role'] != 'student' && $_SESSION['role'] != 'admin')
// 	{
// 		header("Location: dashboard.php");
// 	}
// }
// else
// {
// 	header("Location: ../index.php");
// }
?>


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
							<a class="active" href="#">Course Overview</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data1">
				<div class="order">
					<div class="head">
					</div>
						<div class="box-container">
							<div class="box">
								<img src="../student/img/book.jpg" alt="">
								<p><h1><?php echo $_SESSION['TeacherUser']; ?></h1></p>
								<a href="courseview.html">View</a>
							</div>
					
							<div class="box">
							  <img src="../student/img/history.png" alt="">
							  <p>Sample course</p>
							  <a href="#">View</a>
							</div>
					
							<div class="box">
							  <img src="../student/img/chem.png" alt="">
							  <p>Sample course</p>
							  <a href="#">View</a>
							</div>
					
							<div class="box">
							  <img src="../lms-project/img/sci.png" alt="">
							  <p>Sample course</p>
							  <a href="#">View</a>
							</div>
					
							<div class="box">
							  <img src="../lms-project/img/par.png" alt="">
							  <p>Sample course</p>
							  <a href="#">View</a>
							</div>
					
							<div class="box">
							  <img src="../lms-project/img/mauntain.png" alt="">
							  <p>Sample course</p>
							  <a href="#">View</a>
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
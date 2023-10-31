<?php 

session_start();
// if(isset($_SESSION['role']))
// {	
// 	if($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'teacher')
// 	{
// 		header("Location: home.php");
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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
	<title>Home</title>
</head>
<body>

	<div class="nav-links">
		<!-- SIDEBAR -->
		<?php include 'sidebar.php';?>
		<!-- SIDEBAR -->
	
	<img src="../book.jpg" alt="" srcset="">
	
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
					<div class="tooltip" id="tooltip">
						Messages.
				   </div>
				</a>
				<a href="#" class="notification" >
					<i class='bx bxs-bell' onclick="toggleNotifi()"></i>
					<span class="num" >8</span>
					<div class="tooltip" id="tooltip" >
						 Notification.
					</div>
					<div class="notifi-box" id="box">
						<h2>Notifications <span>17</span></h2>
						<div class="notifi-item">
							<img src="../lms-project/img/eay.jpg" alt="img">
							<div class="text">
							   <h4>Kenn Mark</h4>
							   <p>Hey dud</p>
							</div> 
						</div>
			
						<div class="notifi-item">
							<img src="../lms-project/img/manalo.jpg" alt="img">
							<div class="text">
							   <h4>Ederson Manalo</h4>
							   <p>Pa kopya Assingment</p>
							</div> 
						</div>
			
						<div class="notifi-item">
							<img src="../lms-project/img/menard.jpg" alt="img">
							<div class="text">
							   <h4>Menard Gonzales</h4>
							   <p>par asan ka?</p>
							</div> 
						</div>
			
						<div class="notifi-item">
							<img src="../lms-project/img/brian.jpg" alt="img">
							<div class="text">
							   <h4>Mark Bryan Silva  </h4>
							   <p>Ta kape pre</p>
							</div> 
						</div>
			
						<div class="notifi-item">
							<img src="../lms-project/img/centeno.jpg" alt="img">
							<div class="text">
							   <h4>aaron Centeno</h4>
							   <p>Uwi na ko pre nakakatampo na</p>
							</div> 
						</div>
			
					</div>
				
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
						<h1><?php echo $_SESSION['User']; ?></h1>
						<ul class="breadcrumb">
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li><i class='bx bx-chevron-right' ></i></li>
							<li>
								<a class="active" href="home.html">Home</a>
							</li>
						</ul>
					</div>
				</div>
	
				<ul class="box-info">
					<li>
						<i class='bx bxs-calendar-check' ></i>
						<span class="text">
							<p>Deadline</p>
							
						</span>
					</li>
					<li>
						<i class='bx bxs-chalkboard'></i>
						<span class="text">
							<p>Assingment</p>
						</span>
					</li>
					<li>
						<i class='bx bx-task'></i>
						<span class="text">
							<p>Activty</p>
						</span>
					</li>
					<li>
						<i class='bx bx-task'></i>
						<span class="text">
							<p>Announcements</p>
						</span>
					</li>
				</ul>
	
	
				
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Recent Activity</h3>
							<i class='bx bx-search' ></i>
							<i class='bx bx-filter' ></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Subject</th>
									<th>Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<p>Sample Course</p>
									</td>
									<td>09-19-2023</td>
									<td><span class="status completed">Completed</span></td>
								</tr>
								<tr>
									<td>
										<p>Sample Course</p>
									</td>
									<td>09-19-2023</td>
									<td><span class="status pending">Pending</span></td>
								</tr>
								<tr>
									<td>
										<p>Sample Course</p>
									</td>
									<td>09-19-2023</td>
									<td><span class="status process">Process</span></td>
								</tr>
								<tr>
									<td>
										<p>Sample Course</p>
									</td>
									<td>09-19-2023</td>
									<td><span class="status pending">Pending</span></td>
								</tr>
								<tr>
									<td>
										<p>Sample Course</p>
									</td>
									<td>09-19-2023</td>
									<td><span class="status completed">Completed</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="todo">
						<div class="head">
							<h3>Todos</h3>
							<i class='bx bx-plus' ></i>
							<i class='bx bx-filter' ></i>
						</div>
						<ul class="todo-list">
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
							<li class="not-completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
							<li class="not-completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded' ></i>
							</li>
						</ul>
					</div>
					<div class="table-data">
						<div class="order">
							<div class="head">
								<h3>Grade</h3>
								<i class='bx bx-search' ></i>
								<i class='bx bx-filter' ></i>
							</div>
							<table>
								<thead>
									<tr>
										<th>Subject</th>
										<th>Grade</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<p>Math</p>
										</td>
										<td>95</td>
										<td><span class="status completed">Pass</span></td>
									</tr>
									<tr>
										<td>
											<p>Science</p>
										</td>
										<td>74</td>
										<td><span class="status pending">Fail</span></td>
									</tr>
									<tr>
										<td>
											<p>English</p>
										</td>
										<td>98</td>
										<td><span class="status process">Inc</span></td>
									</tr>
									<tr>
										<td>
											<p>Sample Subject</p>
										</td>
										<td>73</td>
										<td><span class="status pending">Fail</span></td>
									</tr>
									<tr>
										<td>
											<p>Sample Subject</p>
										</td>
										<td>94</td>
										<td><span class="status completed">Pass</span></td>
									</tr>
								</tbody>
							</table>
						</div>
				</div>
				<div class="table-data1">
					<div class="order">
						<div class="head">
							<h3>Course overview</h3>
							<i class='bx bx-search' ></i>
							<i class='bx bx-filter' ></i>
						</div>
							<div class="box-container">
								<div class="box">
									<img src="../lms-project/img/book.jpg" alt="">
									<p>Sample course</p>
									<a href="#">View</a>
								</div>
						
								<div class="box">
								  <img src="../lms-project/img/history.png" alt="">
								  <p>Sample course</p>
								  <a href="#">View</a>
								</div>
						
								<div class="box">
								  <img src="../lms-project/img/chem.png" alt="">
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
					
			<!--cat box-->
			
			</main>
			<div class="chatbox-wrapper">
				<div class="chatbox-toggle">
					<i class='bx bx-message-dots'></i>
				</div>
				<div class="chatbox-message-wrapper">
					<div class="chatbox-message-header">
						<div class="chatbox-message-profile">
							<img src="../lms-project/img/manalo.jpg" alt="" class="chatbox-message-image">
							<div>
								<h4 class="chatbox-message-name">Alliah Ballesteros Donieto</h4>
								<p class="chatbox-message-status">online</p>
							</div>
						</div>
						<div class="chatbox-message-dropdown">
							<i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
							<ul class="chatbox-message-dropdown-menu">
								<li>
									<a href="#">Search</a>
								</li>
								<li>
									<a href="#">Report</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="chatbox-message-content">
						<h4 class="chatbox-message-no-message">You don't have message yet!</h4>
					</div>
					<div class="chatbox-message-bottom">
						<form action="#" class="chatbox-message-form">
							<textarea rows="1" placeholder="Type message..." class="chatbox-message-input"></textarea>
							<button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
						</form>
					</div>
				</div>
			</div>
			<!-- MAIN -->
		</section>
	<!-- CONTENT -->
	<script src="scriptchat.js"></script>
	<script src="script.js"></script>
</body>
</html>
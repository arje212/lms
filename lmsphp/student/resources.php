<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
            <div class="main-container">
                <div class="flex-container">
                    <div class="flex-item">
                        <div id="friends">
                            <h2>Resources</h2>
                        </div>
            
                        <div id="my-teachers">
                            <h2>Upload files</h2>
                        </div>
                    </div>
                </div>
                <hr>
					<div class="users-document">
						<h4>Click the file to access:</h4>
				   </div>

				<div class="accordion"  id="filename-size-create">
					<div><button>Filename &nbsp;&nbsp;&nbsp;<i class="bi bi-caret-down-fill"></i></button></div>
					<div class="size-create">
						<div id="size"><button>Size &nbsp;&nbsp;&nbsp;<i class="bi bi-caret-down-fill"></i></button></div>
					<div id="create"><button>Create &nbsp;&nbsp;&nbsp;<i class="bi bi-caret-down-fill"></i></button></div>
					</div>
				</div>

					<div class="panel">
						<div class="document">
							<div class="samples">1 &nbsp;&nbsp; Sample Document 1</div>
				
							<div class="size-doc">
								<div class="file-size">234KB</div>
							<div class="date">03/17/23</div>
							</div>
							
						</div>
				
						<div class="document">
							<div class="samples">2 &nbsp;&nbsp; Sample Document 2</div>
				
							<div class="size-doc">
								<div class="file-size">251KB</div>
							<div class="date">03/17/23</div>
							</div>
							
						</div>
				
						<div class="document">
							<div class="samples">3 &nbsp;&nbsp; Sample Document 3</div>
				
							<div class="size-doc">
								<div class="file-size">260KB</div>
							<div class="date">03/17/23</div>
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
    <script src="interactive.js"></script>
</body>
</html>
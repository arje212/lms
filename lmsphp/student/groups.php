<?php 

session_start();
if (!isset($SESSION['LoginUser']))
{
	header("Location: ../index.php");
}

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
							<a class="active" href="#">Your Clubs</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="Group-container">
                <div class="item-container">
                    <div class="img-container">
                        <img src="../lms-project/img/group1.png" alt="Event image">
                    </div>
        
                    <div class="body-container">
                        <div class="overlay"></div>
        
                        <div class="event-info">
                            <p class="title">The TCC Spectrum Literary Porforlio</p>
                            <div class="separator"></div>
                            <p class="info">Organization</p>
                            
        
                            <div class="additional-info">
                                <p class="info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Tanauan city College
                                </p>
                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                    Sep 19, 2021
                                </p>
        
                                <p class="info description">
                                    Be part of the The TCC Spectrum Literary Folio as we open the organization for contribYOUtors! If you have the talent in drawing, sketching, photography and writing, this is your chance to
                                     share your original and creative works with us! This is open for all members of the TCC Family.<span>more...</span>
                                </p>
                            </div>
                        </div>
                        <button class="action">Join now</button>
                    </div>
                </div>
        
                <div class="item-container">
                    <div class="img-container">
                        <img src="../lms-project/img/img2.png" alt="Event image">
                    </div>
        
                    <div class="body-container">
                        <div class="overlay"></div>
        
                        <div class="event-info">
                            <p class="title">Love Song Writing Contest</p>
                            <div class="separator"></div>
                            <p class="info">Club</p>
            
        
                            <div class="additional-info">
                                <p class="info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Tanauan city College
                                </p>
                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                     feb 8, 2021
                                </p>
        
                                <p class="info description">
                                    Do you think you can write the Ultimate Love ❤️ Song? Watch out for Iskolar ng Lungsod Council presents 
                                    “Love song writing contests” THEME: "Uso pa ba ang Harana" Share your love story to everyone ❤️ <span>more...</span>
                                </p>
                            </div>
                        </div>
                        <button class="action">Join Now</button>
                    </div>
                </div>
        
                <div class="item-container">
                    <div class="img-container">
                        <img src="../lms-project/img/group3.png" alt="Event image">
                    </div>
        
                    <div class="body-container">
                        <div class="overlay"></div>
        
                        <div class="event-info">
                            <p class="title">What's Your Story?</p>
                            <div class="separator"></div>
                            <p class="info">
                                Club
                            </p>
                           
        
                            <div class="additional-info">
                                <p class="info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Tanauan city college
                                </p>
                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                    feb 8, 2021
                                </p>
        
                                <p class="info description">
                                    t’s the month of Love, and we wanted to share something with you!! “TCCIANS 7 YEARS OF LOVE” (giving back to the community) Show your LOVE and SUPPORT make a Video Presentation about the things that make you a proud TCCIANS <span>more...</span>
                                </p>
                            </div>
                        </div>
                        <button class="action">Join Now</button>
                    </div>
                </div>
        
                <div class="item-container">
                    <div class="img-container">
                        <img src="./images/img4.jpg" alt="Event image">
                    </div>
        
                    <div class="body-container">
                        <div class="overlay"></div>
        
                        <div class="event-info">
                            <p class="title">Invictus Animus Omega</p>
                            <div class="separator"></div>
                            <p class="info">Club</p>
                
        
                            <div class="additional-info">
                                <p class="info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Tanauan City College
                                </p>
                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                    Dec 1, 2020
                                </p>
        
                                <p class="info description">
                                    Our pride and honor, These first team for our MLBB Students who will be competing to Youth Esports Tambayan Tournament together with other schools, campuses and universities<span>more...</span>
                                </p>
                            </div>
                        </div>
                        <button class="action">Join Now</button>
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
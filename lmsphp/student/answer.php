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
	<section id="sidebar">
		<img src="../lms-project/img/logo1.png" alt="logo">
		<h1>Web-Base Calamba Institute</h1>
        <p>Learning Management Sytem</p>
		<ul class="side-menu top">
			<li class="active">
				<a href="dashboard.html">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="coarse.html">
					<i class='bx bxs-graduation'></i>
					<span class="text">Course</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Paths</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Goals</span>
				</a>
			</li>
			<li>
				<a href="groups.html">
					<i class='bx bxs-group' ></i>
					<span class="text">Groups</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-credit-card'></i>
					<span class="text">Catalog</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-user-pin'></i>
					<span class="text">User</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-package'></i>
					<span class="text">Resources</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
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
		<div class="container">
			<div class="toolbar">
				<div class="head">
					<input type="text" placeholder="Filename" value="untitled" id="filename">
					<select onchange="fileHandle(this.value); this.selectedIndex=0">
						<option value="" selected="" hidden="" disabled="">File</option>
						<option value="new">New file</option>
						<option value="txt">Save as txt</option>
						<option value="pdf">Save as pdf</option>
					</select>
					<select onchange="formatDoc('formatBlock', this.value); this.selectedIndex=0;">
						<option value="" selected="" hidden="" disabled="">Format</option>
						<option value="h1">Heading 1</option>
						<option value="h2">Heading 2</option>
						<option value="h3">Heading 3</option>
						<option value="h4">Heading 4</option>
						<option value="h5">Heading 5</option>
						<option value="h6">Heading 6</option>
						<option value="p">Paragraph</option>
					</select>
					<select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
						<option value="" selected="" hidden="" disabled="">Font size</option>
						<option value="1">Extra small</option>
						<option value="2">Small</option>
						<option value="3">Regular</option>
						<option value="4">Medium</option>
						<option value="5">Large</option>
						<option value="6">Extra Large</option>
						<option value="7">Big</option>
					</select>
					<div class="color">
						<span>Color</span>
						<input type="color" oninput="formatDoc('foreColor', this.value); this.value='#000000';">
					</div>
					<div class="color">
						<span>Background</span>
						<input type="color" oninput="formatDoc('hiliteColor', this.value); this.value='#000000';">
					</div>
				</div>
				<div class="btn-toolbar">
					<button onclick="formatDoc('undo')"><i class='bx bx-undo' ></i>w</button>
					<button onclick="formatDoc('redo')"><i class='bx bx-redo' ></i>f</button>
					<button onclick="formatDoc('bold')"><i class='bx bx-bold'></i>f</button>
					<button onclick="formatDoc('underline')"><i class='bx bx-underline' ></i>f</button>
					<button onclick="formatDoc('italic')"><i class='bx bx-italic' ></i>f</button>
					<button onclick="formatDoc('strikeThrough')"><i class='bx bx-strikethrough' ></i>f</button>
					<button onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left' ></i>s</button>
					<button onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle' ></i>s</button>
					<button onclick="formatDoc('justifyRight')"><i class='bx bx-align-right' ></i>s</button>
					<button onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify' ></i>dc</button>
					<button onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol' ></i>d</button>
					<button onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul' ></i>d</button>
					<button onclick="addLink()"><i class='bx bx-link' ></i>d</button>
					<button onclick="formatDoc('unlink')"><i class='bx bx-unlink' ></i>d</button>
					<button id="show-code" data-active="false">&lt;/&gt;</button>
				</div>
			</div>
			<div id="content1" contenteditable="true" spellcheck="false">
				Answer
			</div>
		</div>
		<div class="button-container">
			<button class="submit-button">Submit</button>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="script.js"></script>
</body>
</html>
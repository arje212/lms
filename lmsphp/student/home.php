<?php 

session_start();
// if(isset($_SESSION['role']))
// {	
// 	if($_SESSION['role'] != 'student' && $_SESSION['role'] != 'admin')
// 	{
// 		header("Location: course.php");
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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style1.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Home Page</title>
</head>

<body>
  <nav class="navbar">
    <img src="../lms-project/img/logo1.png" alt="logo">

      <div class="logo">
        <h1>Web-Base Calamba Institute</h1>
        <p>Learning Management Sytem</p>
      </div>
    
      <div class="nav-links">
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">LMS</a></li>
        </ul>
      </div>
      <div class="dropdown">  
        <button class="dropbtn" id="show-login-form">Log in</button>   
      </div>  
      </div>  
    </div>
  </nav>
  <section class="homepage" id="home">
    <div class="home-content">
       <h1>Calamba Institute Management <br> Sytem</h1>
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
         when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
         It has survived not only five centuries, but also the leap into electronic typesetting, 
         remaining essentially unchanged. 
         It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
          and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> 
          <div class="field">
            <input type="submit" class="btn" name="submit" value="GET IN TOUCH" required>
        </div>    
    </div>
    <img src="../lms-project/img/pic.jpg" alt="logo">
  </section>
  <div class="home-about">
      <h1>WELCOME TO LEARNING MANAGEMENT SYSTEM</h1>
    <div class="about-content">
          <div class="iner-img">
            <img src="../lms-project/img/img4.png" alt="logo" >
            <h2>One click modules</h2>
            <p>"Unlock your potential and achieve your goals with our module,
            where learning is just a click away - study smarter, not harder!"</p>
          </div>
          <div class="iner-img">
            <img src="../lms-project/img/img1.png" alt="logo" >
            <h2>Interactive activities</h2>
            <p>"Engage your students like never before with our Interactive Activities module, and simplify your
              assessment process with our Easy Assessment module - revolutionizing the way you teach and evaluate student progress!"</p>
          </div>
          <div class="iner-img">
            <img src="../lms-project/img/img3.png" alt="logo" >
            <h2>GameFication</h2>
            <p>"Level up your academic achievements with our GameFi Academic Achievement modules - 
              where learning becomes a game, and every accomplishment is rewarded, taking your academic journey to the next level!"</p>
          </div>
          <div class="iner-img">
            <img src="../lms-project/img/img2.png" alt="logo" >
            <h2>Hassle free attendance traker</h2>
            <p>"Say goodbye to the hassle of attendance tracking and hello to easy and efficient
              attendance management with
              our innovative module!"</p>
          </div>
    </div>
  </div>
    <i class='fa-solid fa-map-location'><span class="icon">Chipeco Ave, Halang 4028 Calamba, Philippines</span></i><br/>
    <i class='fas fa-phone'><span class="icon">(049) 545 2446</span></i><br/>
    <i class='fa fa-facebook-square'><span class="icon">Calamba Institute</span></i>
      <!-- Button to trigger the login form -->
      <div class="login-container" id="login-container">
        <div class="image-logo">
            <img src="../lms-project/img/logo1.png" alt="logo">
           </div>
        <h1>Calamba Institute<br> Learning Management<br> Sytem</h1>
        <h2>Log in us</h2>
        <div class="select-wrapper">
          <select id="mySelect" >
                <option value="Student">Select</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
                <option value="Admin">Admin</option>
            </select>
        </div>
        <div class="button-box">
            <div id="btn"></div>
        </div>
        <span class="close-button" id="close-button">&times;</span>
        <form class="login-form" action="#">
            <input type="text" class="input-field" placeholder="Username" required><br><br>
            <input type="password" class="input-field" placeholder="Password" required><br><br>
            <button type="submit" class="submit-btn">Login</button>
        </form>
        <div class="register-link">
          Don't have account? <a href="register.html">Sign Up Now</a>
      </div>
    </div>
    <!-- JavaScript to show/hide the login form -->
    <script>
        const showLoginFormButton = document.getElementById('show-login-form');
        const loginContainer = document.getElementById('login-container');
        const closeButton = document.getElementById('close-button');

        showLoginFormButton.addEventListener('click', () => {
            loginContainer.style.display = 'block';
        });

        closeButton.addEventListener('click', () => {
            loginContainer.style.display = 'none';
        });
    </script>
</body>

</html>
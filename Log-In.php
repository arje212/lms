<?php
session_start();
require_once "conn.php";


$role="";
if(isset($_POST["btnlogin"])){

    $username = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM acc WHERE username='$username' AND password = '$password'";

    $result = mysqli_query($conn, $query);


    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if($row["role"] == "admin")
            {
                $_SESSION['User'] = $row["username"];
                $_SESSION['role'] = $row["role"];
                header('Location: ../lmsphp/student/dashboard.php');
            }
            elseif($row["role"] == "teacher")
            {
                $_SESSION['User'] = $row["username"];
                $_SESSION['role'] = $row["role"];
                header('Location: ../lmsphp/student/course.php');
            }
            elseif($row["role"] == "student")
            {
                $_SESSION["User"] = $row["username"];
                $_SESSION['role'] = $row["role"];
                header('Location: ../lmsphp/student/home.php');
            }

        }       

    }else
    {
        header("Location:index.php");

    }

}



?>
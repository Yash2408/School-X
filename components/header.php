<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">


    <!-- Google-font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>iSchool</title>
</head>
<body>

    <!-- Navigation Bar -->

    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
    <a class="navbar-brand" href="index.php">School-X</a>
    <span class="navbar-text">Learn.Grow</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav custom-nav pl-5">
            <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home </a></li>
            <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
            <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
            <?php
                session_start();
                if(isset($_SESSION['is_login'])){
                    echo '
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">
                    My Profile</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                    ';
                }
                else{
                    echo '
                        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" 
                        data-target="#stuLoginModalCenter">Login</a></li>
                        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" 
                        data-target="#stuRegModalCenter">Signup</a></li>
                    ';
                }
            ?>
        </ul>
    </div>
    </nav>

    <!-- Navigation Bar Ends -->


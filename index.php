    <!-- Navigation starts -->
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
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>
            </ul>
        </div>
        </nav>

        <!-- Navigation Bar Ends -->


        <!-- Navigation ends -->

    <!-- Video background start -->

    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video src="video/Banner-video.mp4" playsinLine autoplay muted loop>
            </video>
            <div class="vid-overlay">

            </div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Welcome To School-X</h1>
            <h6 class="my-content">Learn and Grow</h6>
            <br/>

            <?php
                if(!isset($_SESSION['is_login'])){
                    echo '
                    <a href="#" class="btn btn-success mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>
                    ';
                } else{
                    echo '<a href="#" class="btn btn-primary mt-3">
                    My Profile</a>
                    ';
                }
            ?>
        </div>
    </div>

    <!-- Video background end -->

    <!-- Text Banner start -->

    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Expert Instructor</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-inr mr-3"></i>Money Back Guarantee*</h5>
            </div>
        </div>
    </div>

    <!-- Text Banner end -->

    <!-- most popular course start -->

     <?php
        include "./components/courses_card.php";
    ?>

    <!-- most popular course start -->


    <!-- contact us start -->
    <?php
    include "./components/contactus.php";
    ?>
    <!-- contact us ends -->

    <!-- Social start -->
    <div class="container-fluid bg-secondary">
        <div class="row text-white text-center p-2">
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>WhatsApp</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
            </div>
        </div>
    </div>
    <!-- Social ends -->

    <!-- About us section start -->
    
    <div class="container-fluid p-4" style="background-color:#e9ecef">
    <div class="container" style="background-color:#e9ecef">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>School-X provides universal access to the world's best
                    education, partnering with top universities and oraganizations
                    to offer courses online.
                </p>
            </div>
            <div class="col-sm">
                <h5>Category</h5>
                <a class="text-dark" href="#">Web Development</a><br>
                <a class="text-dark" href="#">Web Designing</a><br>
                <a class="text-dark" href="#">Android App Development</a><br>
                <a class="text-dark" href="#">iOS Development</a><br>
                <a class="text-dark" href="#">Data Analysis</a><br>
            </div>
            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>
                    School-X, Near Army Camp Makarpura,
                    Vadodara - 635336
                    <br>
                    Phone : +022 2786 4763
                    <br>
                    www.school-x.com
                </p>
            </div>
        </div>
    </div>
    </div>

    <!-- about us section ends -->

    <!-- start footer -->

    <?php
        include "./components/footer.php";
    ?>

    <!-- footer ends -->

    <!-- start student registration modal  -->

        <?php
            include "./components/stuReg.php";
        ?>

    <!-- end student registration modal  -->


    <!-- start student login modal -->
        
        <?php
            include "./components/stuLogin.php";
        ?>
    
    <!-- ends student login modal -->

        <!-- admin modal start -->

         <?php
            include "./components/adminLogin.php";
        ?>

        <!-- admin modal ends -->

    <!-- Jquery and Bootstrap Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/ajaxrequest.js"></script>
    <script src="js/adminajaxrequest.js"></script>
</body>
</html>
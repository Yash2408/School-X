<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>    
    <!-- Navigation Bar starts -->
    <?php
        include "./components/header.php";
    ?>

    <!-- Navigation Bar ends -->

    <!-- course Page Banner Start -->

    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./images/coursebanner.avif" alt="courses"
            style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
        </div>
    </div>

    <!-- course page banner Ends -->

    

    <!-- course details starts -->

    <div class="container mt-5">
        <h1 class="text-center">All Courses</h1>
        <!-- 1st card -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align:left; padding:0px;margin:0px;">
                <div class="card">
                    <img src="images/Guitar.jpg" class="card-img-top" alt="Guitar">
                    <div class="card-body">
                        <h5 class="card-title">Learn Guitar Easy Way</h5>
                        <p class="card-text">Learning with guitar is easiest way to learn singing.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small>
                                <del>&#8377 2000</del>
                            </small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetail.php">
                            Enroll
                        </a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align:left; padding:0px;margin:0px;">
                <div class="card">
                    <img src="images/Guitar.jpg" class="card-img-top" alt="Guitar">
                    <div class="card-body">
                        <h5 class="card-title">Learn Guitar Easy Way</h5>
                        <p class="card-text">Learning with guitar is easiest way to learn singing.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small>
                                <del>&#8377 2000</del>
                            </small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">
                            Enroll
                        </a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align:left; padding:0px;margin:0px;">
                <div class="card">
                    <img src="images/Guitar.jpg" class="card-img-top" alt="Guitar">
                    <div class="card-body">
                        <h5 class="card-title">Learn Guitar Easy Way</h5>
                        <p class="card-text">Learning with guitar is easiest way to learn singing.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small>
                                <del>&#8377 2000</del>
                            </small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">
                            Enroll
                        </a>
                    </div>
                </div>
            </a>
        </div>
        <!-- 1st card end -->
        <!-- 2nd card start -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align:left; padding:0px;margin:0px;">
                <div class="card">
                    <img src="images/Python.png" class="card-img-top" alt="Python">
                    <div class="card-body">
                        <h5 class="card-title">Learn Python</h5>
                        <p class="card-text">Python is very easy and most popular in the world.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small>
                                <del>&#8377 3000</del>
                            </small>
                            <span class="font-weight-bolder">&#8377 300</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">
                            Enroll
                        </a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align:left; padding:0px;margin:0px;">
                <div class="card">
                    <img src="images/Python.png" class="card-img-top" alt="Python">
                    <div class="card-body">
                        <h5 class="card-title">Learn Python</h5>
                        <p class="card-text">Python is very easy and most popular in the world.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small>
                                <del>&#8377 3000</del>
                            </small>
                            <span class="font-weight-bolder">&#8377 300</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">
                            Enroll
                        </a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align:left; padding:0px;margin:0px;">
                <div class="card">
                    <img src="images/Python.png" class="card-img-top" alt="Python">
                    <div class="card-body">
                        <h5 class="card-title">Learn Python</h5>
                        <p class="card-text">Python is very easy and most popular in the world.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small>
                                <del>&#8377 3000</del>
                            </small>
                            <span class="font-weight-bolder">&#8377 300</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">
                            Enroll
                        </a>
                    </div>
                </div>
            </a>
        </div>
        <!-- 2nd card ends -->

    <!-- course details ends -->

    <!-- start footer -->


    <?php
        include "./components/footer.php";
    ?>

    <!-- footer ends -->
</body>
</html>
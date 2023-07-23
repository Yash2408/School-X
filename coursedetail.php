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

    <!-- main content of course detail -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="./images/Guitar.jpg" class="card-img-top" alt="Guitar" style="height:80%; width:85%;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Course Name : Learn Guitar</h5>
                    <p class="card-text">Description: Guitar with beautiful and smooth 
                        experience. able to learn most dynamic effect of the singing.
                    </p>
                    <p class="card-text">Duration : 10 Days</p>
                    <form action="" method="post">
                        <p class="card-text d-inline">Price : <small><del>&#8377 2000
                        </del></small><span class="font-weight-bolder">&#8377 200</span></p>
                        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="but">
                            Buy Now
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Lesson No.</th>
                            <th scope="col">Lesson Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Introduction</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- main content of course detail ends-->

     <!-- start footer -->

    <?php
        include "./components/footer.php";
    ?>

    <!-- footer ends -->
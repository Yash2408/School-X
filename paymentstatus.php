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

    <!-- main content starts -->

    <div class="container">
        <h2 class=""text-center my-4>Payment Status</h2>
        <form method="post" action="">
            <div class="form-group row">
                <label class="offset-sm-3">Order ID : </label>
                <div>
                    <input type="text" class="form-control mx-3">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary mx-4"
                    value="View">
                </div>
            </div>
        </form>
    </div>

    <!-- main content ends -->

    <!-- contact us section starts -->

    <?php
    include "components/contactus.php";
    ?>

    <!-- contact us section ends -->

     <!-- start footer -->

    <?php
        include "./components/footer.php";
    ?>

    <!-- footer ends -->
<?php
    include "./components/header.php"
?>
            <div class="col-sm-9 mt-5">
                <!-- 1st card -->
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3"
                        style="max-width:18rem;">
                            <div class="card-header">
                                Courses
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    5
                                </h4>
                                <a href="#" class="btn text-white">
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                <!-- 2nd card -->
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3"
                        style="max-width:18rem;">
                            <div class="card-header">
                                Students
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    25
                                </h4>
                                <a href="#" class="btn text-white">
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                <!-- 3rd card -->
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3"
                        style="max-width:18rem;">
                            <div class="card-header">
                                Sold
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    3
                                </h4>
                                <a href="#" class="btn text-white">
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5 text-center">
                    <!-- Table -->
                    <p class="bg-dark text-white p-2">Course Ordered</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Course ID</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Amout</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">22</th>
                                <td>100</td>
                                <td>sonam@gmail.com</td>
                                <td>20/2/2023</td>
                                <td>2000</td>
                                <td><button type="submit" class="btn
                                btn-secondary" name="delete" value="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                </svg>
                                </button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "./components/footer.php"
    ?>
</body>
</html>
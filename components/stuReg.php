
    <!-- start student registration modal  -->

    <!-- Modal -->
        <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--registration form code is here -->
                <form id="stuRegForm">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <label for="stuname" class="pl-2 font-weight-bold">Name</label>
                        <small id="statusMsg1"></small>
                        <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                        <small id="statusMsg2"></small>
                        <input type="email" class="form-control" id="stuemail" name="stuemail" placeholder="Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                        <small id="statusMsg3"></small>
                        <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
                    </div>
                </form>
                <!--registration form ends -->
            </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div> 

    <!-- ends student registration modal -->
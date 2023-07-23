<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--login form code is here -->
                <form id="stuLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
                        <input type="email" class="form-control" id="stuLogemail" name="stuLogemail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
                    </div>
                </form>
                <!--login form ends -->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
        </div> 